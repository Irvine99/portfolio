<div class="flex flex-col justify-center items-center mt-[100px] sm:mt-[600px] md:mt-[0px] lg:mt-[10px]">
    <div class="text-[#10B52E]">DEPUIS 2024</div>
    <div class="text-[60px] font-bold text-white">Projets</div>
</div>
<div class="flex flex-col gap-12">
    <?php
    $projects = [
        ["name" => "Seahwaks", "description" => "Application visuel réseau", "link" => "index.php?page=seahawks", "image" => "../src/jpg/dashboard.jpg"],
            ["name" => "Seahwaks", "description" => "Application visuel réseau", "link" => "index.php?page=seahawks", "image" => "../src/jpg/dashboard.jpg"],

    ];
    ?>

<div class="mt-[50px] flex flex-col lg:flex-row lg:items-center justify-center items-center xl:mx-[100px] lg:mx-[50px] gap-12 lg:gap-20 flex-wrap">
    <?php foreach ($projects as $project): ?>
        <div class="flex flex-col w-[90%] sm:w-[80%] md:w-[60%] lg:w-[45%] xl:w-[40%] mb-8 lg:mb-0 bg-[#ffffff]/5 shadow-[#10B52E] hover:shadow-xl transition-shadow duration-300 rounded-[20px] ">
            <!-- Image en haut de la carte -->
            <div class="w-full h-[200px] lg:h-[250px] rounded-t-[20px] overflow-hidden">
                <img src="<?php echo $project['image']; ?>" alt="card image" class="w-full h-full object-cover">
            </div>
            <!-- Contenu de la carte -->
            <div class="flex flex-col p-6">
                <div class="text-[#10B52E] text-[20px] xl:text-[30px] mb-2"><?php echo $project['name']; ?></div>
                <div class="text-white text-[16px] xl:text-[20px] lg:text-[18px] leading-8 mb-4">
                    <?php echo $project['description']; ?>
                </div>
                <a href="<?php echo $project['link']; ?>" class="flex items-end gap-2  mt-4">
                    <img src="./src/svg/arrow.svg" alt="arrow" class="w-[36px] h-[36px] lg:w-[48px] lg:h-[48px] xl:w-[50px] xl:h-[50px] transition-transform transform hover:scale-110">
                    <div class="text-[#10B52E]">voir plus</div>
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