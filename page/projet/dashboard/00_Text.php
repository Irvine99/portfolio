<!--  -->
<?php
$projetName = [
    'type' => 'Dashboard',  // Exemple de type de projet
    'name' => 'Analyse Dynamique du Réseau',           // Exemple de nom de projet
    'image_laptop' => './src/png/laptop.png', // Chemin de l'image pour laptop
    'image_phone' => './src/png/phone.png'    // Chemin de l'image pour téléphone
];
// 
$description = [
    'title_01' => "Introduction à l'application Dashboard",
    'title_02' => "Chargement et Analyse des Données",
    'title_03' => 'Filtres et Visualisations Dynamiques',
    'title_04' => 'Statistiques et Résultats',
    'text_01' => "L'application Dashboard Réseau permet d'analyser les données des machines d'un réseau en les extrayant d'un fichier XML. Ce tableau de bord interactif offre une vue d'ensemble des machines scannées, de leurs latences, de leurs ports ouverts, et permet de filtrer et visualiser ces informations de manière claire et intuitive.",

    'text_02' => "L'application vous permet de télécharger un fichier XML contenant les informations des machines scannées. Une fois le fichier téléchargé, les données sont extraites et analysées pour générer un tableau de bord dynamique et informatif. Le format XML est automatiquement traité pour afficher les informations essentielles telles que le nom, l'adresse IP, la latence, et les ports ouverts de chaque machine.",

    'text_03' => "Les utilisateurs peuvent filtrer les machines selon différents critères :

Ports ouverts : Choisissez les ports spécifiques (comme SSH, HTTP, HTTPS, etc.) ou affichez toutes les machines.
Machines spécifiques : Sélectionnez des machines particulières pour affiner l'affichage des données.
Les résultats sont mis à jour en temps réel et présentés sous forme de graphique circulaire représentant la répartition des ports ouverts et un tableau des machines affichant des informations détaillées.",

    'text_04' => "En plus du tableau de bord interactif, l'application offre des statistiques clés :

Répartition des Ports Ouverts : Un graphique en camembert affiche la répartition des ports ouverts à travers toutes les machines scannées.
Total des Machines : Le nombre total de machines scannées est affiché pour donner une idée rapide de la taille du réseau examiné.
Le tableau met à jour automatiquement ces informations selon les filtres appliqués, offrant ainsi une vue détaillée et dynamique de l'état du réseau.",
    'card_01' => '../src/png/dashboard01.png',
    'card_02' => '../src/png/dashboard02.png'
];

// 
$projects = [
    ["name" => "HTML", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "CSS", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "JS", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "Tailwind", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"]
];
?>