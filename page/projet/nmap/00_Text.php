<!--  -->
<?php
$projetName = [
    'type' => 'Scan Réseau',  // Exemple de type de projet
    'name' => 'Nmap Tkinter',           // Exemple de nom de projet
    'image_laptop' => './src/png/laptop.png', // Chemin de l'image pour laptop
    'image_phone' => './src/png/phone.png'    // Chemin de l'image pour téléphone
];
// 
$description = [
    'title_01' => 'Introduction à Nmap',
    'title_02' => 'Fonctionnalités de Nmap',
    'title_03' => 'Utiliser Nmap',
    'title_04' => 'Applications de Nmap',
    'text_01' => "Dans le cadre de notre projet, j'ai eu l'opportunité de développer une interface graphique en Python, utilisant Tkinter, pour effectuer un scan complet du réseau à l'aide de Nmap. Ce projet m'a permis de découvrir en profondeur les fonctionnalités de Nmap et de comprendre comment les exploiter pour analyser un réseau et identifier d'éventuelles vulnérabilités. De plus, j'ai intégré un aspect visuel soigné pour améliorer l'ergonomie de l'application, en apportant une attention particulière au design de l'interface.",

    'text_02' => "Nmap propose une large gamme de fonctionnalités, permettant notamment de découvrir les hôtes actifs, d'analyser la latence, de récupérer les adresses IP, ainsi que d'identifier les ports ouverts et leur statut. Il permet également de détecter les versions des services, les systèmes d'exploitation et d'effectuer des scans plus avancés tels que les scans SYN ou UDP. Ces informations permettent aux professionnels de l'IT d’obtenir des détails précis sur la topologie d'un réseau, d’évaluer les risques et de détecter des vulnérabilités potentielles. Bien que certains outils comme l'harvester puissent être utilisés à des fins de récolte d’informations, leur utilisation dans ce contexte reste fictive et ne doit pas être considérée comme un scan réel",

    'text_03' => "L'utilisation de Nmap est assez simple. Par exemple, pour scanner un hôte unique, il suffit d'exécuter la commande nmap 192.168.1.1. Pour analyser une plage d'adresses IP, vous pouvez utiliser la syntaxe nmap 192.168.1.1/24, ce qui permet de scanner l'ensemble des adresses dans le sous-réseau. Ces commandes de base sont idéales pour débuter rapidement avec Nmap et effectuer des analyses efficaces.

",

    'text_04' => "Dans l'interface graphique, plusieurs options sont disponibles pour faciliter l'interaction avec l'outil. Un bouton 'Nouveau Scan' permet de réinitialiser tous les paramètres et de démarrer un scan depuis zéro. Un bouton 'Rafraîchir' est également prévu pour mettre à jour les données et afficher les résultats les plus récents. En outre, si le script est déployé sur un serveur GitLab Runner, un bouton 'Mise à jour' peut être utilisé pour effectuer un pull automatique des dernières versions du script, garantissant ainsi l'accès aux fonctionnalités les plus récentes.",
    'card_01' => '/src/png/nmap01.png',
    'card_02' => '../src/png/nmap02.png'
];

// 
$projects = [
    ["name" => "HTML", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "CSS", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "JS", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "Tailwind", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"]
];
?>