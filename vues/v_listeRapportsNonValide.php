<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Formulaire de rapport non valide</h1>
            <p class="text text-center">
                Formulaire affichant tous les rapports non valide encore existant.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid" src="assets/img/rapport.jpg">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <?php if ($_SESSION['erreur']) {
                    echo '<p class="alert alert-danger text-center w-100">Un problème est survenu lors de la selection du rapport</p>';
                    $_SESSION['erreur'] = false;
                } ?>
                <?php if (isset($succes)) {
                    echo $succes;
                    unset($succes);
                } ?>
                <div class="formulaire-recherche">
                    <form action="index.php?uc=rapportdevisite&action=rapportNonValide" method="post" class="form-signin d-flex flex-column align-items-center">
                        <label for="name">Liste des rapports non valide :</label>
                        <select required name="nonValide" class="form-select mt-3">
                            <option class="text-center" value>- Rapport non valide -</option>
                            <?php
                            foreach ($info as $key) {
                                echo '<option class="form-control" value="' . $key['RAP_NUM'] . '">N°' . $key['RAP_NUM'] . ' - ' . $key['PRA_NOM'] . ' ' . $key['PRA_PRENOM'] . '. - ' . $key['RAP_DATEVISITE'] . '</option>';
                            }
                            ?>
                        </select>
                        <input class="btn btn-info text-light valider w-auto" type="submit" value="Modifier le rapport">
                    </form>
                    <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="m-0">
                        <input class="btn btn-info text-light valider m-0 w-auto" type="submit" value="Saisir un nouveau rapport" name="nouveau">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>