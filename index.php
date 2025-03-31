<?php
// index.php

// Inclure l'en-tête commun
include('includes/header.php');

// Vérifier si un paramètre "page" est passé dans l'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Par défaut, on affiche la page d'accueil

// Charger la page spécifique en fonction de la valeur de "page"
switch ($page) {
    // SEAHAWKS
    case 'seahawks':
        include('page/projet/seahawks/homepage.php');
        break;

    case 'home':
    default:
        include('page/homepage.php');
        break;
}

// Inclure le pied de page commun
include('includes/footer.php');
