<div class="">
    <div class="text-white text-3xl font-bold mt-10">Seahawks Monitoring</div>

    <div class="mt-10">
    <div class="flex items-center justify-between bg-white/5 rounded-lg w-full max-w-4xl p-4 sticky top-0 z-50 shadow-lg">
        <!-- Introduction Link -->
        <div class="text-white text-sm md:text-base">
            <a href="index.php?page=nmap_Intro" class="hover:text-[#10B52E] transition-colors">Introduction</a>
        </div>

        <!-- Separator Icon (>) -->
        <div class="text-white mx-2 text-lg hidden md:block">></div>

        <!-- Test Link -->
        <div class="text-[#10B52E] text-sm md:text-base">
            <a href="index.php?page=nmap_Test" class="hover:text-[#1e8e29] transition-colors">Test</a>
        </div>

        <!-- Separator Icon (>) -->
        <div class="text-white mx-2 text-lg hidden md:block">></div>

        <!-- Conclusion Link -->
        <div class="text-white text-sm md:text-base">
            <a href="index.php?page=nmap_Conclusion" class="hover:text-[#10B52E] transition-colors">Conclusion</a>
        </div>
    </div>
</div>

<!-- Section de présentation -->
<div class="flex flex-col mt-[50px] gap-4">
    <div class="text-white text-3xl font-bold"><?php echo $textPresentation['titre'] ?></div>
    <div class="text-white w-[90%] lg:w-[75%]"><?php echo $textPresentation['text'] ?></div>
</div>