import tkinter as tk
from tkinter import ttk, filedialog
import nmap
import socket
import subprocess
import datetime
import xml.etree.ElementTree as ET
from threading import Thread
import platform
import re

# Variable globale pour stocker les résultats du scan
scan_results = []

# Fonction de scan réseau
def scan_network():
    """Scanne le réseau local et récupère les informations des hôtes actifs."""
    global scan_results
    network = entry_ip.get() # Sous-réseau à scanner (ex: 192.168.1.1/24)
    devices = []

    # Initialisation du scanner Nmap
    nm = nmap.PortScanner()
    nm.scan(hosts=network, arguments='-sn -PE -PP -T4')  # Scan de type "ping" pour détecter les hôtes actifs

    # Print the raw nmap scan results for debugging
    print(nm.scanstats())
    print(nm.all_hosts())

    # Récupération des informations pour chaque hôte détecté
    for host in nm.all_hosts():
        ip = host
        hostname = get_hostname(ip)  # Nom d'hôte
        latency = get_latency(ip)  # Latence
        open_ports = scan_ports(ip)  # Ports ouverts
        status = get_status(ip)  # Statut
        harvester_versions = get_harvester_versions(ip)  # Versions Harvesters
        
        # Ajout des informations dans la liste des appareils
        devices.append((hostname, ip,latency, open_ports, status, harvester_versions))
    
    scan_results = devices  # Sauvegarde des résultats
    update_treeview(devices)  # Mise à jour de l'interface
    progress_bar.stop()  # Arrêter la barre de progression
    status_label.config(text="Scan terminé")
    return devices

# Récupère le nom d'hôte d'un appareil à partir de son IP
def get_hostname(ip):
    try:
        return socket.gethostbyaddr(ip)[0]  # Résolution inverse de l'IP
    except socket.herror:
        return "Inconnu"

# Récupère la latence de l'hôte en envoyant un ping
def get_latency(ip):
    print(f"Pinging {ip}...")
    try:
        # Détecter le système d'exploitation
        system = platform.system().lower()
        
        # Adapte la commande ping selon le système d'exploitation
        if system == "windows":
            result = subprocess.run(["ping", "-n", "4", ip], capture_output=True, text=True)
        else:
            result = subprocess.run(["ping", "-c", "4", ip], capture_output=True, text=True)
        
        # Vérification de la sortie du ping
        if result.returncode == 0:
            # Print the raw ping output for debugging
            print(result.stdout)
            # Nettoyage de la sortie pour supprimer les caractères spéciaux
            clean_output = re.sub(r'[^\x00-\x7F]+', '', result.stdout)  # Supprime les caractères non-ASCII

            # Extraction du temps de réponse à partir de la sortie nettoyée
            for line in clean_output.split("\n"):
                if "time<1ms" in line or "temps<1ms" in line:
                    return "<1 ms"  # Retourner <1 ms si c'est le cas
                elif "time=" in line:
                    time_value = line.split("time=")[1].split("ms")[0].strip()
                    return time_value + " ms"
                elif "temps=" in line:  # Gérer les sorties en français
                    time_value = line.split("temps=")[1].split("ms")[0].strip()
                    return time_value + " ms"
        else:
            print(f"Ping command failed with return code {result.returncode}")
            return "N/A"  # Si le ping échoue, retourner "N/A"
    
    except Exception as e:
        print(f"Erreur lors du ping de {ip}: {e}")
        return "N/A"  # En cas d'exception, retourner "N/A"
    
    return "N/A"

# Scanne tous les ports d'un hôte
def scan_ports(ip):
    open_ports = []
    nm = nmap.PortScanner()
    nm.scan(ip, '1-1000')  # Scanner tous les ports de 1 à 65535
    
    # Vérification de l'état de chaque port
    for port in range(1, 1001):  # Tous les ports de 1 à 65535
        if nm[ip].has_tcp(port) and nm[ip]['tcp'][port]['state'] == 'open':
            open_ports.append(str(port))
    
    return ", ".join(open_ports) if open_ports else "Aucun"

# Retourne le statut de l'hôte (par défaut "Actif")
def get_status(ip):
    return "Actif"

# Retourne les versions des "harvesters" (exemple fictif ici)
def get_harvester_versions(ip):
    return "v1.0, v1.1"

# Met à jour l'affichage des résultats dans le tableau Tkinter
def update_treeview(devices):
    for row in tree.get_children():
        tree.delete(row)  # Supprimer les anciennes lignes
    for device in devices:
        tree.insert("", "end", values=device)  # Ajouter une nouvelle ligne

# Sauvegarde les résultats du scan dans un fichier XML
def save_to_xml():
    global scan_results
    devices = scan_results
    root = ET.Element("network_scan")

    # Ajouter le nom de la machine scanner au fichier XML
    machine_name = socket.gethostname()
    ET.SubElement(root, "scanner_machine").text = machine_name
    
    # Ajouter les informations de chaque appareil dans le XML
    for device in devices:
        dev_element = ET.SubElement(root, "device")
        ET.SubElement(dev_element, "hostname").text = device[0]
        ET.SubElement(dev_element, "ip").text = device[1]
        ET.SubElement(dev_element, "latency").text = device[2]
        ET.SubElement(dev_element, "ports").text = device[3]
        ET.SubElement(dev_element, "status").text = device[4]
        ET.SubElement(dev_element, "harvester_versions").text = device[5]
    
    # Sauvegarde le fichier XML
    tree = ET.ElementTree(root)
    timestamp = datetime.datetime.now().strftime("%Y%m%d_%H%M%S")
    default_filename = f"scan_{timestamp}.xml"
    
    filename = filedialog.asksaveasfilename(defaultextension=".xml", initialfile=default_filename, filetypes=[("Fichiers XML", "*.xml")])
    if filename:
        tree.write(filename)
        status_label.config(text=f"Résultats enregistrés sous {filename}")

# Fonction pour lancer un nouveau scan
def new_scan():
    entry_ip.delete(0, tk.END)
    tree.delete(*tree.get_children())
    status_label.config(text="")

# Fonction pour rafraîchir les informations
def refresh_info():
    scan_network()

# Fonction pour vérifier la mise à jour (exemple fictif)
def check_update():
    status_label.config(text="Vérification des mises à jour... (exemple fictif)")

# Fonction pour démarrer le scan avec la barre de progression
def start_scan():
    progress_bar.start()
    status_label.config(text="Scan en cours...")
    Thread(target=scan_network).start()

# Interface Tkinter
root = tk.Tk()
root.title("Scanner Réseau - Outil Professionnel")

# Frame principal de l'interface
main_frame = ttk.Frame(root, padding="15")
main_frame.pack(padx=10, pady=10, fill=tk.BOTH, expand=True)

# Frame pour les résultats du scan
results_frame = ttk.Frame(main_frame)
results_frame.pack(side=tk.LEFT, fill=tk.BOTH, expand=True, padx=(0, 10))

# Frame pour les boutons
buttons_frame = ttk.Frame(main_frame)
buttons_frame.pack(side=tk.RIGHT, fill=tk.Y, pady=(50, 0))

# Zone d'entrée pour l'adresse IP du réseau
ttk.Label(results_frame, text="Entrez l'adresse IP du réseau (ex: 192.168.1.1)").pack(pady=5)
entry_ip = ttk.Entry(results_frame, width=25)
entry_ip.pack(pady=5)

# Tableau pour afficher les résultats du scan
tree = ttk.Treeview(results_frame, columns=("Nom", "IP", "Latence", "Ports", "Statut", "Versions Harvesters"), show="headings", height=15)
for col in ("Nom", "IP", "Latence", "Ports", "Statut", "Versions Harvesters"):
    tree.heading(col, text=col)
    tree.column(col, width=150, anchor="center")
tree.pack(pady=10, fill=tk.BOTH, expand=True)

# Barre de progression
progress_bar = ttk.Progressbar(results_frame, mode='indeterminate')
progress_bar.pack(pady=10, fill=tk.X)

# Label pour afficher les messages de statut
status_label = ttk.Label(results_frame, text="")
status_label.pack()

# Bouton pour lancer le scan
ttk.Button(buttons_frame, text="Scanner", command=start_scan).pack(pady=20, fill=tk.X)

# Bouton pour lancer un nouveau scan
ttk.Button(buttons_frame, text="Nouveau Scan", command=new_scan).pack(pady=5, fill=tk.X)

# Bouton pour rafraîchir les informations
ttk.Button(buttons_frame, text="Rafraîchir", command=refresh_info).pack(pady=5, fill=tk.X)

# Bouton pour vérifier la mise à jour
ttk.Button(buttons_frame, text="Mise à jour", command=check_update).pack(pady=5, fill=tk.X)

# Bouton pour exporter les résultats en XML
ttk.Button(buttons_frame, text="Exporter XML", command=save_to_xml).pack(pady=50, fill=tk.X)

# Lancement de l'interface graphique
root.mainloop()