<script src="http://localhost:35729/livereload.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

<!--  -->
<script>
    // Fonction pour afficher/masquer la description des scripts
    function toggleCard(scriptId) {
        // Cache toutes les cartes
        document.getElementById("script1").classList.remove("active");
        document.getElementById("script2").classList.remove("active");

        // Affiche la carte sélectionnée
        document.getElementById(scriptId).classList.add("active");
    }
</script>
