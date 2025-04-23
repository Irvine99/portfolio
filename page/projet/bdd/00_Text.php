<?php

// Chapter One: Presentation of the Project
$contextChapterOne = "Chapitre 1 : Présentation du Projet";
$contextTitle = "Contexte du Projet";
$contextText = "Le projet <span class='text-[#10B52E] font-bold'> 'Seahawks Monitoring' </span> est une solution de gestion et de supervision des infrastructures informatiques des franchises de la National Football League (NFL). Développé dans le cadre de la certification professionnelle BNCP pour les administrateurs systèmes, réseaux et bases de données (ASRBD), ce projet vise à centraliser et sécuriser les données des instances Harvester déployées chez les clients.";

$objectifProject = "Objectifs du Projet";
$objectifTitle = "Les principaux objectifs du projet sont les suivants :";
$objectifPrincipalOne = [
    'title' => "Centralisation des Données :",
    'textOne' => "Créer une base de données mutualisée pour stocker les informations des instances Harvester déployées chez les clients.",
    'textTwo' => "Permettre un accès centralisé via une application web, facilitant la gestion et la consultation des données par les techniciens.",
]; 
$objectifPrincipalTwo = [
    'title' => "Sécurité des Données :",
    'textOne' => "Mettre en place des mécanismes de chiffrement <span class='font-bold text-[#10B52E]'> (AES) </span> pour protéger les données sensibles stockées dans la base de données.",
    'textTwo' => "Assurer des communications sécurisées <span class='font-bold text-[#10B52E]'>  (TLS) </span> entre les clients et le serveur de base de données pour prévenir les interceptions et les accès non autorisés.",
]; 
$objectifPrincipalThree = [
    'title' => "Haute Disponibilité :",
    'textOne' => "Configurer un mirroring pour garantir la disponibilité des données en cas de panne du serveur principal.",
    'textTwo' => "Assurer une réplication en temps réel des données vers un serveur secondaire, minimisant ainsi les risques de perte de données et les interruptions de service.",
]; 
$objectifPrincipalFour = [
    'title' => "Supervision et Maintenance :",
    'textOne' => "Développer des outils pour surveiller les performances du SGBD, incluant des indicateurs tels que le nombre de requêtes par seconde, le taux d'écritures et de lectures, et l'utilisation de l'espace disque.",
    'textTwo' => "Faciliter la maintenance à distance en fournissant des tableaux de bord et des rapports détaillés, permettant aux techniciens d'intervenir rapidement et efficacement.",
]; 

$architectureSysteme = "Architecture du Système";

$architectureText = "Le projet 'Seahawks Monitoring' repose sur une infrastructure robuste articulée autour d'un serveur SGBD central, d'instances Harvester déployées chez les clients, d'une application web de supervision, et d'outils de surveillance avancés. Chaque composant joue un rôle clé dans la collecte, la centralisation et l’exploitation sécurisée des données.";


$architectureServeurSGBD =  [
    'title' => "Le serveur SGBD (Système de Gestion de Base de Données) est le cœur de l'infrastructure du projet \"Seahawks Monitoring\". Il héberge la base de données mutualisée qui centralise les informations provenant des instances Harvester déployées chez les clients. Cette base de données est conçue pour stocker de manière structurée et sécurisée toutes les données techniques et opérationnelles nécessaires à la supervision et à la maintenance des infrastructures informatiques des franchises de la NFL.",
    'caracteristiques' => "Caractéristiques et Configuration :",
    'details' => [
        'one' => "<span class='font-bold text-[#10B52E]'>Haute Disponibilité </span>: Le serveur SGBD est configuré pour supporter le mirroring, une technique de réplication des données en temps réel. Cela garantit que les données sont disponibles même en cas de panne du serveur principal. Le mirroring assure une redondance des données, minimisant ainsi les risques de perte de données et les interruptions de service.",
        'two' => "<span class='font-bold text-[#10B52E]'>Performance et Scalabilité </span>: Le serveur est optimisé pour gérer un grand volume de données et des requêtes fréquentes. Il est configuré pour offrir des performances élevées, avec des temps de réponse rapides et une capacité à évoluer en fonction des besoins croissants des clients.",
        'three' => "<span class='font-bold text-[#10B52E]'>Sécurité des Données </span>: La sécurité des données est une priorité. Le serveur SGBD est protégé par des mécanismes de chiffrement (AES) pour les données sensibles et des communications sécurisées (TLS) pour prévenir les accès non autorisés et les interceptions de données.",
        'four' => "<span class='font-bold text-[#10B52E]'>Gestion des Accès </span>: Le serveur est configuré pour gérer les droits d'accès de manière granulaire, permettant de définir des rôles et des permissions spécifiques pour différents utilisateurs, garantissant ainsi que seules les personnes autorisées peuvent accéder aux données sensibles.",
    ]
];

$architectureHarvester = [
    'title' => "Les instances Harvester sont des composants clés du projet, déployés directement chez les clients. Elles jouent un rôle crucial dans la collecte et la remontée des données techniques vers la base de données centralisée.",
    'fonctionnalites' => "Fonctionnalités et Configuration :",
    'details' => [
        'one' => "<span class='font-bold text-[#10B52E]'>Collecte de Données </span>: Les instances Harvester sont configurées pour collecter des données techniques et opérationnelles sur les réseaux locaux des franchises. Elles surveillent les performances des équipements, les statistiques de réseau, et d'autres métriques importantes pour la maintenance et la supervision.",
        'two' => "<span class='font-bold text-[#10B52E]'>Communication Sécurisée </span>: Les instances Harvester sont configurées pour communiquer de manière sécurisée avec le serveur SGBD via TLS (Transport Layer Security). Cela garantit que les données échangées entre les instances et le serveur sont protégées contre les interceptions et les accès non autorisés.",
        'three' => "<span class='font-bold text-[#10B52E]'>Automatisation </span>: Les instances Harvester sont équipées de scripts et d'outils automatisés pour faciliter la collecte et la remontée des données. Cela réduit la nécessité d'interventions manuelles et améliore l'efficacité opérationnelle.",
        'four' => "<span class='font-bold text-[#10B52E]'>Intégration </span>: Les instances Harvester sont intégrées avec l'application web et les outils de supervision, permettant aux techniciens de consulter les données remontées en temps réel et d'intervenir rapidement en cas de problème.",
    ]
];

$architectureApplicationWeb = [
    'title' => "L'application web est une interface utilisateur complète et intuitive, conçue pour les techniciens et les administrateurs. Elle permet de consulter les données remontées par les instances Harvester et de surveiller les performances du SGBD.",
    'fonctionnalites' => "Fonctionnalités et Avantages :",
    'details' => [
        'one' => "<span class='font-bold text-[#10B52E]'>Interface Utilisateur </span>: L'application web offre une interface utilisateur conviviale et facile à naviguer. Elle permet aux techniciens d'accéder rapidement aux informations dont ils ont besoin pour la supervision et la maintenance des infrastructures.",
        'two' => "<span class='font-bold text-[#10B52E]'>Tableaux de Bord </span>: L'application inclut des tableaux de bord personnalisables qui affichent des métriques clés et des indicateurs de performance en temps réel. Cela permet aux techniciens de surveiller l'état des systèmes et de détecter rapidement les problèmes potentiels.",
        'three' => "<span class='font-bold text-[#10B52E]'>Outils de Supervision </span>: L'application est équipée d'outils de supervision avancés qui permettent de surveiller les performances du SGBD, y compris le nombre de requêtes par seconde, le taux d'écritures et de lectures, et l'utilisation de l'espace disque. Ces outils facilitent la maintenance à distance et permettent aux techniciens d'intervenir rapidement en cas de problème.",
        'four' => "<span class='font-bold text-[#10B52E]'>Rapports et Alertes </span>: L'application génère des rapports détaillés et des alertes en temps réel, informant les techniciens des événements importants et des anomalies détectées. Cela permet une réponse rapide et proactive aux incidents.",
        'five' => "<span class='font-bold text-[#10B52E]'>Sécurité </span>: L'application web est sécurisée par des mécanismes d'authentification et d'autorisation robustes, garantissant que seules les personnes autorisées peuvent accéder aux données et aux fonctionnalités de l'application.",
    ]
];

$architectureSupervision = [
    'title' => "Les outils de supervision sont essentiels pour assurer le bon fonctionnement et la maintenance de l'infrastructure du projet \"Seahawks Monitoring\". Ils permettent de surveiller les performances du SGBD et de générer des rapports détaillés.",
    'fonctionnalites' => "Fonctionnalités et Utilisation :",
    'details' => [
        'one' => "<span class='font-bold text-[#10B52E]'>DBeaver </span>: DBeaver est un outil puissant pour l'exploration et la gestion des bases de données. Il permet aux administrateurs de se connecter au serveur SGBD, d'explorer les tables et les données, et d'exécuter des requêtes SQL. DBeaver est utilisé pour la gestion quotidienne des bases de données et pour la résolution des problèmes.",
        'two' => "<span class='font-bold text-[#10B52E]'>Scripts et Outils de Surveillance </span>: Des scripts et des outils de surveillance sont mis en place pour surveiller les indicateurs de performance du SGBD. Ces outils collectent des données sur le nombre de requêtes par seconde, le taux d'écritures et de lectures, et l'utilisation de l'espace disque. Ils génèrent des rapports détaillés et des alertes en temps réel, permettant aux techniciens de surveiller l'état des systèmes et d'intervenir rapidement en cas de problème.",
        'three' => "<span class='font-bold text-[#10B52E]'>Tableaux de Bord et Rapports </span>: Les outils de supervision incluent des tableaux de bord interactifs et des rapports détaillés. Ces tableaux de bord affichent des métriques clés et des indicateurs de performance en temps réel, permettant aux techniciens de surveiller l'état des systèmes et de détecter rapidement les problèmes potentiels. Les rapports détaillés fournissent des informations approfondies sur les performances du SGBD et les événements importants, facilitant ainsi la maintenance et la résolution des incidents.",
        'four' => "<span class='font-bold text-[#10B52E]'>Automatisation </span>: Les outils de supervision sont automatisés pour collecter des données et générer des rapports de manière régulière. Cela réduit la nécessité d'interventions manuelles et améliore l'efficacité opérationnelle.",
    ]
];

$achitectureConclusion = "Cette architecture permet de répondre aux besoins de supervision et de maintenance des infrastructures informatiques des franchises de la NFL, tout en assurant une haute disponibilité et une sécurité accrue des données.";

// Chapter Two: TLS/AES

$contextChapterTwo = "Chapitre 2 : Mise en Place du Mirroring, TLS et AES";
?>