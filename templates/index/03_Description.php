<div class="absolute top-[920px] md:top-[1000px] max-w-[1440px] mx-auto">
    <div class="">
        <div class="flex md:flex-row flex-col ">
            <div class="flex flex-col w-[80%] md:w-[55%] xl:w-[35%]"> ">
                <div class="text-white text-[60px] font-bold">A propos</div>
                <div class="text-white font-normal mt-[50px]">Je suis une personne passionnée de développement web front-end, possédant des compétences solides en HTML, CSS, JavaScript et Tailwind CSS. Avec une expérience pratique dans la création de sites web modernes et esthétiques, je suis fier de dire que je suis un développeur front-end compétent qui cherche toujours l'évolutions.</div>
                <div class="text-white font-normal mt-[50px]">Je suis capable de structurer les pages web de manière efficace et conviviale pour les utilisateurs. De plus, mes compétences en CSS me permettent de créer des designs esthétiques et modernes pour les sites web, ce qui est crucial pour offrir une expérience utilisateur optimale.</div>
                <?php
                $technologies = ["HTML", "CSS", "JS", "Tailwind", "PHP", "React"];
                ?>

                <div class="flex gap-2 md:gap-[24px] mt-[30px] md:mt-[60px] flex-wrap justify-start w-full max-w-[100%]">
                    <?php foreach ($technologies as $tech): ?>
                        <button class="lg:px-6 lg:py-3 px-3 py-1 font-bold rounded-[60px] " style="background: linear-gradient(53.67deg, #68DF7E 9.76%, #10B52E 98.54%);">
                            <?php echo $tech; ?>
                        </button>
                    <?php endforeach; ?>
                </div>


            </div>
            <div class="flex grow-1 ml-[50px] lg:ml-[40px] items-center md:w-[65%] mt-[40px] md:mt-0">
                <img src="./src/png/profil.png" alt="" class="lg:w-[420px] lg:h-[420px] h-[250px] w-[250px] md:h-[350px] md:w-[350px]  rounded-full object-cover border-[4px] border-[#10B52E]">
            </div>
        </div>
    </div>
    <div class="flex xl:justify-end lg:items-end text-white mt-[50px]">
        <div class="w-[80%] md:w-[65%] lg:w-[45%] xl:w-[35%]   xl:mr-[150px]">En utilisant Tailwind CSS, je suis en mesure de créer rapidement des designs réactifs et esthétiques pour les sites web, en utilisant des classes pré-conçues pour simplifier le processus de développement. De plus, mes compétences en JavaScript me permettent de créer des fonctionnalités interactives pour améliorer l'expérience utilisateur et rendre les sites web plus dynamiques.</div>
    </div>
</div>