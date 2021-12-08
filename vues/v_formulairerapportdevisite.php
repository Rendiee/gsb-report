<?php

if(empty($_SESSION['login']) && empty($_SESSION['habilitation'])){
    //$choixRap = $_REQUEST['rapport'];
    // TODO : Erreur quand on met (index.php?uc=rapportdevisite&action=choixoptionrapport) sans être connecté
    ?>

        <section class="bg-light py-5">
                <div class="feature-work container my-4">
                    <div class="row d-flex d-flex align-items-center">
                        <div class="col-lg-5">
                            <h1 class="feature-work-heading h2 py-3 semi-bold-600">Accès interdit !</h1>
                            <p class="feature-work-body text-muted light-300">Veuillez-vous connecter pour avoir accès à cette page.</p>
                            <p><a href="index.php?uc=connexion&action=connexion">Se connecter</a></p>
                    </div>
                </div>
        </section>

    <?php

}else{
?>
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Rapport de visite</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire permettant d'afficher toutes les rapports de visite de votre région
                    </p>
                    <a class="col">
                        <img class="img-fluid" src="assets/img/rapport.jpg">
                    </a>
                </div>
                <div class="col-lg-4 offset-lg-1 align-left">
                    <div class="row">
                    <form class="form-signin" action="index.php?uc=rapportdevisite&action=choixoptionrapport" method="post">
                            <label for="name">Option rapport de visite :</form>
                            <select name="rapport" id="listechoix">

                                <option class="form-control" value="default">- Choisissez une option -</option>
                                <option class="form-control" value="redigerrapport">1 - Rédiger un rapport de visite</option>
                                <option class="form-control" value="rapportregion">2 - Voir les rapports de région</option>
                                <option class="form-control" value="rapportsecteur">3 - Voir les rapports de secteur</option>

                            </select>
                                </br>
                            <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php
}

?>