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
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de médicament</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire permettant d'afficher toutes les informations
                        à propos d'un médicament en particulier.
                    </p>
                        <img class="img-fluid" src="assets/img/medoc.jpeg">
                </div>
                <div class="col-lg-4 offset-lg-1 align-left">
                    <div class="row">
                        <form action="index.php?uc=medicaments&action=affichermedoc" method="post" class="form-signin">
                            <label for="name">Liste des médicaments : </form>
                            <select name="medicament" id="listemedicament">
                                <option class="form-control" value="default" >- Choisissez un médicament -</option>
                                <?php
                                
                                    foreach($result as $key){
                                        echo '<option class="form-control" value="'.$key['MED_NOMCOMMERCIAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                    }
                                
                                ?>
                            </select>
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