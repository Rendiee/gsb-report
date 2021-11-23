<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Projet GSB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <i class="bi bi-journal-medical"></i>
                <span class="text-dark h4">Projet</span> <span class="text-info h4">GSB</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=medicaments&action=formulairemedoc">Médicaments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=praticiens&action=formulairepraticien">Praticiens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=rapportdevisite">Rapport de visite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=contacteznous">Contactez-nous</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="index.php?uc=connexion&action=connexion"><i class='bx bx-user-circle bx-sm text-info'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->