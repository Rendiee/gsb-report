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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="menuCont container">
            <a class="navbar-brand h1 my-2" href="index.php?uc=accueil">
                <span class="text-dark h4 fw-bold">Projet</span> <span class="text-info h4 fw-bold">GSB</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill d-flex justify-content-end">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item ">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=accueil"><img id="imgAccueil" src="assets/img/accueil.png">Accueil</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=medicaments&action=formulairemedoc"><img id="imgMedoc" src="assets/img/pillule.png">Médicaments</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=praticiens&action=formulairepraticien"><img id="imgPrat" src="assets/img/praticien.png">Praticiens</a>
                        </li>
                        <li class="nav-item  dropdown">
                            <a class="nav-link dropdown-toggle btn-outline-info rounded-pill px-3" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img id="imgRap" src="assets/img/rapport.png">Rapport de visite</a>
                            <ul class="dropdown-menu dropdown-menu-dark p-0">
                                <li><a class="dropdown-item" href="index.php?uc=rapportdevisite&action=redigerrapport">Rédiger un rapport</a></li>
                                <li><a class="dropdown-item" href="index.php?uc=rapportdevisite&action=mesrapports">Mes rapports</a></li>
                                <?php if ($_SESSION['habilitation'] == 2) echo '<li><a class="dropdown-item" href="index.php?uc=rapportdevisite&action=rapportregion">Rapport de ma région</a></li>' ?>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=connexion&action=profil"><img id="imgProfil" src="assets/img/profil.png">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-info rounded-pill px-3" href="index.php?uc=connexion&action=deconnexion" onclick="return confirm('Voulez-vous vraiment vous déconnecter ?');"><img id="imgDeco" src="assets/img/deco.png">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>