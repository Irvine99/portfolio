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
        'title_01'=> 'Introduction à Nmap',
        'title_02'=> 'Fonctionnalités de Nmap',
        'title_03'=> 'Utiliser Nmap',
        'title_04'=> 'Applications de Nmap',
        'text_01'=> 'Nmap (Network Mapper) est un outil open-source utilisé principalement pour l\'exploration des réseaux et la gestion de la sécurité. Il permet d\'effectuer des analyses approfondies pour découvrir les hôtes actifs, les services disponibles, ainsi que les vulnérabilités potentielles au sein d\'un réseau informatique. Nmap est largement utilisé par les administrateurs réseau et les experts en sécurité pour détecter des configurations erronées, des failles de sécurité et pour améliorer la gestion des infrastructures réseau.',
        
        'text_02'=> 'Nmap offre une gamme étendue de fonctionnalités, telles que la découverte d\'hôtes actifs, le scan des ports, la détection des versions de services, la détection des systèmes d\'exploitation, et des scans avancés utilisant des techniques comme les scans SYN ou les scans UDP. Ces fonctionnalités permettent aux professionnels de l\'IT d\'obtenir des informations détaillées sur un réseau et de détecter des vulnérabilités potentielles.',
        
        'text_03'=> 'L\'utilisation de Nmap est relativement simple. Par exemple, pour scanner un seul hôte, vous pouvez utiliser la commande "nmap 192.168.1.1". Pour scanner une plage d\'adresses IP, utilisez "nmap 192.168.1.1-50". Nmap permet également de scanner tous les ports d\'un hôte avec la commande "nmap -p- 192.168.1.1". Vous pouvez aussi effectuer une détection de version des services avec "nmap -sV 192.168.1.1". Ces commandes de base permettent de démarrer rapidement avec Nmap.',
        
        'text_04'=> 'Nmap est un outil clé pour les tests de pénétration et l\'audit de sécurité. Il permet de découvrir des failles dans les réseaux en analysant les services ouverts, leurs versions et leurs configurations. Grâce à Nmap, il est possible de détecter des services vulnérables, des systèmes mal configurés, et de cartographier les réseaux pour mieux les sécuriser.',
    'card_01' => '/src/png/black.png',
    'card_02' => '../src/png/black.png'
];

// 
$projects = [
    ["name" => "HTML", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "CSS", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "JS", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"],
    ["name" => "Tailwind", "description" => "Bally Website Research", "link" => "../../projet.php", "image" => "../../src/svg/card.svg"]
];
?>
