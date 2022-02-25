<section class="bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col test align-items-start">
                <h1 class="titre">Modification du rapport n°<?php echo $nonValide[1]; ?></h1>
                <p class="text">
                    Formulaire permettant de rédiger un rapport de visite.
                </p>
                <img class="img-fluid" src="assets/img/rapport.jpg">
            </div>
            <div class="col test">
                    <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="formulaire">
                        <label class="space title-formulaire">Rapport de visite</label><br/>

                        <label for="nbrapport">Numéro du rapport :</label>
                        <input type="text" style="background-color:white;border:none;" disabled name="nbrapport" id="nbrapport" value="<?php echo $nonValide[1];?>"><br/>

                        <label for="matricule">Matricule du collaborateur :</label>
                        <input type="text" style="background-color:white;border:none;" disabled name="medicament" id="nbrapport" value="<?php echo $nonValide[0];?>"><br/>

                        <label for="praticien">Praticien concerné :</label>
                        <input type="text" disabled name="medicament" id="nbrapport" value="<?php echo $nomPraticien[0].' - '.$nomPraticien[1].' '.$nomPraticien[2];?>"><br/>

                        <label for="datevisite">Date de visite :</label>
                        <input type="date" name="datevisite" id="datevisite" value="<?php echo $nonValide[2];?>"><br/>

                        <label for="bilan">Bilan du rapport :</label>
                        <textarea name="bilanrapport" id="bilanrapport"><?php echo $nonValide[3];?></textarea><br/>

                        <label for="datesaisit">Date de saisit du rapport :</label>
                        <input type="date" disabled name="datesaisit" id="datesaisit" value="<?php echo $nonValide[4];?>"><br/>

                        <label for="motif">Motif : </label>
                        <input type="text" disabled name="datesaisit" id="datesaisit" value="<?php echo $nomMotif[0].' - '.$nomMotif[1];?>"><br/>

                        <label for="medicamentproposer">Médicament présenté :</label>
                        <select name="motif" id="listemotif">                        
                            <option class="form-control" value="<?php echo $nonValide[7];?>" ><?php echo $nonValide[7];?></option>
                                <?php
                                    foreach($medoc as $key){
                                        echo '<option class="form-control" value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                    }                                
                                ?>
                        </select>
                        <br/>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="echantillon">
                                <label for="echantillon" class="form-check-label">Échantillon distribué</label>                            
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="saisitdefinitive" id="saisitdefinitive">
                                <label for="saisitdefinitive" class="form-check-label ">Saisie définitive</label><br/>                            
                            </div>  
                        </div>
                        <input class="btn btn-info text-light valider" type="submit" value="Valider le rapport">
                    </form>
                </div>                    
            </div>
        </div>
    </div>
</section>