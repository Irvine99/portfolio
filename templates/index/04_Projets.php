<div id="projets" class="flex flex-col justify-center items-center mt-[100px] sm:mt-[600px] md:mt-[0px] lg:mt-[10px]">
    <div class="text-[#10B52E]">DEPUIS 2024</div>
    <div class="text-[60px] font-bold text-white">Projets</div>
</div>
<div class="flex flex-col gap-12">
    <?php
    $projects = [
        ["name" => "Seahawks Monitoring", "title" => "Scanner & Dashboard","description" => "Seahawks Monitoring est une solution complète de supervision réseau développée dans le cadre d'une certification professionnelle. Elle s'appuie sur deux outils complémentaires : Harvester, une application cliente de scan réseau avec interface graphique, et Nester, un serveur centralisé pour la visualisation des données. Le projet intègre des technologies comme Python, GitLab, SSH et l'intégration continue pour assurer sécurité et évolutivité. Cette solution offre un monitoring en temps réel, une gestion proactive des incidents et une amélioration des performances réseau.", "link" => "index.php?page=seahawks", "image" => "../src/jpg/dashboard.jpg"],
        ["name" => "Seahwaks Monitoring", "title" => "Sécurisation BDD","description" => "Le projet 'Seahawks Monitoring centralise et sécurise les données des instances Harvester pour les franchises de la NFL. Il utilise le mirroring pour la haute disponibilité, TLS pour des communications sécurisées, et AES pour chiffrer les données sensibles. Un tableau de bord web permet la supervision et la maintenance à distance.", "link" => "index.php?page=bdd_Intro", "image" => "../src/png/bdd.png"],

    ];
    ?>

    <div class="mt-[50px] flex flex-col lg:flex-row lg:items-start justify-center items-center xl:mx-[100px] lg:mx-[50px] gap-12 lg:gap-20 flex-wrap" id="projets">
        <?php foreach ($projects as $project): ?>
            <div class="flex flex-col w-[90%] sm:w-[80%] md:w-[60%] lg:w-[45%] xl:w-[40%] bg-[#ffffff]/5 shadow-[#10B52E] hover:shadow-xl transition-shadow duration-300 rounded-[20px] overflow-hidden" data-card>

                <!-- Image -->
                <div class="w-full h-[200px] lg:h-[250px] rounded-t-[20px] overflow-hidden">
                    <img src="<?php echo $project['image']; ?>" alt="card image" class="w-full h-full object-cover">
                </div>

                <!-- Contenu -->
                <div class="flex flex-col p-6 flex-1" data-content>
                    <!-- Titre -->
                    <div class="text-[#10B52E] text-[20px] xl:text-[30px] mb-2 font-semibold">
                        <?php echo $project['name']; ?>
                    </div>
                    <div class="text-[#10B52E] text-[14px] xl:text-[20px] mb-2 font-semibold">
                        <?php echo $project['title']; ?>
                    </div>

                    <!-- Description avec transition pour agrandissement -->
                    <div class="text-white text-[16px] xl:text-[20px] lg:text-[18px] leading-6 mb-2 line-clamp-4 transition-all duration-500 ease-in-out max-h-[120px] overflow-hidden" data-description>
                        <?php echo $project['description']; ?>
                    </div>

                    <!-- Bouton Voir plus / Voir moins -->
                    <button type="button" class="text-[#10B52E] text-sm hover:underline mb-4 self-end" onclick="toggleDescription(this)">
                        voir plus
                    </button>

                    <!-- Lien "voir plus" final -->
                    <a href="<?php echo $project['link']; ?>" class="flex items-end gap-2 mt-auto">
                        <div class="rounded-full bg-white/5 shadow-sm shadow-[#10B52E] p-1 ">
                            <img src="./src/svg/arrow.svg" alt="arrow" class="w-[36px] h-[36px] lg:w-[48px] lg:h-[48px] xl:w-[50px] xl:h-[50px] transition-transform transform hover:scale-110">
                        </div>
                        <div class="text-[#10B52E]">Voir le projet</div>
                    </a>

                </div>
            </div>
        <?php endforeach; ?>
    </div>



</div>
<!--  -->
<div class="flex justify-center mt-[100px]">
    <button class="rounded-full text-[#10B52E] border-[#10B52E] border-[1px] p-4 font-bold ">Charger plus de projets</button>
</div>