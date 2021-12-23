<section class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col test">
                <h1 class="titre">Formulaire de rapport de visite</h1>
                <p class="text">Formulaire permettant de rédiger un rapport de visite.</p>
                <img src="assets/img/login.png" class="image-size" alt="Médecin Harold même !">
            </div>
            <div class="col test">
                <?php if (isset($succes)){echo $succes;} ?>
                <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="formulaire">
                        <p style="color:grey; margin-top:-10px"><span style="color:red">* </span>Champs obligatoires</p>
                        <label class="space title-formulaire">Rapport de visite</label>
                        <div class="form-group space">
                            <label for="nbrapport">Numéro du rapport :</label>
                            <input class="form-control" type="text" name="nbrapport" id="nbrapport" value="<?php echo $num;?>" disabled>
                        </div>
                        <div class="form-group space">
                            <label for="matricule">Matricule du collaborateur :</label>
                            <input class="form-control" type="text" name="matricule" id="nbrapport" value="<?php echo $_SESSION['matricule'];?>" disabled>
                        </div>
                        <div class="form-group space">
                            <label for="praticien">Praticien concerné <span style="color:red">*</span> :</label>
                            <select required name="praticien" id="listemotif">
                                <option value="default">- Choisissez un praticien -</option>
                                <?php
                                    foreach($prat as $key){
                                        echo '<option value="'.$key['PRA_NUM'].'">'.$key['PRA_NUM'].' - '.$key['PRA_NOM'].' '.$key['PRA_PRENOM'].'</option>';
                                    }                                
                                ?>
                            </select>
                        </div>
                        <div class="form-group space">
                            <label for="datevisite">Date de visite : </label>
                            <input class="form-control" type="date" name="datevisite" id="datevisite">
                        </div>
                        <div class="form-group space">
                            <label for="bilan">Bilan du rapport :</label>
                            <textarea class="form-control" name="bilanrapport" id="bilanrapport"></textarea>
                        </div>
                        <div class="form-group space">
                            <label for="datesaisit">Date de saisie du rapport <span style="color:red">*</span> : </label>
                            <input class="form-control" type="date" name="datesaisit" id="datesaisit">
                        </div>
                        <div class="form-group space">
                            <label for="motif">Motif <span style="color:red">*</span> :</label>
                            <select name="motif" id="listemotif">
                                <option value="default" >- Choisissez un motif -</option>
                                <?php
                                    foreach($motif as $key){
                                        echo '<option value="'.$key['MOT_ID'].'">'.$key['MOT_ID'].' - '.$key['MOT_LIBELLE'].'</option>';
                                    }
                                        
                                ?>
                            </select>
                        </div>
                        <div class="form-group space">
                            <label for="medicamentproposer">1er médicament présenté :</label>
                            <select name="medicamentproposer" id="listemotif">
                                <option value="default">- Choisissez un médicament -</option>
                                <?php
                                    foreach($medoc as $key){
                                        echo '<option value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                    }                                
                                ?>
                            </select>
                        </div>
                        <div class="form-group space">
                            <label for="medicamentproposer">2ème médicament présenté :</label>
                            <select name="medicamentproposer" id="listemotif">
                                <option value="default">- Choisissez un médicament -</option>
                                <?php
                                    foreach($medoc as $key){
                                        echo '<option value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                    }                                
                                ?>
                            </select>
                        </div>
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="echantillon" name="echantillon" id="echantillon">
                                        <label class="form-check-label" for="echantillon">Échantillon distribué</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="saisitdefinitive" name="saisitdefinitive" id="saisitdefinitive">
                                        <label class="form-check-label" for="saisitdefinitive">Saisie définitive</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="valider" id="valider" class="btn btn-info text-light">Valider</button>
                </form>
            </div>
        </div>
    </div>
</section>