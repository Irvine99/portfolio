<div class="my-[50px]">
    <div class="text-white text-2xl "><?php echo $seahawksHarvester['name'] ?></div>
    <div class="text-white text-xl "><?php echo $seahawksHarvester['type'] ?></div>
    <div class="flex flex-col md:flex-row mt-[25px] w-full">
        <img src="/src/png/harvester.png" alt="" class="h-auto mb-10 lg:hidden lg:ml-[100px] w-full object-cover opacity-80 rounded-[20px]">
        <div class="flex flex-col justify-center gap-8">
            <?php foreach ($seahawksHarvester['features'] as $feature) : ?>
                <div class="text-white "><?php echo htmlspecialchars($feature) ?></div>
            <?php endforeach; ?>
            <?php foreach ($seahawksHarvester['deployment'] as $deployment) : ?>
                <div class="text-white "><?php echo htmlspecialchars($deployment) ?></div>
            <?php endforeach; ?>
        </div>
        <img src="/src/png/harvester.png" alt="" class="hidden lg:block h-auto lg:ml-[100px] w-full object-cover opacity-80 rounded-[20px]">
    </div>
</div>