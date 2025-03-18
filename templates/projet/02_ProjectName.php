<div class="flex flex-col items-center leading-12 mt-[50px]">
    <div class="text-[#10B52E] font-italic text-[18px] lg:text-[24px]"><?php echo $projetName['type'] ?></div>
    <div class="text-white font-bold text-[40px] md:text-[60px] lg:text-[80px] text-center"><?php echo $projetName['name'] ?></div>
</div>

<div class="flex container mx-auto justify-center items-center mt-[50px] flex-wrap lg:flex-nowrap">
    <img src=<?php echo $projetName['image_laptop'] ?> alt="" class="w-full hidden md:block lg:h-[336px] md:h-[224px] lg:w-auto md:w-[402px] h-auto">
    <img src=<?php echo $projetName['image_phone'] ?> alt="" class=" lg:h-[448px] md:h-[224px] w-auto lg:w-[auto] ">
</div>
