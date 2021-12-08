<?php

if(empty($_SESSION['login']) && empty($_SESSION['habilitation'])){

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
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de rapport de visite</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire permettant d'afficher toutes les rapports de visite de votre région
                    </p>
                    <a class="col">
                        <img class="img-fluid" src="assets/img/rapport.jpg">
                    </a>
                </div>
                <div class="col-lg-4 offset-lg-1 align-left">
                    <div class="row">
                    <form class="form-signin" action="index.php?uc=praticiens&action=afficherpraticien" method="post">
                            <label for="name">Liste des rapport de visite de la région <?php echo $_SESSION['region'];?> : </form>
                            <select name="praticien" id="listechoix">
                                <option class="form-control" value="default">- Choisissez un rapport -</option>
                                <?php
                                    
                                    

                                ?>
                            </select>
                                </br>
                            <input class="btn btn-info text-light" type="submit" value="Afficher les informations">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php
}

?>