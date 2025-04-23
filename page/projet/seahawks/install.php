<?php include './templates/head.php' ?>

<body class="custom-gradient">
    <?php include '00_Text.php' ?>
    <div class="max-w-[1440px] w-full mx-auto">
        <?php include './templates/viewProjet/background.php' ?>
        <div class="relative min-h-[879px] z-10">
            <div class="mx-[20px] md:ml-[50px] lg:ml-[100px] xl:ml-[155px]">
                <?php include './templates/index/01_logo.php' ?>
                
                <?php include './templates/seahawk_install/01_Presentation.php' ?>
                <?php include './templates/seahawk_install/02_Cards_Installation.php' ?>

                <div id="nmap_install" style="display:none;">
                    <?php include './templates/seahawk_install/04_Nmap_Installation.php' ?>
                </div>
                <div id="dashboard_install" style="display:none;">
                    <?php include './templates/seahawk_install/03_Dashboard_Installation.php' ?>
                </div>

            </div>
        </div>
    </div>
    <?php include './templates/script.php' ?>
    <script>
        function toggleVisibility(cardType2) {
            // Cacher tous les modules
            document.getElementById('nmap_install').style.display = 'none';
            document.getElementById('dashboard_install').style.display = 'none';

            // Afficher le module correspondant à la carte cliquée
            if (cardType2 === 'scanner_install') {
                document.getElementById('nmap_install').style.display = 'block';
            } else if (cardType2 === 'graph_install') {
                document.getElementById('dashboard_install').style.display = 'block';
            }
        }
    </script>
</body>

</html>