<div class="my-20">

    <div class="text-white  mb-6">
        <?php echo $architectureSupervision['title'] ?>
    </div>
    <div class="flex flex-col lg:flex-row gap-8 w-full">
        <!-- Image pour mobile -->
        <img src="/src/png/supervision.png" alt="" class="h-auto mb-10 lg:mb-0 lg:mr-[10px] w-1/2 object-cover opacity-80 rounded-[20px]">

        <!-- Bloc texte -->
        <div class="flex flex-col justify-between  gap-6 text-white w-full ">

            <div><?php echo $architectureSupervision['fonctionnalites'] ?></div>
            <li><?php echo $architectureSupervision['details']['one'] ?></li>
            <li><?php echo $architectureSupervision['details']['two'] ?></li>
            <li><?php echo $architectureSupervision['details']['three'] ?></li>
            <li><?php echo $architectureSupervision['details']['four'] ?></li>
        </div>


    </div>
</div>