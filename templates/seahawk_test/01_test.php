<h1>Scanner Réseau avec Nmap</h1>
    <button class="text-white" onclick="runScript()">Lancer le Scan</button>
    <p id="status"></p>

    <script>
        function runScript() {
            fetch('/run-script')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('status').innerText = data;
                })
                .catch(error => {
                    document.getElementById('status').innerText = 'Erreur lors du lancement du script.';
                });
        }
    </script>