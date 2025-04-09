<div class="card p-4 overflow-hidden border border-gray-300 rounded-xl bg-opacity-20 backdrop-blur-sm min-w-[344px]">
  <div class="wrap flex flex-col gap-4 relative z-10 border border-gray-600 rounded-lg overflow-hidden">
    <div class="terminal flex flex-col">
      <div class="head flex items-center justify-between overflow-hidden min-h-[40px] px-3 rounded-t-lg bg-[#202425]">
        <div class="title flex items-center gap-2 h-10 text-gray-300 font-semibold overflow-hidden text-ellipsis whitespace-nowrap">
          <svg class="w-4 h-4 mt-0.5 text-[#006adc]" xmlns="http://www.w3.org/2000/svg"> <!-- Votre SVG ici --> </svg>
          Titre
        </div>
        <div class="copy_toggle flex items-center justify-center p-1 border border-gray-300 ml-auto rounded-md bg-[#202425] text-gray-300 cursor-pointer">
          <svg class="w-5 h-5"> <!-- Votre SVG ici --> </svg>
        </div>
      </div>
      <div class="body flex flex-col relative rounded-b-lg overflow-x-auto p-4 text-white bg-black whitespace-nowrap">
        <div class="pre flex items-center text-ellipsis whitespace-pre bg-transparent overflow-hidden box-border text-base">
          <code class="text-gray-600">Composant 1</code>
          <code class="text-[#e34ba9]">Composant 2</code>
        </div>
        <div class="cmd relative flex items-center">
          <div class="cmd::before content-[attr(data-cmd)] relative block whitespace-nowrap overflow-hidden bg-transparent animate-[inputs_8s_steps(22)_infinite]" data-cmd="Commande"></div>
          <div class="cmd::after content-[''] relative block h-full overflow-hidden bg-transparent border-r-2 border-[#e34ba9] animate-[cursor_0.5s_step-end_infinite_alternate,_blinking_0.5s_infinite]"></div>
        </div>
      </div>
    </div>
  </div>
</div>
