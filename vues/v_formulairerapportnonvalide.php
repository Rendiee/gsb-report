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
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de rapport non valide</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire affichant tous les rapports non valide encore existant.
                    </p>
                        <img class="img-fluid" src="assets/img/medoc.jpeg">
                </div>
                <div class="col-lg-4 offset-lg-1 align-left">
                    <div class="row">
                        <form action="index.php?uc=rapportdevisite&action=rapportNonValide" method="post" class="form-signin">
                            <label for="name">Liste des rapports non valide : </form>
                            <select name="nonValide" id="listechoix">
                                <option class="form-control" value="default" >- Choisissez un rapport -</option>
                                <?php
                                
                                    foreach($info as $key){
                                        echo '<option class="form-control" value="'.$key['RAP_NUM'].'"> '.$key['RAP_NUM'].' - '.$key['COL_MATRICULE'].'</option>';
                                    }
                                
                                ?>
                            </select>
                                <input class="btn btn-info text-light valider" type="submit" value="Modifier le rapport">
                        </form>
                        <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post">
                        <input class="btn btn-info text-light valider" type="submit"value="Saisir un nouveau rapport" name="nouveau">
                                </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php
    
        }

?>