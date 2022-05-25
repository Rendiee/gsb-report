<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Modification du rapport n°<?php echo $nonValide[1]; ?></h1>
            <p class="text text-center">
                Formulaire permettant de modifier un rapport de visite.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-9 col-lg-8 col-xl-7 py-3">
                <form action="" method="post" class="formulaire mb-0 mt-0 d-flex align-items-center flex-column">
                    <p class="w-100 m-0 text-black-50"><span style="color:red">* </span>Champs obligatoires</p>
                    <div class="title-formulaire pb-3">Rapport de visite</div>
                    <div class="d-flex flex-column rediger-overflow max-rediger w-100 px-1 pb-1">
                        <div class="d-flex rediger" id="redigerEtEchantillon">
                            <div class="w-50 d-flex flex-column justify-content-between">
                                <div>
                                    <label for="nbrapport">Numéro du rapport :</label>
                                    <input class="w-25 bg-white border-0 m-0" type="text" name="nbrapport" id="nbrapport" value="<?= $nonValide[1]; ?>" disabled>
                                    <input class="d-none" type="text" name="nbrapport" id="nbrapport" value="<?= $nonValide[1]; ?>">
                                </div>
                                <div>
                                    <label for="matricule">Matricule du collaborateur :</label>
                                    <input class="w-25 bg-white border-0 m-0" type="text" name="matricule" id="matricule" value="<?= $nonValide[0]; ?>" disabled>
                                </div>
                                <div>
                                    <label for="praticien">Praticien concerné <span style="color:red">*</span> :</label>
                                    <input type="text" disabled class="m-0 text-truncate w-50 form-control py-0 text-rapport" name="medicament" id="nbrapport" value="<?= $nomPraticien[0] . ' - ' . $nomPraticien[1] . ' ' . $nomPraticien[2]; ?>">
                                </div>
                                <div class="d-flex flex-column flex-xxl-row">
                                    <label for="datesaisit">Date de saisie <span style="color:red">*</span> :&nbsp</label>
                                    <input required disabled type="date" class="form-control m-0 py-0 w-50 text-rapport" name="datesaisit" id="datesaisit" value="<?= $nonValide[4]; ?>">
                                </div>
                                <div>
                                    <label for="bilanrapport">Bilan du rapport <span style="color:red">*</span> :</label>
                                    <textarea required name="bilanrapport" id="bilanrapport" class="form-control m-0"><?= $nonValide[3]; ?></textarea>
                                </div>
                            </div>
                            <div class="vr m-3"></div>
                            <div class="w-50 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex flex-column flex-xxl-row">
                                        <label for="datevisite">Date de visite <span style="color:red">*</span> :&nbsp</label>
                                        <input required type="date" class="form-control m-0 py-0 w-50 text-rapport" name="datevisite" id="datevisite" value="<?= $nonValide[2]; ?>">
                                    </div>
                                </div>
                                <div id="divmotifautre">
                                    <div class="d-flex flex-column flex-xl-row" id="divMotif">
                                        <label for="listemotif">Motif <span style="color:red">*</span> :&nbsp</label>
                                        <input type="text" disabled class="m-0 form-control py-0 d-flex w-50" name="datesaisit" id="datesaisit" value="<?= $nomMotif[0] . ' - ' . $nomMotif[1]; ?>">
                                    </div>
                                    <?php if ($nomMotif[0] == 9) { ?>
                                        <textarea required disabled name="motif-autre" id="motif-autre" placeholder="<?= $nonValide['RAP_MOTIFAUTRE'] ?>" class="form-control m-0 mt-2"></textarea>
                                    <?php } ?>
                                </div>
                                <div id="medoc1" class="d-flex flex-column">
                                    <label for="medicamentproposer1">1er médicament présenté :</label>
                                    <select name="medicamentproposer1" id="medicamentproposer1" class="form-select m-0">
                                        <option value="default">- Choisissez un médicament -</option>
                                        <?php
                                        foreach ($medoc as $key) {
                                            if ($nonValide['MED_DEPOTLEGAL_1'] == $key['MED_DEPOTLEGAL']) {
                                                echo '<option selected class="listemedoc" value="' . $key['MED_DEPOTLEGAL'] . '">' . $key['MED_DEPOTLEGAL'] . ' - ' . $key['MED_NOMCOMMERCIAL'] . '</option>';
                                            } else {
                                                echo '<option class="listemedoc" value="' . $key['MED_DEPOTLEGAL'] . '">' . $key['MED_DEPOTLEGAL'] . ' - ' . $key['MED_NOMCOMMERCIAL'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div id="medoc2" class="d-flex flex-column">
                                    <label for="medicamentproposer2">2ème médicament présenté :</label>
                                    <select name="medicamentproposer2" id="medicamentproposer2" class="form-select m-0">
                                        <option value="default">- Choisissez un médicament -</option>
                                        <?php
                                        foreach ($medoc as $key) {
                                            if ($nonValide['MED_DEPOTLEGAL_2'] == $key['MED_DEPOTLEGAL']) {
                                                echo '<option selected class="listemedoc" value="' . $key['MED_DEPOTLEGAL'] . '">' . $key['MED_DEPOTLEGAL'] . ' - ' . $key['MED_NOMCOMMERCIAL'] . '</option>';
                                            } else {
                                                echo '<option class="listemedoc" value="' . $key['MED_DEPOTLEGAL'] . '">' . $key['MED_DEPOTLEGAL'] . ' - ' . $key['MED_NOMCOMMERCIAL'] . '</option>';
                                            }
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
                    <div class="d-flex w-100 justify-content-center pt-3">
                        <input class="btn btn-info text-light valider col-xl-3 col-6 col-sm-5 col-md-4 m-0 me-1" type="submit" value="Valider le rapport" name="validerNonValide">
                        <input class="btn btn-info text-light valider col-xl-3 col-6 col-sm-5 col-md-4 m-0 ms-1" type="button" onclick="history.go(-1)" value="Retour">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>