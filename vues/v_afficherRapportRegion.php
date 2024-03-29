<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Informations du rapport n°<?php echo $infoRapport['RAP_NUM']; ?></h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-9 col-lg-8 col-xl-7 py-3">
                <div class="infos formulaire mb-0 mt-0 d-flex align-items-center flex-column">
                    <label class="title-formulaire">Rapport de visite</label><br />
                    <div class="d-flex h-100 w-100">
                        <div class="w-50 h-100 d-flex flex-column justify-content-around">
                            <div>
                                <div><span class="carac">Rapport N°<?php echo $infoRapport['RAP_NUM']; ?></span></div>
                            </div>
                            <div>
                                <div><span class="carac">Matricule du collaborateur</span> : <?php echo $infoRapport['COL_MATRICULE']; ?></div>
                            </div>
                            <div>
                                <div><span class="carac">Patricien concerné</span> :
                                    <form action="index.php?uc=rapportdevisite&action=rapportregion" method="post" class="m-0 p-0 d-inline">
                                        <input class="m-0 p-0 border-0 bg-transparent link-info text-decoration-underline" type="submit" value="<?php echo $infoRapport['PRA_NOM'] . ' ' . $infoRapport['PRA_PRENOM']; ?>">
                                        <input type="hidden" name="praticienMonRapport" value="<?php echo $infoRapport['PRA_NUM']; ?>">
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div><span class="carac">Bilan</span> : <?php echo $infoRapport['RAP_BILAN']; ?></div>
                            </div>
                        </div>
                        <div class="vr m-3"></div>
                        <div class="w-50 h-100 d-flex flex-column justify-content-around">
                            <div>
                                <div><span class="carac">Date de visite</span> : <?php echo $infoRapport['RAP_DATEVISITE']; ?></div>
                            </div>
                            <div>
                                <div><span class="carac">Date de saisie du rapport</span> : <?php echo $infoRapport['RAP_DATESAISIT']; ?></div>
                            </div>
                            <div>
                                <div><span class="carac">Motif</span> : <?php echo $motif; ?></div>
                            </div>
                            <div>
                                <div><span class="carac">Médicament(s)</span> :
                                    <?php
                                    if (isset($medoc1)) {
                                        echo '<form action="index.php?uc=rapportdevisite&action=rapportregion" method="post" class="m-0 p-0 d-inline">
                                                <input class="m-0 p-0 border-0 bg-transparent link-info text-decoration-underline" name="medocMonRapport" type="submit" value="' . $medoc1[1] . '">
                                                </form>';
                                        if (isset($medoc2)) {
                                            echo ' / <form action="index.php?uc=rapportdevisite&action=rapportregion" method="post" class="m-0 p-0 d-inline">
                                                <input class="m-0 p-0 border-0 bg-transparent link-info text-decoration-underline" name="medocMonRapport" type="submit" value="' . $medoc2[1] . '">
                                                </form>';
                                        }
                                    } else {
                                        echo $medoc;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div>
                                <div><span class="carac">Rapport définitif</span> : <?php echo $definitif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex w-100 justify-content-center pt-3">
                        <form action="index.php?uc=rapportdevisite&action=rapportregion" method="post" class="m-0 p-0 d-inline d-contents">
                            <input class="btn btn-info text-light valider col-xl-3 col-6 col-sm-5 col-md-4 m-0 ms-1" type="submit" value="Retour" name="retourListeMesRapports">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>