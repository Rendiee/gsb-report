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
                        <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="rapport">
                            <h2 style="text-align: center; text-decoration: underline;">Rapport de visite</h2><br/>

                            <label for="nbrapport">Numéro du rapport :</label>
                            <input type="text" disabled name="nbrapport" id="nbrapport" value="<?php echo $nonValide[1];?>"><br/>

                            <label for="matricule">Matricule du collaborateur :</label>
                            <input type="text" disabled name="medicament" id="nbrapport" value="<?php echo $nonValide[0];?>"><br/>

                            <label for="praticien">Praticien concerné :</label>
                            <input type="text" disabled name="medicament" id="nbrapport" value="<?php echo $nomPraticien[0].' - '.$nomPraticien[1].' '.$nomPraticien[2];?>"><br/>

                            <label for="datevisite">Date de visite :</label>
                            <input type="date" name="datevisite" id="datevisite" value="<?php echo $nonValide[2];?>"><br/>

                            <label for="bilan">Bilan du rapport :</label>
                            <textarea name="bilanrapport" id="bilanrapport"><?php echo $nonValide[3];?></textarea><br/>

                            <label for="datesaisit">Date de saisit du rapport :</label>
                            <input type="date" disabled name="datesaisit" id="datesaisit" value="<?php echo $nonValide[4];?>"><br/>

                            <label for="motif">Motif :</label>
                            <input type="text" disabled name="datesaisit" id="datesaisit" value="<?php echo $nomMotif[0].' - '.$nomMotif[1];?>"><br/>

                            <label for="medicamentproposer">Médicament proposé :</label>
                            <select name="motif" id="listemotif">
                                <option class="form-control" value="<?php echo $nonValide[8];?>" ><?php echo $nonValide[8];?></option>
                                <?php

                                    foreach($medoc as $key){
                                        echo '<option class="form-control" value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                    }
                                
                                ?>
                            </select><br/>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                            <label for="echantillon">Échantillon distribué :</label>
                            <input type="checkbox" name="echantillon" id="echantillonS">
                                </div>
                                <div>
                            <label for="saisitdefinitive">Saisit définitive :</label>
                            <input type="checkbox" name="saisitdefinitive" id="saisitdefinitive"><br/>
                                </div>  
                                </div>
                            <input class="btn btn-info text-light valider" type="submit" value="Valider le rapport">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

<?php
    
        }

?>