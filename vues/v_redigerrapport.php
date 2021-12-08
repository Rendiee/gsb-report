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
                        Formulaire permettant de rédiger un rapport de visite.
                    </p>
                        <img class="img-fluid" src="assets/img/rapport.jpg">
                </div>
                <div class="col-lg-4 offset-lg-1 align-left">
                    <div class="row">
                        <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="form-signin">
                            <h2 style="text-align: center; text-decoration: underline;">Rapport de visite</h2>

                            <label for="nbrapport">Numéro du rapport :</label>
                            <input type="text" name="nbrapport" id="nbrapport">

                            <label for="matricule">Matricule du collaborateur :</label>
                            <select name="medicament" id="listechoix">
                                <option class="form-control" value="default" >- Choisissez un matricule -</option>
                                <?php

                                    foreach($result as $key){
                                        echo '<option class="form-control" value="'.$key['COL_MATRICULE'].'">'.$key['COL_MATRICULE'].'</option>';
                                    }
                                
                                ?>
                            </select>

                            <label for="praticien">Praticien concerné :</label>
                            <select name="medicament" id="listechoix">
                                <option class="form-control" value="default" >- Choisissez un praticien -</option>
                                <?php

                                    foreach($prat as $key){
                                        echo '<option class="form-control" value="'.$key['PRA_NUM'].'">'.$key['PRA_NUM'].' - '.$key['PRA_NOM'].' '.$key['PRA_PRENOM'].'</option>';
                                    }
                                
                                ?>
                            </select>

                            <label for="datevisite">Date de visite :</label>
                            <input type="date" name="datevisite" id="datevisite">

                            <label for="bilan">Bilan du rapport :</label>
                            <textarea name="bilanrapport" id="bilanrapport"></textarea>

                            <label for="datesaisit">Date de saisit du rapport :</label>
                            <input type="date" name="datesaisit" id="datesaisit">

                            <label for="motif">Motif :</label>
                            <select name="motif" id="listemotif">
                                <option class="form-control" value="default" >- Choisissez un motif -</option>
                                <?php

                                    foreach($motif as $key){
                                        echo '<option class="form-control" value="'.$key['MOT_ID'].'">'.$key['MOT_ID'].' - '.$key['MOT_LIBELLE'].'</option>';
                                    }
                                
                                ?>
                            </select>

                            <label for="medicamentproposer">Médicament proposé :</label>
                            <select name="motif" id="listemotif">
                                <option class="form-control" value="default" >- Choisissez le médicament présenté -</option>
                                <?php

                                    foreach($medoc as $key){
                                        echo '<option class="form-control" value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                    }
                                
                                ?>
                            </select>

                            <label for="echantillon">Échantillon distribué :</label>
                            <input type="checkbox" name="echantillon" id="echantillonS">

                            <label for="saisitdefinitive">Saisit définitive :</label>
                            <input type="checkbox" name="saisitdefinitive" id="saisitdefinitive">

                            <input class="btn btn-info text-light" type="submit" value="Valider le rapport">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

<?php
    
        }

?>