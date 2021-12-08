<?php
    $css='justify-content-end';
    if(isset($_SESSION['login'])){
        $css='justify-content-between';
    }
    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Projet GSB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/boxicon.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/gsb.css">
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.php?uc=accueil">
                <i class="bi bi-journal-medical"></i>
                <span class="text-dark h4">Projet</span> <span class="text-info h4">GSB</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex <?php echo $css;?> mx-xl-5 text-center text-dark">
                        <li class="nav-item ecart">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=accueil"><img style="max-width:15px;margin-bottom:5px;margin-right:5px" src="assets/img/accueil.png">Accueil</a>
                        </li>
                            <?php
                        
                            if(isset($_SESSION['login'])){

                            ?>
                                <li class="nav-item ecart">
                                    <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=medicaments&action=formulairemedoc"><img style="max-width:17px;margin-bottom:5px;margin-right:5px" src="assets/img/pillule.png">Médicaments</a>
                                </li>
                                <li class="nav-item ecart">
                                    <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=praticiens&action=formulairepraticien"><img style="max-width:20px;margin-bottom:5px" src="assets/img/praticien.png">Praticiens</a>
                                </li>
                                <li class="nav-item ecart">
                                  <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=rapportdevisite&action=redigerrapport"><img style="max-width:18px;margin-bottom:5px;margin-right:2px" src="assets/img/rapport.png">Rapport de visite</a>
                                </li>
                                <li class="nav-item ecart">
                                    <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=connexion&action=profil"><img style="max-width:15px;margin-bottom:5px;margin-right:5px" src="assets/img/profil.png">Profil</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=connexion&action=deconnexion" onclick="return confirm('Voulez-vous vraiment vous déconnecter ?');"><img style="max-width:15px;margin-bottom:4px;margin-right:5px" src="assets/img/deco.png">Déconnexion</a>
                                </li>

                                <?php

                            }else{

                                ?>

                                <li class="nav-item">
                                    <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=connexion&action=connexion"><img style="max-width:15px;margin-bottom:5px;margin-right:5px" src="assets/img/profil.png">Connexion</a>
                                </li>

                                <?php

                            }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>