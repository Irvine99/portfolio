<div class="my-12">

<div class="text-white mb-6">
                <?php echo $architectureApplicationWeb['title'] ?>
            </div>
    <div class="flex flex-col lg:flex-row gap-8 w-full">
        <!-- Image pour mobile -->
        <img src="/src/png/application_web.png" alt=""
            class="lg:hidden w-full h-full object-cover opacity-80 rounded-2xl">

        <!-- Bloc texte -->
        <div class="flex flex-col justify-between  gap-6 text-white w-full ">
    
            <div><?php echo $architectureApplicationWeb['fonctionnalites'] ?></div>
            <li><?php echo $architectureApplicationWeb['details']['one'] ?></li>
            <li><?php echo $architectureApplicationWeb['details']['two'] ?></li>
            <li><?php echo $architectureApplicationWeb['details']['three'] ?></li>
            <li><?php echo $architectureApplicationWeb['details']['four'] ?></li>
            <li><?php echo $architectureApplicationWeb['details']['five'] ?></li>
        </div>

        <!-- Image pour desktop -->
        <img src="/src/png/application_web.png" alt=""
            class="hidden lg:block w-full lg:max-w-[40%] object-cover opacity-80 rounded-2xl">
    </div>
</div>