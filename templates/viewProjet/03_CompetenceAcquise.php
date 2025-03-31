  <!-- Conteneur principal -->
  <div class="mb-[100px]  min-[400px]:mt-[500px] sm:mt-[10px] mr-[20px] ">


      <!-- Liste des compétences Web -->
      <div class="mb-12 mt-12 ">
          <h2 class="text-xl font-semibold mb-4 text-white">Compétences Web</h2>
          <ul class="flex gap-4 flex-wrap">
              <script>
                  const competencesWeb = [{
                          name: 'HTML',
                          icon: 'fab fa-html5'
                      },
                      {
                          name: 'CSS',
                          icon: 'fab fa-css3-alt'
                      },
                      {
                          name: 'Tailwind CSS',
                          icon: 'fab fa-css3-alt'
                      },
                      {
                          name: 'PHP',
                          icon: 'fab fa-php'
                      },

                  ];

                  competencesWeb.forEach(competence => {
                      document.write(`
              <li class="flex lg:w-[20%] md:w-[30%] w-[45%] items-center p-2 bg-gradient-to-r from-gray-500 via-gray-550 to-gray-600 rounded-lg shadow-md">
                <i class="${competence.icon} text-2xl sm:text-4xl mr-2 md:mr-4"></i>
                <span class="text-[16px] md:text-lg text-gray-300 font-semibold">${competence.name}</span>
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

                      {
                          name: 'Ubuntu',
                          icon: 'fab fa-linux'
                      },
                      {
                          name: 'Python',
                          icon: 'fab fa-python'
                      },
                      {
                          name: 'SSH',
                          icon: 'fas fa-lock'
                      },
                      {
                          name: 'Server',
                          icon: 'fas fa-server'
                      },
                      {
                          name: 'GitLab',
                          icon: 'fab fa-gitlab'
                      },

                  ];

                  competencesASRBD.forEach(competence => {
                      document.write(`
              <li class="flex lg:w-[20%] w-[45%] md:w-[30%] bg-gradient-to-r from-gray-500 via-gray-550 to-gray-600 p-2 bg-white rounded-lg shadow-md">
                <i class="${competence.icon} text-xl sm:text-4xl mr-2 md:mr-4"></i>
                <span class="text-[13px] text-gray-300 md:text-lg font-semibold">${competence.name}</span>
              </li>
            `);
                  });
              </script>
          </ul>
      </div>
  </div>