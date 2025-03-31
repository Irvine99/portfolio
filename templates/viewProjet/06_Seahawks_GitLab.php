<div class="my-[50px]">
    <div class="text-white text-2xl "><?php echo $seahawksGitLab['name'] ?></div>
    <div class="text-white text-xl "><?php echo $seahawksGitLab['type'] ?></div>
    <div class="flex flex-col lg:flex-row mt-[25px] w-full">
    <img src="/src/png/gitlab.png" alt="" class="lg:hidden h-auto mb-10 lg:ml-[100px] w-full object-cover opacity-80 rounded-[20px]">
        <div class="flex flex-col justify-center gap-8">
            <?php foreach ($seahawksGitLab['features'] as $feature) : ?>
                <div class="text-white "><?php echo htmlspecialchars($feature) ?></div>
            <?php endforeach; ?>
            <?php foreach ($seahawksGitLab['deployment'] as $deployment) : ?>
                <div class="text-white "><?php echo htmlspecialchars($deployment) ?></div>
            <?php endforeach; ?>
        </div>
        <img src="/src/png/gitlab.png" alt="" class="hidden lg:block h-auto lg:ml-[100px] w-full object-cover opacity-80 rounded-[20px]">
    </div>
</div>