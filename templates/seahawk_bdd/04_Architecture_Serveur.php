<div class="my-12">

<div class="text-white mb-6">
                <?php echo $architectureServeurSGBD['title'] ?>
            </div>
    <div class="flex flex-col lg:flex-row gap-8 w-full">
        <!-- Image pour mobile -->
        <img src="/src/png/harvester.png" alt=""
            class="lg:hidden w-full h-full object-cover opacity-80 rounded-2xl">

        <!-- Bloc texte -->
        <div class="flex flex-col justify-between  gap-6 text-white w-full ">
    
            <div><?php echo $architectureServeurSGBD['caracteristiques'] ?></div>
            <li><?php echo $architectureServeurSGBD['details']['one'] ?></li>
            <li><?php echo $architectureServeurSGBD['details']['two'] ?></li>
            <li><?php echo $architectureServeurSGBD['details']['three'] ?></li>
            <li><?php echo $architectureServeurSGBD['details']['four'] ?></li>
        </div>

        <!-- Image pour desktop -->
        <img src="/src/png/harvester.png" alt=""
            class="hidden lg:block w-full lg:max-w-[40%] object-cover opacity-80 rounded-2xl">
    </div>
</div>