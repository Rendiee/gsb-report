<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Modification du rapport n°<?php echo $nonValide[1]; ?></h1>
            <p class="text text-center">
                Formulaire permettant de rédiger un rapport de visite.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-9 col-lg-8 col-xl-7 py-3">
                    <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="rediger formulaire mb-0 mt-0 d-flex align-items-center flex-column">
                        
                        <label class="title-formulaire">Rapport de visite</label><br/>
                        <div class="d-flex h-100">
                            <div class="w-50 h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <label for="nbrapport">Numéro du rapport :</label>
                                    <input type="text" disabled class="m-0" name="nbrapport" class="w-25 bg-white border-0" value="<?php echo $nonValide[1];?>"><br/>
                                </div>
                                <div>
                                    <label for="matricule">Matricule du collaborateur :</label>
                                    <input type="text" disabled class="m-0" name="medicament" class="w-25 bg-white border-0" value="<?php echo $nonValide[0];?>"><br/>
                                </div>
                                <div>
                                    <label for="praticien">Praticien concerné :</label>
                                    <input type="text" disabled class="m-0" name="medicament" id="nbrapport" value="<?php echo $nomPraticien[0].' - '.$nomPraticien[1].' '.$nomPraticien[2];?>"><br/>
                                </div>
                                <div>
                                    <label for="datevisite">Date de visite :</label>
                                    <input type="date" class="m-0" name="datevisite" id="datevisite" value="<?php echo $nonValide[2];?>"><br/>
                                </div>
                                <div>
                                    <label for="bilan">Bilan du rapport :</label>
                                    <textarea class="m-0" name="bilanrapport" id="bilanrapport"><?php echo $nonValide[3];?></textarea><br/>
                                </div>
                            </div>
                            <div class="vr m-3"></div>
                            <div class="w-50">
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
                            </div>                            
                        </div>
                        <div class="d-flex w-100 justify-content-center pt-3">
                            <input class="btn btn-info text-light valider w-25 m-0 me-1" type="submit" value="Valider le rapport">
                            <input class="btn btn-info text-light valider w-25 m-0 ms-1" type="button" onclick="history.go(-1)" value="Retour">
                        </div>
                    </form>
                    
                </div>                    
            </div>
        </div>
    </div>
</section>