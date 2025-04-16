<style>
    /* Animation terminal */
    @keyframes openTerminal {
      0% {
        transform: scaleY(0.7);
        opacity: 0;
      }
      100% {
        transform: scaleY(1);
        opacity: 1;
      }
    }

    .animate-terminal {
      animation: openTerminal 0.8s ease-out forwards;
      transform-origin: top;
    }

    /* Animation par ligne */
    @keyframes lineDrop {
      0% {
        transform: scaleY(0.5);
        opacity: 0;
      }
      100% {
        transform: scaleY(1);
        opacity: 1;
      }
    }

    .animate-line {
      animation: lineDrop 0.4s ease-out;
      transform-origin: top;
    }

    /* Curseur clignotant optionnel */
    .cursor-blink::after {
      content: '|';
      animation: blink 1s step-end infinite;
    }

    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0; }
    }

    /* Texte du terminal */
    .terminal-text {
      color: white;
    }

    /* Terminal Linux */
    .terminal-linux {
      background-color: black;
    }

    .terminal-linux .terminal-prompt {
      color: #32CD32; /* Vert pour le prompt Linux */
    }

    /* Terminal Windows */
    .terminal-windows {
      background-color: #1E1E1E;
    }

    .terminal-windows .terminal-prompt {
      color: #00FF00; /* Vert pour le prompt Windows */
    }

    /* Style pour les boutons */
    .os-button {
      padding: 12px 30px;
      border-radius: 8px;
      font-size: 16px;
      display: flex;
      align-items: center;
      gap: 12px;
      cursor: pointer;
      background-color: #1a202c;
      color: white;
      border: 1px solid #4a5568;
      transition: background-color 0.3s;
    }

    .os-button:hover {
      background-color: #2d3748;
    }

    .os-icon {
      width: 32px;
      height: 32px;
    }
  </style>

<div class="w-full max-w-4xl flex flex-col gap-8 animate-terminal">
    <!-- Choix des boutons pour Linux et Windows -->
    <div class="flex gap-4 justify-center">
      <!-- Bouton Linux -->
      <div id="linux-installation-button" class="os-button">
        <img src="https://img.icons8.com/color/48/000000/linux.png" alt="Linux Logo" class="os-icon"/>
        <span>Installation sur Linux</span>
      </div>

      <!-- Bouton Windows -->
      <div id="windows-installation-button" class="os-button">
        <img src="https://img.icons8.com/color/48/000000/windows-10.png" alt="Windows Logo" class="os-icon"/>
        <span>Installation sur Windows</span>
      </div>
    </div>

    <!-- Terminal Linux -->
    <div id="linux-terminal" class="w-full bg-black rounded-lg shadow-lg font-mono hidden">
      <div class="bg-gray-800 px-4 py-2 flex items-center justify-between rounded-t-lg">
        <div class="flex space-x-2">
          <div class="w-3 h-3 bg-red-500 rounded-full"></div>
          <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
          <div class="w-3 h-3 bg-green-500 rounded-full"></div>
        </div>
        <p class="text-sm text-gray-300">stanislas@linux: ~</p>
        <div></div>
      </div>
      <div class="px-4 py-6 space-y-4 text-sm overflow-auto max-h-[400px] terminal-linux">
        <!-- Le texte du terminal Linux sera ici -->
      </div>
    </div>

    <!-- Terminal Windows -->
    <div id="windows-terminal" class="w-full bg-gray-800 rounded-lg shadow-lg font-mono hidden">
      <div class="bg-gray-800 px-4 py-2 flex items-center justify-between rounded-t-lg">
        <div class="flex space-x-2">
          <div class="w-3 h-3 bg-red-500 rounded-full"></div>
          <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
          <div class="w-3 h-3 bg-green-500 rounded-full"></div>
        </div>
        <p class="text-sm text-gray-300">stanislas@windows: ~</p>
        <div></div>
      </div>
      <div class="px-4 py-6 space-y-4 text-sm overflow-auto max-h-[400px] terminal-windows">
        <!-- Le texte du terminal Windows sera ici -->
      </div>
    </div>
</div>

<script>
  // Fonction pour afficher le texte ligne par ligne avec animation
  async function typeLine(text, terminal, isCommand = false) {
    const line = document.createElement("div");
    line.className = "whitespace-pre-wrap terminal-text";
    terminal.appendChild(line);
    
    for (let i = 0; i < text.length; i++) {
      await new Promise(r => setTimeout(r, 30));
      line.innerHTML = text.substring(0, i + 1);
      terminal.scrollTop = terminal.scrollHeight;
    }
  }

  // Simuler le terminal pour Linux
  async function runLinuxScript() {
    const terminal = document.querySelector("#linux-terminal .terminal-linux");
    terminal.innerHTML = "";  // Réinitialiser le terminal
    document.getElementById("linux-terminal").classList.remove("hidden");

    const linuxCommands = [
      "# Cloner le dépôt Git",
      "git clone <URL_du_dépôt>",
      "",
      "# Création d'un environnement virtuel",
      "python -m venv env",
      "",
      "# Activation de l'environnement virtuel",
      "source env/bin/activate  # macOS/Linux",
      "",
      "# Installation des dépendances",
      "pip install dash dash-bootstrap-components pandas plotly flask"
    ];

    for (const cmd of linuxCommands) {
      await typeLine(cmd, terminal, true);
      await new Promise(resolve => setTimeout(resolve, 800));
    }

    // Fin de simulation
    await typeLine("Installation terminée.", terminal);
  }

  // Simuler le terminal pour Windows
  async function runWindowsScript() {
    const terminal = document.querySelector("#windows-terminal .terminal-windows");
    terminal.innerHTML = "";  // Réinitialiser le terminal
    document.getElementById("windows-terminal").classList.remove("hidden");

    const windowsCommands = [
      "# Création d'un environnement virtuel",
      "python -m venv env",
      "",
      "# Activation de l'environnement virtuel",
      ".\\env\\Scripts\\activate  # Windows",
      "",
      "# Installation des dépendances",
      "pip install dash dash-bootstrap-components pandas plotly flask"
    ];

    for (const cmd of windowsCommands) {
      await typeLine(cmd, terminal, true);
      await new Promise(resolve => setTimeout(resolve, 800));
    }

    // Fin de simulation
    await typeLine("Installation terminée.", terminal);
  }

  // Événements sur les boutons
  document.getElementById("linux-installation-button").addEventListener("click", runLinuxScript);
  document.getElementById("windows-installation-button").addEventListener("click", runWindowsScript);
</script>
