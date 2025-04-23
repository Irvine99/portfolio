<?php

// Chapter One: Presentation of the Project
$contextChapterOne = "Chapitre 1 : Présentation du Projet";
$contextTitle = "Contexte du Projet";
$contextText = [
    "one" => "Le projet <span class='font-bold text-[#10B52E]'>'Seahawks Monitoring' </span> s'inscrit dans le cadre de la certification professionnelle BNCP pour les administrateurs systèmes, réseaux et bases de données (ASRBD).",
    "two" => " Il vise à concevoir, développer et héberger une solution de supervision et de maintenance pour les infrastructures informatiques des franchises de la National Football League (NFL).",
    "three" => "Cette solution, baptisée 'Seahawks Monitoring', permet de centraliser la gestion des instances Harvester déployées chez les clients, tout en assurant une haute disponibilité, une sécurité accrue et une supervision optimale des données."
];
$objectifProject = "Objectifs du Projet";
$objectifTitle = "Les principaux objectifs du projet sont les suivants :";
$principalObjectif = [
    "one" => "1. <span class='font-bold text-[#10B52E]'> Centralisation des données </span> : Créer une base de données mutualisée pour stocker les informations des instances Harvester, accessibles via une application web.",
    "two" => "2. <span class='font-bold text-[#10B52E]'> Sécurité des données </span> : Mettre en place des mécanismes de chiffrement (AES) pour protéger les données sensibles et assurer des communications sécurisées (TLS).",
    "three" => "3. <span class='font-bold text-[#10B52E]'> Haute disponibilité </span> : Configurer un mirroring pour garantir la disponibilité des données en cas de panne.",
    "four" => "4. <span class='font-bold text-[#10B52E]'> Centralisation des données </span> : Développer des outils pour surveiller les performances du SGBD et faciliter la maintenance à distance.",
];
$architectureSysteme = "Architecture du Système";
$architectureText = "L'infrastructure repose sur une base de données relationnelle hébergée sur un serveur SGBD. Les instances Harvester, déployées chez les clients, remontent des données vers cette base centralisée. Un tableau de bord web permet aux techniciens de consulter les informations et d'intervenir à distance.";

// Chapter Two: TLS/AES

$contextChapterTwo = "Chapitre 2 : Mise en Place du Mirroring, TLS et AES";
?>