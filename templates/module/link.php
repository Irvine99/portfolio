<div class="flex w-[400px] mt-[50px] flex-row justify-center gap-2.5 bg-white/5 rounded-md">
  
  <a href="index.php?page=nmap_Intro" class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-white cursor-pointer transition duration-500 ease-in-out hover:bg-white/25 focus:outline-none focus:bg-[#1a1f24] relative group 
    <?php echo ($page == 'nmap_Intro') ? 'bg-[#10B52E]' : ''; ?>">
    <!-- Icone Présentation -->
    <i class="fas fa-chalkboard-teacher w-6 h-6"></i>
    <span>Présentation</span>
    <!-- Before Effect (avec un pseudo-élément en utilisant Tailwind) -->
    <span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#10B52E] opacity-0 group-focus:opacity-100 group-active:opacity-100"></span>
  </a>
  
  <a href="index.php?page=nmap_Test" class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-white cursor-pointer transition duration-500 ease-in-out hover:bg-white/25 focus:outline-none focus:bg-[#1a1f24] relative group 
    <?php echo ($page == 'nmap_Test') ? 'bg-[#10B52E]' : ''; ?>">
    <!-- Icone Script -->
    <i class="fas fa-code w-6 h-6"></i>
    <span>Script</span>
    <!-- Before Effect (avec un pseudo-élément en utilisant Tailwind) -->
    <span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#10B52E] opacity-0 group-focus:opacity-100 group-active:opacity-100"></span>
  </a>
  
  <a href="index.php?page=nmap_Conclusion" class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-white cursor-pointer transition duration-500 ease-in-out hover:bg-white/25 focus:outline-none focus:bg-[#1a1f24] relative group 
    <?php echo ($page == 'nmap_Conclusion') ? 'bg-[#10B52E]' : ''; ?>">
    <!-- Icone Installation -->
    <i class="fas fa-cogs w-6 h-6"></i>
    <span>Installation</span>
    <!-- Before Effect (avec un pseudo-élément en utilisant Tailwind) -->
    <span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#10B52E] opacity-0 group-focus:opacity-100 group-active:opacity-100"></span>
  </a>
</div>
