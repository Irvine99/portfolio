<div class="my-[50px]">
    <div class="text-white text-2xl "><?php echo $seahawksNester['name'] ?></div>
    <div class="text-white text-xl "><?php echo $seahawksNester['type'] ?></div>
    <div class="flex flex-col md:flex-row mt-[25px] w-full">
        <img src="/src/png/nester.png" alt="" class="h-auto mb-10 lg:mb-0 lg:mr-[100px] w-auto object-cover opacity-80 rounded-[20px]">
        <div class="flex flex-col justify-center gap-8">
            <?php foreach ($seahawksNester['features'] as $feature) : ?>
                <div class="text-white "><?php echo htmlspecialchars($feature) ?></div>
            <?php endforeach; ?>
            <?php foreach ($seahawksNester['deployment'] as $deployment) : ?>
                <div class="text-white "><?php echo htmlspecialchars($deployment) ?></div>
            <?php endforeach; ?>
        </div>

    </div>
</div>