from flask import Flask, render_template
import subprocess
import os
import sys

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/run-script')
def run_script():
    """Lance le script Tkinter pour exécuter le scan réseau."""
    try:
        # Lance ton script Tkinter en tant que processus séparé
        subprocess.Popen([sys.executable, 'main.py'])
        return "Scan lancé !", 200
    except Exception as e:
        return f"Erreur : {e}", 500

if __name__ == '__main__':
    app.run(debug=True)
