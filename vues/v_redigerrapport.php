<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Saisie du rapport N°<?php echo $num;?></h1>
            <p class="text text-center">
                Formulaire permettant de rédiger un rapport de visite.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-9 col-lg-8 col-xl-7 py-3">
            <?php if (isset($succes)){echo $succes; unset($succes);}?>
                <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="rediger formulaire mb-0 mt-0 d-flex align-items-center flex-column">
                    <p class="w-100 m-0 text-black-50"><span style="color:red">* </span>Champs obligatoires</p>
                    <label class="title-formulaire pb-3">Rapport de visite</label>
                    <div class="d-flex h-100">
                        <div class="w-50 h-100 d-flex flex-column justify-content-between">
                            <div>
                                <label for="nbrapport">Numéro du rapport :</label>
                                <input class="w-25 bg-white border-0 m-0" type="text" name="nbrapport" value="<?php echo $num;?>" disabled>
                            </div>
                            <div>
                                <label for="matricule">Matricule du collaborateur :</label>
                                <input class="w-25 bg-white border-0 m-0" type="text" name="matricule" value="<?php echo $_SESSION['matricule'];?>" disabled>
                            </div>
                            <div>
                                <label for="praticien">Praticien concerné <span style="color:red">*</span> :</label>
                                <select required name="praticien" id="listemotif" class="form-select m-0">
                                    <option value="default">- Choisissez un praticien -</option>
                                    <?php
                                        foreach($prat as $key){
                                            echo '<option value="'.$key['PRA_NUM'].'">'.$key['PRA_NUM'].' - '.$key['PRA_NOM'].' '.$key['PRA_PRENOM'].'</option>';
                                        }                                
                                    ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column flex-xxl-row">
                                <label for="datevisite">Date de visite :&nbsp</label>
                                <input type="date" class="form-control m-0 py-0 w-50 text-rapport" name="datevisite" id="datevisite">
                            </div>
                            <div>
                                <label for="bilan">Bilan du rapport :</label>
                                <textarea name="bilanrapport" id="bilanrapport" class="form-control m-0"></textarea>
                            </div>
                            </div>
                        <div class="vr m-3"></div>
                        <div class="w-50 h-100 d-flex flex-column justify-content-between">
                            <div class="d-flex flex-column flex-xxl-row">
                                <label for="datesaisit">Date de saisie <span style="color:red">*</span> :&nbsp</label>
                                <input type="date" class="form-control m-0 py-0 w-50 text-rapport" name="datesaisit" id="datesaisit">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="motif">Motif <span style="color:red">*</span> :&nbsp</label>
                                <select name="motif" id="listemotif" class="form-select w-75 m-0">
                                    <option value="default" >- Choisissez un motif -</option>
                                    <?php
                                        foreach($motif as $key){
                                            echo '<option value="'.$key['MOT_ID'].'">'.$key['MOT_ID'].' - '.$key['MOT_LIBELLE'].'</option>';
                                        }                                    
                                    ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="medicamentproposer">1er médicament présenté :</label>
                                <select name="medicamentproposer" id="listemotif" class="form-select m-0">
                                    <option value="default">- Choisissez un médicament -</option>
                                    <?php
                                        foreach($medoc as $key){
                                            echo '<option value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                        }                                
                                    ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="medicamentproposer">2ème médicament présenté :</label>
                                <select name="medicamentproposer" id="listemotif" class="form-select m-0">
                                    <option value="default">- Choisissez un médicament -</option>
                                    <?php
                                        foreach($medoc as $key){
                                            echo '<option value="'.$key['MED_DEPOTLEGAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                        }                                
                                    ?>
                                </select>
                            </div>
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
                        <input class="btn btn-info text-light valider col-xl-3 col-6 col-sm-5 col-md-4 m-0 me-1" type="submit" value="Valider le rapport" name="valider">
                        <input class="btn btn-info text-light valider col-xl-3 col-6 col-sm-5 col-md-4 m-0 ms-1" type="button" onclick="history.go(-1)" value="Retour">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>