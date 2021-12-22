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
                    <?php if (isset($succes)){echo $succes;} ?>
                    <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="rapport" id="check-utils">
                        <p style="color:grey;margin-top:-10px"><span style="color:red">*</span>Champs obligatoires</p>
                        <h2 style="text-align: center; text-decoration: underline;">Rapport de visite</h2>
                        <br/>
                        <label for="nbrapport">Numéro du rapport :</label>    
                        <input style="background-color:white;border:none;" type="text" name="nbrapport" id="nbrapport" value="<?php echo $num;?>" disabled><br/>

                        <label for="matricule">Matricule du collaborateur :</label>
                        <input style="background-color:white;border:none;" type="text" disabled name="matricule" id="nbrapport" value="<?php echo $_SESSION['matricule'];?>"><br/>

                        <label for="praticien">Praticien concerné <span style="color:red">*</span> :</label>
                        <select required name="praticien" id="listemotif">
                            <option class="form-control" value>- Choisissez un praticien -</option>
                            <?php
                                foreach($prat as $key){
                                    echo '<option class="form-control" value="'.$key['PRA_NUM'].'">'.$key['PRA_NUM'].' - '.$key['PRA_NOM'].' '.$key['PRA_PRENOM'].'</option>';
                                }                                
                            ?>
                        </select>
                        <br/>
                        <label for="datevisite">Date de visite : </label>
                        <input type="date" name="datevisite" id="datevisite"><br/>

                        <label for="bilan">Bilan du rapport :</label>
                        <textarea name="bilanrapport" id="bilanrapport"></textarea><br/>

                        <label for="datesaisit">Date de saisie du rapport <span style="color:red">*</span> : </label>
                        <input type="date" required name="datesaisit" id="datesaisit"><br/>

                        <label for="motif">Motif <span style="color:red">*</span> :</label>
                        <select required name="motif" id="listemotif">
                            <option class="form-control" value >- Choisissez un motif -</option>
                            <?php
                                foreach($motif as $key){
                                    echo '<option class="form-control" value="'.$key['MOT_ID'].'">'.$key['MOT_ID'].' - '.$key['MOT_LIBELLE'].'</option>';
                                }
                                    
                            ?>
                        </select>
                        <br/>

                        <label for="medicamentproposer">1er médicament présenté :</label>
                        <select name="medicamentproposer" id="listemotif">
                            <option class="form-control" value>- Choisissez un médicament -</option>
                            <?php
                                foreach($medoc as $key){
                                    echo '<option class="form-control" value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                }                                
                            ?>
                        </select>
                        <br/>
                        <label for="medicamentproposer">2ème médicament présenté :</label>
                        <select name="medicamentproposer" id="listemotif">
                            <option class="form-control" value>- Choisissez un médicament -</option>
                            <?php
                                foreach($medoc as $key){
                                    echo '<option class="form-control" value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                }                                
                            ?>
                        </select>
                        <br/>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="echantillon" id="echantillon" onclick="addInputEchantillon()">
                                <label for="echantillon" class="form-check-label">Échantillon distribué</label>                            
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="saisitdefinitive" id="saisitdefinitive">
                                <label for="saisitdefinitive" class="form-check-label ">Saisie définitive</label><br/>                            
                            </div>  
                        </div>
                        <input class="btn btn-info text-light valider" type="submit" value="Valider le rapport" name="valider" id="valider">                        
                    </form>
                    <script>

                            function addInputEchantillon(){

                                let checkEchantillon = document.getElementById("echantillon");
                                let checkUtils = document.getElementById("check-utils");

                                if(checkEchantillon.checked){

                                    var input = document.createElement("input");
                                    input.type = "text";
                                    input.name = "echantillion1";
                                    checkUtils.appendChild(input);

                                }

                            }

                    </script>
                </div>
            </div>
        </div>
    </div>
</section>