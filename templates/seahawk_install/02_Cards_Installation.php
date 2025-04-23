<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>


<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl w-full mt-10">

    <!-- Carte 1 -->
    <div  class="fade-in-up animation-delay-0">
        <div class="bg-zinc-800 text-white shadow-2xl rounded-2xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
            <div class="p-6 flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <div class="flex flex-col">
                        <img src="../../src/png/nmap_install.png" alt="" class="">
                        <h2 class="text-2xl font-bold mt-2">Installation du Scanner</h2>
                    </div>
                </div>
                <p class="text-zinc-300 text-sm">
                    Procédure d'installation par le biais du terminal des dépendances nécessaires pour le bon fonctionnement de l'application.
                </p>
                <button onclick="toggleVisibility('scanner_install')" class="mt-auto bg-[#10B52E] hover:bg-[#10B52E]/50 text-white rounded-xl px-4 py-2 flex items-center w-max">
                    Explorer
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Carte 2 -->

    <div class="fade-in-up animation-delay-0">
        <div class="bg-zinc-800 text-white shadow-2xl rounded-2xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
            <div class="p-6 flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <div class="flex flex-col">
                        <img src="../../src/png/dashboard_install.png" alt="" class="">
                        <h2 class="text-2xl font-bold mt-2">Installation du Dashboard</h2>
                    </div>
                </div>
                <p class="text-zinc-300 text-sm">
                    Procédure d'installation par le biais du terminal des dépendances nécessaires pour le bon fonctionnement de l'application.
                </p>
                <button onclick="toggleVisibility('graph_install')" class="mt-auto bg-[#10B52E] hover:bg-[#10B52E]/50 text-white rounded-xl px-4 py-2 flex items-center w-max">
                    Explorer
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    </div>