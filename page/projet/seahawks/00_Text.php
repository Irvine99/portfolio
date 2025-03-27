<?php
$textPresentation = [
    "titre" => "Contexte du projet Seahawks Monitoring",
    "text" => "Dans le cadre de la certification professionnelle d'Administrateur Systèmes, Réseaux et Bases de Données, nous avons développé une application de monitoring réseau appelée 'Seahawks Monitoring' pour la société fictive NFL IT. Cette société spécialisée dans les services informatiques pour les équipes de football américain avait besoin d'une solution pour améliorer la supervision et la maintenance à distance de ses infrastructures réseau."
];

$textCompetence = [
    "titre" => "Compétences mises en oeuvre",
    // 
    "titre1" => "Supervision et Monitoring :",
    "competence1" => "Utilisation d'outils spécifiques pour identifier les anomalies et améliorer les performances de l'infrastructure informatique.",
    "competence1bis" => "Centralisation des incidents pour une meilleure priorisation des interventions.",
    "competence2" => "Intervention sur place ou à distance pour résoudre les tickets de niveau 3 et 4.",
    //
    "titre2" => "Résolution de Problèmes :",
    "competence2" => "Intervention sur place ou à distance pour résoudre les tickets de niveau 3 et 4.",
    "competence2bis" => "Utilisation d'outils de télédistribution pour des interventions efficaces.",
    // 
    "titre3" => "Formation et Support :",
    "competence3" => "Formation des équipes support à l'utilisation des outils de télédistribution.",
    "competence3bis" => "Création de supports de formation si nécessaire.",
    // 
    "titre4" => "Développement et Maintenance d'Applications :",
    "competence4" => "Utilisation de Python pour la conception, la maintenance et l'évolution des applications.",
    "competence4bis" => "Assurance de la qualité des applications développées.",
    // 
    "titre5" => "Intégration Continue :",
    "competence5" => "Mise en place d'outils d'intégration continue pour automatiser les mises à jour des applications.",
];

// Variables pour Seahawks Harvester (Client)
$seahawksHarvester = [
    'name' => 'Seahawks Harvester',
    'type' => 'Client',
    'features' => [
        'Scan Réseau Avancé : Effectue un balayage complet du réseau local pour identifier et lister toutes les machines connectées, ainsi que les ports ouverts associés. Cette fonctionnalité permet une surveillance proactive des actifs réseau, facilitant ainsi la gestion et la sécurisation des infrastructures informatiques.',
        'Interface Graphique avec Tkinter : Développement d\'un script Python utilisant la bibliothèque Tkinter pour offrir une interface utilisateur intuitive. Cette interface permet de lancer des scans réseau, d\'afficher les résultats en temps réel et d\'enregistrer les données collectées au format XML. Cela garantit une accessibilité accrue et une gestion simplifiée des informations réseau.',
        'Tableau de Bord Réseau : Présentation dynamique des informations réseau essentielles, telles que les adresses IP, le nombre de machines connectées, la latence WAN, et bien plus encore. Ce tableau de bord offre une vue d\'ensemble complète et en temps réel de l\'état du réseau, permettant une prise de décision rapide et éclairée pour les administrateurs réseau.'
    ],
    'deployment' => [
        'method' => 'Packagé dans une machine virtuelle "UBUNTU" pour une installation rapide et facile.',
        'location' => 'Installation facile sur le réseau local des franchises.'
    ]
];

// Variables pour Seahawks Nester (Serveur)
$seahawksNester = [
    'name' => 'Seahawks Nester',
    'type' => 'Serveur',
    'features' => [
    'Consultation des Informations Remontées : L\'application web Seahawks Nester offre une interface centralisée permettant aux administrateurs de consulter les informations collectées par les clients Harvester. Cette fonctionnalité permet une surveillance continue et en temps réel des données réseau, facilitant ainsi la prise de décision stratégique. Les informations remontées incluent des détails sur les machines connectées, les ports ouverts, et d\'autres métriques réseau critiques. Grâce à cette visibilité accrue, les équipes IT peuvent rapidement identifier les tendances, détecter les anomalies et optimiser les performances du réseau.',
    'Surveillance de l\'État des Sondes et Rapports de Scan Réseau : La plateforme Seahawks Nester assure une surveillance complète de l\'état des sondes déployées sur le réseau, fournissant des rapports détaillés sur les scans réseau effectués. Les administrateurs peuvent visualiser l\'état actuel de chaque sonde, vérifier l\'historique des scans, et accéder à des rapports détaillés qui incluent des analyses approfondies des résultats. Cette fonctionnalité est essentielle pour garantir la fiabilité et l\'intégrité des opérations réseau, en permettant une réponse rapide aux incidents et une planification proactive des maintenances.'
    ],
    'deployment' => [
        'method' => 'Hébergé dans le datacenter de NFL IT à Roubaix.',
        'communication' => 'Communication avec les clients Harvester via GitLab runner en SSH.'
    ]
];

$seahawksGitLab = [
    'name' => 'GitLab',
    'type' => 'Serveur',
    'features' => [
        'Consultation des Informations Remontées : L\'application web Seahawks Nester offre une interface centralisée permettant aux administrateurs de consulter les informations collectées par les clients Harvester. Cette fonctionnalité permet une surveillance continue et en temps réel des données réseau, facilitant ainsi la prise de décision stratégique. Les informations remontées incluent des détails sur les machines connectées, les ports ouverts, et d\'autres métriques réseau critiques. Grâce à cette visibilité accrue, les équipes IT peuvent rapidement identifier les tendances, détecter les anomalies et optimiser les performances du réseau. De plus, avec notre GitLab désormais hébergé sur une machine virtuelle dédiée, nous garantissons une meilleure gestion des versions et une intégration continue plus fluide, renforçant ainsi la fiabilité et la sécurité de notre infrastructure.',
        'Surveillance de l\'État des Sondes et Rapports de Scan Réseau : La plateforme Seahawks Nester assure une surveillance complète de l\'état des sondes déployées sur le réseau, fournissant des rapports détaillés sur les scans réseau effectués. Les administrateurs peuvent visualiser l\'état actuel de chaque sonde, vérifier l\'historique des scans, et accéder à des rapports détaillés qui incluent des analyses approfondies des résultats. Cette fonctionnalité est essentielle pour garantir la fiabilité et l\'intégrité des opérations réseau, en permettant une réponse rapide aux incidents et une planification proactive des maintenances. L\'intégration avec notre GitLab sur une nouvelle machine virtuelle permet une mise à jour plus rapide et plus sécurisée des sondes, assurant ainsi que les dernières fonctionnalités et correctifs sont toujours disponibles.',
    ],
    'deployment' => [
        'method' => 'Hébergé sur une machine virtuelle dédiée dans le datacenter de NFL IT.',
        'communication' => 'Communication sécurisée avec les clients Harvester et Nester via SSH.'
    ]
];

