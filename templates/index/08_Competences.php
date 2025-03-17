  <!-- Conteneur principal -->
  <div class="mb-[100px] mt-[800px] sm:mt-[10px] mr-[20px]">
    <h1 class="text-2xl text-white font-bold  mb-16">Liste des Compétences</h1>
    
    <!-- Liste des compétences Web -->
    <div class="mb-12 ">
      <h2 class="text-xl font-semibold mb-4 text-white">Compétences Web</h2>
      <ul class="flex gap-4 flex-wrap">
        <script>
          const competencesWeb = [
            { name: 'HTML', icon: 'fab fa-html5' },
            { name: 'CSS', icon: 'fab fa-css3-alt' },
            { name: 'JavaScript', icon: 'fab fa-js-square' },
            { name: 'Tailwind CSS', icon: 'fab fa-css3-alt' },
            { name: 'PHP', icon: 'fab fa-php' },
            { name: 'React', icon: 'fab fa-react' },
            { name: 'Laravel', icon: 'fab fa-laravel' },
          ];

          competencesWeb.forEach(competence => {
            document.write(`
              <li class="flex lg:w-[20%] md:w-[30%] w-[45%] items-center p-2 bg-gradient-to-r from-green-400 via-green-500 to-green-600 rounded-lg shadow-md">
                <i class="${competence.icon} text-2xl sm:text-4xl mr-2 md:mr-4"></i>
                <span class="text-[16px] md:text-lg font-semibold">${competence.name}</span>
              </li>
            `);
          });
        </script>
      </ul>
    </div>

    <!-- Liste des compétences ASRBD -->
    <div>
      <h2 class="text-xl text-white font-semibold mb-4">Compétences ASRBD</h2>
      <ul class=" flex gap-4 flex-wrap">
        <script>
          const competencesASRBD = [
            { name: 'Kali Linux', icon: 'fab fa-linux' },
            { name: 'Ubuntu', icon: 'fab fa-linux' },
            { name: 'Windows Server', icon: 'fab fa-windows' },
            { name: 'Python', icon: 'fab fa-python' },
            { name: 'SQL', icon: 'fas fa-database' },
            { name: 'NoSQL', icon: 'fas fa-database' },
            { name: 'SSH', icon: 'fas fa-lock' },
            { name: 'Server', icon: 'fas fa-server' },
            { name: 'TLS', icon: 'fas fa-shield-alt' },
            { name: 'PostgreSQL', icon: 'fas fa-database' },
            { name: 'Oracle', icon: 'fas fa-database' },
            { name: 'Active Directory', icon: 'fas fa-users-cog' },
            { name: 'TCP/IP', icon: 'fas fa-network-wired' },
            { name: 'Système Réseaux', icon: 'fas fa-plug' },
            { name: 'Debian', icon: 'fab fa-linux' },
            { name: 'GitLab', icon: 'fab fa-gitlab' },
            { name: 'Docker', icon: 'fab fa-docker' },
          ];

          competencesASRBD.forEach(competence => {
            document.write(`
              <li class="flex w-[45%] md:w-[30%] bg-gradient-to-r from-green-400 via-green-500 to-green-600 p-2 bg-white rounded-lg shadow-md">
                <i class="${competence.icon} text-xl sm:text-4xl mr-2 md:mr-4"></i>
                <span class="text-[13px] md:text-lg font-semibold">${competence.name}</span>
              </li>
            `);
          });
        </script>
      </ul>
    </div>
  </div>