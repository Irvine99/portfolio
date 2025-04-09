<?php include './templates/head.php' ?>

<body class="custom-gradient">
    <?php include '00_Text.php' ?>
    <div class="max-w-[1440px] w-full mx-auto">
        <?php include './templates/viewProjet/background.php' ?>
        <div class="relative min-h-[879px] z-10">
            <div class="ml-[40px] md:ml-[50px] lg:ml-[100px] xl:ml-[155px]">
                <?php include './templates/index/01_logo.php' ?>
                <?php include './templates/seahawk_test/01_Presentation.php' ?>
                <?php include './templates/seahawk_test/02_Introduction.php' ?>
                <?php include './templates/seahawk_test/03_Cards.php' ?>
                <div id="nmap" style="display:none;">
                    <?php include './templates/seahawk_test/04_Nmap.php' ?>
                </div>
                <div id="dashboard" style="display:none;">
                    <?php include './templates/seahawk_test/05_Dashboard.php' ?>
                </div>
                <div class="mr-[20px]">
                </div>
            </div>
        </div>

        <?php include './templates/script.php' ?>
        <script>
            function toggleVisibility(cardType) {
                // Cacher tous les modules
                document.getElementById('nmap').style.display = 'none';
                document.getElementById('dashboard').style.display = 'none';

                // Afficher le module correspondant à la carte cliquée
                if (cardType === 'scanner') {
                    document.getElementById('nmap').style.display = 'block';
                } else if (cardType === 'graph') {
                    document.getElementById('dashboard').style.display = 'block';
                }
            }
        </script>
</body>

</html>