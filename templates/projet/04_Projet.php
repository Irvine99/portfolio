<div class="flex flex-col justify-center items-center mt-[100px] md:mt-[50px] lg:mt-[50px]">
    <div class="text-[#10B52E]">DEPUIS 2024</div>
    <div class="text-[60px] font-bold text-white">Projets</div>
</div>
<div class="flex flex-col gap-12">
    <?php
    $projects = [
        ["name" => "HTML", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
        ["name" => "CSS", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
        ["name" => "JS", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
        ["name" => "Tailwind", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"]
    ];
    ?>

    <div class="mt-[50px] flex flex-col lg:flex-row lg:items-center justify-center items-center xl:mx-[100px] lg:mx-[50px] gap-12 lg:gap-20 flex-wrap">
        <?php foreach ($projects as $project): ?>
            <div class="flex xl:w-[40%] lg:w-[45%] md:h-[200px] xl:h-[250px] md:w-[75%] w-[75%] mb-8 lg:mb-0">
                <div class="flex flex-col h-auto justify-between w-[50%]">
                    <div class="text-[#10B52E] xl:text-[30px] lg:text-[20px] md:text-[18px]"><?php echo $project['name']; ?></div>
                    <div class="text-white text-[20px] xl:text-[40px] lg:text-[30px] md:text-[30px] leading-8 md:leading-10 lg:leading-8 xl:leading-10">
                        <?php echo $project['description']; ?>
                    </div>
                    <a href="<?php echo $project['link']; ?>">
                        <img src="./src/svg/arrow.svg" alt="arrow" class="xl:w-[64px] xl:h-[64px] lg:w-[48px] lg:h-[48px] md:h-[48px] md:w-[48px] h-[36px] w-[36px]">
                    </a>
                </div>
                <div class="flex md:ml-[50px] h-full w-full lg:items-center">
                    <img src="<?php echo $project['image']; ?>" alt="card image" class="w-full h-full rounded-[20px] object-cover">
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>
<!--  -->
