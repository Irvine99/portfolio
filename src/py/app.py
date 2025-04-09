import dash
from dash import dcc, html
import pandas as pd
import xml.etree.ElementTree as ET
from dash.dependencies import Input, Output
import dash_bootstrap_components as dbc
import plotly.express as px
import base64
import io

# Création de l'application Flask
from flask import Flask
server = Flask(__name__)

# Création de l'application Dash
app = dash.Dash(__name__, server=server, external_stylesheets=[dbc.themes.BOOTSTRAP])

# Fonction pour lire le fichier XML
def read_xml(file_contents):
    content_type, content_string = file_contents.split(',')
    decoded = base64.b64decode(content_string)
    tree = ET.parse(io.BytesIO(decoded))
    root = tree.getroot()
    
    # Extraction des données du fichier XML
    data = []
    for machine in root.findall('device'):
        name = machine.find('hostname').text
        ip = machine.find('ip').text
        latency = machine.find('latency').text
        open_ports = machine.find('ports').text
        data.append({
            'Name': name,
            'IP': ip,
            'Latency (ms)': latency,
            'Open Ports': open_ports
        })
    return pd.DataFrame(data)

# Filtrage des données par ports ouverts (ex : 22, 80, etc.)
def filter_by_port(df, port):
    if port != 'all':
        return df[df['Open Ports'].str.contains(str(port))]
    return df

# Calcul des statistiques sur les ports ouverts
def get_port_stats(df):
    all_ports = ','.join(df['Open Ports'].tolist()).split(',')
    port_counts = pd.Series(all_ports).value_counts()
    return port_counts

# Layout du dashboard
app.layout = html.Div([
    # Mise en page du corps avec une marge
    html.Div([
        dbc.Row([
            dbc.Col(html.H1("Dashboard Réseau", className="text-center"), width=12, className="my-4")
        ]),

        # Section pour télécharger le fichier XML
        dbc.Row([
            dbc.Col([
                dcc.Upload(
                    id='upload-data',
                    children=html.Button('Charger un fichier XML', className='btn btn-primary'),
                    multiple=False
                ),
                html.Div(id='output-file-upload')
            ], width=12)
        ], className="mb-4"),

        # Filtre pour les ports ouverts et machines
        dbc.Row([
            dbc.Col([
                html.Label("Filtrer par Port Ouvert"),
                dcc.Dropdown(
                    id="port-filter",
                    options=[
                        {'label': 'Tous les Ports', 'value': 'all'},
                        {'label': 'Port 22 (SSH)', 'value': '22'},
                        {'label': 'Port 80 (HTTP)', 'value': '80'},
                        {'label': 'Port 443 (HTTPS)', 'value': '443'},
                        {'label': 'Port 8080', 'value': '8080'},
                        {'label': 'Autre Port', 'value': 'other'}
                    ],
                    value='all',
                    multi=False
                ),
            ], width=6),

            # Filtre pour les machines
            dbc.Col([
                html.Label("Filtrer par Machine"),
                dcc.Dropdown(
                    id="machine-filter",
                    value=[],  # Initialement vide
                    multi=True,
                    options=[]  # Les options seront ajoutées dynamiquement
                ),
            ], width=6)
        ], className="mb-4"),

        # Section de graphiques
        dbc.Row([
            dbc.Col([
                html.Div([
                    html.H3("Répartition des Ports Ouverts"),
                    dcc.Graph(id="port-stats-pie-chart")
                ], className="mb-4", style={'border': '1px solid #dee2e6', 'border-radius': '10px', 'padding': '20px'}),
            ], width=6),

            dbc.Col([
                html.Div([
                    html.H3("Total de Machines Scannées"),
                    html.Div(id="total-machines", className="display-4")
                ], className="text-center", style={'border': '1px solid #dee2e6', 'border-radius': '10px', 'padding': '20px'}),
            ], width=6)
        ]),

        # Section du tableau des machines
        dbc.Row([
            dbc.Col([
                html.Div([
                    html.H3("Liste des Machines"),
                    html.Div(id="table-container")
                ], style={'border': '1px solid #dee2e6', 'border-radius': '10px', 'padding': '20px'})
            ], width=12)
        ])
    ], style={'margin': '0 10%', 'padding': '20px'})
])

# Callback pour charger le fichier et mettre à jour le tableau et les graphiques
@app.callback(
    [Output('output-file-upload', 'children'),
     Output('port-stats-pie-chart', 'figure'),
     Output('table-container', 'children'),
     Output('total-machines', 'children'),
     Output('machine-filter', 'options')],
    [Input('upload-data', 'contents'),
     Input('port-filter', 'value'),
     Input('machine-filter', 'value')]
)
def update_dashboard(file_contents, port_filter, machine_filter):
    if file_contents is None:
        return "Veuillez télécharger un fichier XML.", {}, "", 0, []

    # Lire le fichier XML
    df = read_xml(file_contents)
    
    # Mettre à jour les options de machines
    machine_options = [{'label': name, 'value': name} for name in df['Name'].unique()]
    
    # Filtrage des données
    filtered_df = filter_by_port(df, port_filter)
    if machine_filter:
        filtered_df = filtered_df[filtered_df['Name'].isin(machine_filter)]
    
    # Création du tableau HTML
    table = html.Table([
        html.Thead(
            html.Tr([html.Th(col, style={'padding': '5px', 'text-align': 'center'}) for col in filtered_df.columns])
        ),
        html.Tbody([
            html.Tr([
                html.Td(filtered_df.iloc[i][col], style={'padding': '5px', 'text-align': 'center'})
                for col in filtered_df.columns
            ]) 
            for i in range(len(filtered_df))
        ])
    ], style={'width': '100%', 'border-collapse': 'collapse', 'margin-top': '20px'})

    # Graphique des ports ouverts
    port_counts = get_port_stats(filtered_df)
    port_pie_chart = px.pie(
        names=port_counts.index, 
        values=port_counts.values, 
        title="Répartition des Ports Ouverts",
        labels={"values": "Nombre de Machines", "names": "Port"},
        hole=0.3
    )

    # Total des machines scannées
    total_machines = len(filtered_df)
    
    return "Fichier XML chargé avec succès.", port_pie_chart, table, total_machines, machine_options

if __name__ == '__main__':
    app.run_server(debug=True)
