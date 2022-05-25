<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Saisie du rapport N°<?php echo $num; ?></h1>
            <p class="text text-center">
                Formulaire permettant de rédiger un rapport de visite.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-9 col-lg-8 col-xl-7 py-3">
                <?php if (isset($succes)) {
                    echo $succes;
                    unset($succes);
                } ?>
                <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="formulaire mb-0 mt-0 d-flex align-items-center flex-column">
                    <p class="w-100 m-0 text-black-50"><span style="color:red">* </span>Champs obligatoires</p>
                    <div class="title-formulaire pb-3">Rapport de visite</div>
                    <div class="d-flex flex-column rediger-overflow max-rediger w-100 px-1 pb-1">
                        <div class="d-flex rediger" id="redigerEtEchantillon">
                            <div class="w-50 d-flex flex-column justify-content-between">
                                <div>
                                    <label for="nbrapport">Numéro du rapport :</label>
                                    <input class="w-25 bg-white border-0 m-0" type="text" name="nbrapport" id="nbrapport" value="<?php echo $num; ?>" disabled>
                                </div>
                                <div>
                                    <label for="matricule">Matricule du collaborateur :</label>
                                    <input class="w-25 bg-white border-0 m-0" type="text" name="matricule" id="matricule" value="<?php echo $_SESSION['matricule']; ?>" disabled>
                                </div>
                                <div>
                                    <label for="praticien">Praticien concerné <span style="color:red">*</span> :</label>
                                    <select required name="praticien" id="praticien" class="form-select m-0">
                                        <option value>- Choisissez un praticien -</option>
                                        <?php
                                        foreach ($prat as $key) {
                                            echo '<option value="' . $key['PRA_NUM'] . '">' . $key['PRA_NUM'] . ' - ' . $key['PRA_NOM'] . ' ' . $key['PRA_PRENOM'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="d-flex flex-column flex-xxl-row">
                                    <label for="datesaisit">Date de saisie <span style="color:red">*</span> :&nbsp</label>
                                    <input required type="date" class="form-control m-0 py-0 w-50 text-rapport" name="datesaisit" id="datesaisit">
                                </div>
                                <div>
                                    <label for="bilanrapport">Bilan du rapport <span style="color:red">*</span> :</label>
                                    <textarea required name="bilanrapport" id="bilanrapport" class="form-control m-0"></textarea>
                                </div>
                            </div>
                            <div class="vr m-3"></div>
                            <div class="w-50 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex flex-column flex-xxl-row">
                                        <label for="datevisite">Date de visite <span style="color:red">*</span> :&nbsp</label>
                                        <input required type="date" class="form-control m-0 py-0 w-50 text-rapport" name="datevisite" id="datevisite" onblur="checkDateSaisieRapport(this)">
                                    </div>
                                </div>
                                <div id="divmotifautre">
                                    <div class="d-flex justify-content-between align-items-center" id="divMotif">
                                        <label for="listemotif">Motif <span style="color:red">*</span> :&nbsp</label>
                                        <select onChange="addMotifAutre(this);" required name="listemotif" id="listemotif" class="form-select w-75 m-0">
                                            <option value>- Choisissez un motif -</option>
                                            <?php
                                            foreach ($motif as $key) {
                                                echo '<option value="' . $key['MOT_ID'] . '">' . $key['MOT_ID'] . ' - ' . $key['MOT_LIBELLE'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div id="medoc" class="d-flex flex-column">
                                    <label for="medicamentproposer1">1er médicament présenté :</label>
                                    <select onChange="addMedicament(this);" name="medicamentproposer1" id="medicamentproposer1" class="form-select m-0">
                                        <option value="default">- Choisissez un médicament -</option>
                                        <?php
                                        foreach ($medoc as $key) {
                                            echo '<option class="listemedoc" value="' . $key['MED_DEPOTLEGAL'] . '">' . $key['MED_DEPOTLEGAL'] . ' - ' . $key['MED_NOMCOMMERCIAL'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div id="divCheck" class="d-flex justify-content-between align-items-center">
                                    <div class="form-check form-switch m-auto">
                                        <label for="checkEnchantillon" id="labelCheck" class="form-check-label">Échantillon distribué</label>
                                        <input class="form-check-input" onchange="addEchantillon(this);" type="checkbox" name="echantillon" id="checkEnchantillon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 border-top border-dark mt-1 d-flex justify-content-center">
                        <div class="form-check form-switch mb-2 pt-3 m-auto">
                            <label for="saisitdefinitive" class="form-check-label">Saisie définitive</label>
                            <input class="form-check-input" type="checkbox" name="saisitdefinitive" id="saisitdefinitive"><br />
                        </div>
                    </div>
                    <div class="d-flex w-100 justify-content-center pt-2">
                        <input class="btn btn-info text-light valider col-xl-3 col-6 col-sm-5 col-md-4 m-0 me-1" type="submit" value="Valider le rapport" name="valider">
                        <input class="btn btn-info text-light valider col-xl-3 col-6 col-sm-5 col-md-4 m-0 ms-1" type="button" onclick="history.go(-1)" value="Retour">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear() + "-" + (month) + "-" + (day);
        $('input[name="datesaisit"]').val(today);
    })
    $('form').on('submit', function(event) {
        if (!checkDateSaisieRapport()) {
            event.preventDefault();
        }
        if ($('#medicamentproposer1').val() == "default" && !document.getElementById('saisitdefinitive').checked) {
            return confirm('Vous n\'avez saisis aucun médicament présenté et le rapport va être enregistrer à l\'état non définitif, voulez-vous quand même enregistrer le rapport ?');
        }else if (!document.getElementById('saisitdefinitive').checked) {
            return confirm('Le rapport va être enregistrer à l\'état non définitif, voulez-vous quand même enregistrer le rapport ?');
        }else if ($('#medicamentproposer1').val() == "default"){
            return confirm('Vous n\'avez saisis aucun médicament présenté, voulez-vous quand même enregistrer le rapport ?');
        }
    })
</script>