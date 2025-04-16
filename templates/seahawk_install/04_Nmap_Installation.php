<div class="max-w-full md:max-w-6xl mt-10 text-white gap-2 flex flex-col px-4">
  <h1 class="text-3xl font-bold text-center md:text-left">Scanner Réseau Python - Guide d'installation</h1>
  <p class="text-blue-200 text-center md:text-left">Fonctionne sur Windows & Linux - Interface Console</p>
</div>

<div class="max-w-full md:max-w-4xl py-10 space-y-10 px-4">

  <!-- Présentation -->
  <section class="text-white">
    <h2 class="text-2xl font-semibold mb-2">🔍 Présentation</h2>
    <p>Ce scanner réseau permet de détecter les machines actives, les ports ouverts et exporter les résultats au format XML. Il est écrit en Python, fonctionne en console et utilise Nmap pour les scans.</p>
  </section>

  <!-- Pré-requis -->
  <section class="text-white">
    <h2 class="text-2xl font-semibold mb-2">⚙️ Pré-requis</h2>
    <ul class="list-disc list-inside space-y-1">
      <li>Python 3.7+</li>
      <li>Pip (installé avec Python)</li>
      <li>Accès administrateur pour installer Nmap</li>
      <li>Connexion au réseau local</li>
    </ul>
  </section>

  <!-- Installation du projet -->
  <section class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
    <?php include "./templates/module/terminal.php" ?>
  </section>

  <!-- Lancer le scanner -->
  <section class="mb-8">
    <h2 class="text-2xl font-semibold mb-2 text-white">🚀 Lancer le scanner</h2>
    <div class="bg-black text-white rounded-lg shadow-lg overflow-hidden">
      <!-- Terminal Header -->
      <div class="bg-gray-800 flex items-center justify-between p-2">
        <div class="flex space-x-2">
          <span class="w-3 h-3 bg-red-600 rounded-full"></span>
          <span class="w-3 h-3 bg-yellow-500 rounded-full"></span>
          <span class="w-3 h-3 bg-green-400 rounded-full"></span>
        </div>
      </div>

      <!-- Terminal Body -->
      <div class="p-4">
        <!-- Terminal prompt -->
        <div class="flex items-center">
          <span class="text-green-400">stanislas@admin:</span>
          <span class="text-green-400">~</span>
          <span class="text-green-400">$</span>
          <span class="ml-1 text-green-400 blinking-cursor">_</span>
        </div>
        
        <!-- Terminal command output -->
        <div class="mt-4">
          <span class="text-green-400">python scanner.py</span><br>
          <span class="text-white text-sm">Une interface en ligne de commande s'ouvre, vous demandant le réseau à scanner (ex: <code class="text-yellow-400">192.168.1.0/24</code>).</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Exemple d'utilisation -->
  <section class="mb-8">
    <h2 class="text-2xl font-semibold mb-2 text-white">📋 Exemple d'utilisation</h2>
    <p class="mb-2 text-white">Une fois le scan terminé, vous verrez une sortie comme :</p>
    <div class="bg-black text-white rounded-lg shadow-lg overflow-hidden">
      <!-- Terminal Header -->
      <div class="bg-gray-800 flex items-center justify-between p-2">
        <div class="flex space-x-2">
          <span class="w-3 h-3 bg-red-600 rounded-full"></span>
          <span class="w-3 h-3 bg-yellow-500 rounded-full"></span>
          <span class="w-3 h-3 bg-green-400 rounded-full"></span>
        </div>
        <p class="text-white text-sm">stanislas@admin: ~</p>
      </div>

      <!-- Terminal Body -->
      <div class="p-4">
        <!-- Terminal prompt -->
        <div class="flex items-center">
          <span class="text-green-400">stanislas@admin:</span>
          <span class="text-green-400">~</span>
          <span class="text-green-400">$</span>
          <span class="ml-1 text-green-400 blinking-cursor">_</span>
        </div>
        
        <!-- Terminal output -->
        <div class="mt-4">
          <span class="text-green-400">[+] 192.168.1.15 - PC-de-Paul | Latence: 4 ms | Ports: 22, 80, 443</span><br>
          <span class="text-green-400">[+] 192.168.1.20 - Inconnu | Latence: &lt;1 ms | Ports: Aucun</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Export -->
  <section class="text-white">
    <h2 class="text-2xl font-semibold mb-2 text-white">📝 Exporter en XML</h2>
    <p>Après le scan, tapez <code>y</code> pour enregistrer les résultats dans un fichier <strong>scan_YYYYMMDD_HHMMSS.xml</strong> prêt à être lu ou partagé.</p>
  </section>

  <!-- Support -->
  <section class="text-white">
    <h2 class="text-2xl font-semibold mb-2 text-white">❓ Support</h2>
    <p>Un souci ? Vérifie que :</p>
    <ul class="list-disc list-inside space-y-1">
      <li>Nmap est bien installé et accessible dans le terminal</li>
      <li>Python est en version 3.7 ou supérieure</li>
      <li>Tu as les droits administrateur pour certains réseaux</li>
    </ul>
  </section>

</div>

<!-- Custom CSS for the blinking cursor effect -->
<style>
  @keyframes blink {
    50% {
      opacity: 0;
    }
  }
  .blinking-cursor {
    animation: blink 1s step-end infinite;
  }
</style>
