<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Tous les rapports de la région du <?php echo date_format($dateDebut, 'd/m/Y') . ' au ' . date_format($dateFin, 'd/m/Y'); ?></h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-9 col-lg-8 col-xl-7 py-3">
                <div class="mesRapports max-infos h-auto formulaire mb-0 mt-0 d-flex align-items-center flex-column justify-content-between pb-0">
                    <div class="w-100 d-flex flex-column">
                        <?php
                        foreach ($rapportRegion as $key) {
                            if ($key['MED_DEPOTLEGAL_1'] == NULL) {
                                $text = 'Aucun';
                            } elseif ($key['MED_DEPOTLEGAL_2'] == NULL) {
                                $medoc = getDepotMedoc($key['MED_DEPOTLEGAL_1']);
                                $text = $medoc[1];
                            } else {
                                $medoc1 = getDepotMedoc($key['MED_DEPOTLEGAL_1']);
                                $medoc2 = getDepotMedoc($key['MED_DEPOTLEGAL_2']);
                                $text = $medoc1[1] . ' / ' . $medoc2[1];
                            }
                            echo '<form action="index.php?uc=rapportdevisite&action=mesrapports" method="post" class="d-flex flex-column w-100">
                                    <label for="praticien">N°' . $key['RAP_NUM'] . ' - ' . $key['PRA_NOM'] . ' ' . $key['PRA_PRENOM'] . '</label>
                                    <div class="d-flex align-items-center justify-content-between w-100">
                                        <input name="RAP_NUM" value="' . $key['RAP_NUM'] . '" class="d-none">
                                        <div class="mw-100 overflow-auto form-control d-flex justify-content-between align-items-center">
                                            <div class="col-6 col-sm-5 col-md-3 text-center">' . $key['dateVisite'] . '</div>
                                            <div class="text-center d-none d-sm-block">|</div>
                                            <div class="col-6 col-sm-5 col-md-3 text-center"><u>Motif</u> : ' . $key['MOT_LIBELLE'] . '</div>
                                            <div class="text-center d-none d-sm-block">|</div>
                                            <div class="col-6 col-sm-5 col-md-3 text-center"><u>Médicament(s)</u> : ' . $text . '</div>
                                        </div>
                                        <input class="btn btn-info text-light valider m-0 ms-3" type="submit" value="Voir" name="voirRapport">
                                    </div>
                                    </form> ';
                        }
                        ?>
                    </div>
                    <div class="position-sticky bottom-0 retour-rap w-100 py-3">
                        <form action="index.php?uc=rapportdevisite&action=rapportregion" method="post" class="m-0 p-0">
                            <input class="btn btn-info text-light valider col-6 col-sm-5 col-md-4 col-lg-3 my-0" type="submit" value="Retour" name="retourFormulaireMesRapports">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>