<div class="w-full mt-12 flex ">
  <div class="flex flex-col justify-between sm:flex-row gap-2.5 bg-white/5 rounded-md px-2 py-3 w-full max-w-[95%] sm:max-w-[600px] overflow-x-auto">

    <!-- Accueil -->
    <a href="index.php?page=home#projets" class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-white cursor-pointer transition duration-500 ease-in-out hover:bg-white/25 focus:outline-none focus:bg-[#1a1f24] relative group 
      <?php echo ($page == 'home') ? 'bg-[#10B52E]' : ''; ?>">
      <i class="fas fa-home w-6 h-6"></i>
      <span>Accueil</span>
      <span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#10B52E] opacity-0 group-focus:opacity-100 group-active:opacity-100"></span>
    </a>

    <!-- Présentation -->
    <a href="index.php?page=nmap_Intro" class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-white cursor-pointer transition duration-500 ease-in-out hover:bg-white/25 focus:outline-none focus:bg-[#1a1f24] relative group 
      <?php echo ($page == 'nmap_Intro') ? 'bg-[#10B52E]' : ''; ?>">
      <i class="fas fa-chalkboard-teacher w-6 h-6"></i>
      <span>Présentation</span>
      <span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#10B52E] opacity-0 group-focus:opacity-100 group-active:opacity-100"></span>
    </a>

    <!-- Script -->
    <a href="index.php?page=nmap_Test" class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-white cursor-pointer transition duration-500 ease-in-out hover:bg-white/25 focus:outline-none focus:bg-[#1a1f24] relative group 
      <?php echo ($page == 'nmap_Test') ? 'bg-[#10B52E]' : ''; ?>">
      <i class="fas fa-code w-6 h-6"></i>
      <span>Script</span>
      <span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#10B52E] opacity-0 group-focus:opacity-100 group-active:opacity-100"></span>
    </a>

    <!-- Installation -->
    <a href="index.php?page=nmap_Conclusion" class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-white cursor-pointer transition duration-500 ease-in-out hover:bg-white/25 focus:outline-none focus:bg-[#1a1f24] relative group 
      <?php echo ($page == 'nmap_Conclusion') ? 'bg-[#10B52E]' : ''; ?>">
      <i class="fas fa-cogs w-6 h-6"></i>
      <span>Installation</span>
      <span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#10B52E] opacity-0 group-focus:opacity-100 group-active:opacity-100"></span>
    </a>

  </div>
</div>
