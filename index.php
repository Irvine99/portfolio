<?php
// index.php

// Inclure l'en-tête commun
include('includes/header.php');

// Vérifier si un paramètre "page" est passé dans l'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Par défaut, on affiche la page d'accueil

// Charger la page spécifique en fonction de la valeur de "page"
switch ($page) {
    case 'projet':
        include('page/projet.php');
        break;
    case 'contact':
        include('pages/contact.php');
        break;
    case 'home':
    default:
        include('page/homepage.php');
        break;
}

// Inclure le pied de page commun
include('includes/footer.php');
?>
