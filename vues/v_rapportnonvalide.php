<section class="bg-light">
    <div class="container">
        <div class="structure-hero">
            <h1 class="titre text-center">Modification du rapport n°<?php echo $nonValide[1]; ?></h1>
            <p class="text text-center">
                Formulaire permettant de rédiger un rapport de visite.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-0">
                    <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="formulaire mb-0 mt-0">
                        <label class="space title-formulaire">Rapport de visite</label><br/>

                        <label for="nbrapport">Numéro du rapport :</label>
                        <input type="text" disabled name="nbrapport" class="w-25 bg-white border-0" value="<?php echo $nonValide[1];?>"><br/>

                        <label for="matricule">Matricule du collaborateur :</label>
                        <input type="text" disabled name="medicament" class="w-25 bg-white border-0" value="<?php echo $nonValide[0];?>"><br/>

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
                    <input class="btn btn-info text-light valider my-5" type="button" onclick="history.go(-1)" value="Retour">
                </div>                    
            </div>
        </div>
    </div>
</section>