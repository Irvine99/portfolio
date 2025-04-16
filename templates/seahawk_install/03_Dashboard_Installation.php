<div class="max-w-full md:max-w-6xl mt-10 text-white gap-2 flex flex-col px-4">
  <h1 class="text-3xl font-bold text-center md:text-left">Dashboard Réseau - Guide d'installation</h1>
  <p class="text-blue-200 text-center md:text-left">Fonctionne sur Windows & Linux - Interface Web avec Dash</p>
</div>

<div class="max-w-full md:max-w-4xl py-10 space-y-10 px-4">

  <!-- Présentation -->
  <section class="text-white">
    <h2 class="text-2xl font-semibold mb-2">🔍 Présentation</h2>
    <p>Le <strong>Dashboard Réseau</strong> est une application interactive construite avec <strong>Dash</strong> qui permet de visualiser des informations provenant de fichiers XML concernant des machines sur un réseau. Vous pouvez charger un fichier XML contenant des informations sur des dispositifs réseau, puis filtrer et afficher des statistiques relatives aux ports ouverts, aux machines, et à la latence.</p>
  </section>

  <!-- Pré-requis -->
  <section class="text-white">
    <h2 class="text-2xl font-semibold mb-2">⚙️ Pré-requis</h2>
    <ul class="list-disc list-inside space-y-1">
      <li>Python 3.7 ou supérieur</li>
      <li>pip (installé avec Python)</li>
      <li>Dash, Dash Bootstrap Components, Pandas, Plotly, Flask</li>
      <li>Accès au réseau local pour tester les fonctionnalités réseau</li>
    </ul>
  </section>

  <!-- Installation du projet -->
<?php include "./templates/module/dash_terminal.php" ?>

  <!-- Lancer le dashboard -->
  <section class="mb-8">
    <h2 class="text-2xl font-semibold mb-2 text-white">🚀 Lancer le dashboard</h2>
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
          <span class="text-green-400">python app.py</span><br>
          <span class="text-white text-sm">L'application s'exécute par défaut sur le port 8050. Vous pouvez y accéder dans votre navigateur à l'adresse suivante :</span>
          <pre class="text-green-400">http://127.0.0.1:8050/</pre>
        </div>
      </div>
    </div>
  </section>

  <!-- Exemple d'utilisation -->
  <section class="mb-8">
    <h2 class="text-2xl font-semibold mb-2 text-white">📋 Exemple d'utilisation</h2>
    <p class="mb-2 text-white">Une fois que vous avez téléchargé et chargé un fichier XML, vous pouvez filtrer les machines en fonction des ports ouverts et voir les statistiques des ports ouverts sous forme de graphique en camembert. Voici un exemple de sortie du tableau après filtrage</p>

  </section>



  <!-- Support -->
  <section class="text-white">
    <h2 class="text-2xl font-semibold mb-2 text-white">❓ Support</h2>
    <p>Si vous rencontrez des problèmes, assurez-vous que :</p>
    <ul class="list-disc list-inside space-y-1">
      <li>Le Dashboard est correctement installé et accessible depuis le terminal</li>
      <li>Python est bien en version 3.7 ou supérieure</li>
      <li>Vous avez les droits administrateur nécessaires pour certains réseaux</li>
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
