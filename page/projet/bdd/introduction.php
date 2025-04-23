<?php include './templates/head.php' ?>

<body class="custom-gradient">
    <?php include '00_Text.php' ?>
    <div class="max-w-[1440px] w-full mx-auto">
        <?php include './templates/viewProjet/background.php' ?>
        <div class="relative min-h-[879px] z-10">
            <div class="mx-[20px] md:ml-[50px] lg:ml-[100px] xl:ml-[155px]">
                <?php include './templates/index/01_logo.php' ?>
                <?php include './templates/seahawk_bdd/01_Presentation.php' ?>
                <?php include './templates/seahawk_bdd/02_Competences.php' ?>
                <?php include './templates/seahawk_bdd/03_Competence_Acquise.php' ?>

                <div class="">
                <?php include './templates/seahawk_bdd/04_Architecture_Serveur.php' ?>
                <?php include './templates/seahawk_bdd/05_Architecture_Harvester.php' ?>
                <?php include './templates/seahawk_bdd/06_Application_Web.php'?>
                <?php include './templates/seahawk_bdd/07_Architecture_Supervision.php' ?>
                <?php include './templates/seahawk_bdd/08_Conclusion.php' ?>
                </div>
            </div>
        </div>
        
        <?php include './templates/script.php' ?>
</body>

</html>