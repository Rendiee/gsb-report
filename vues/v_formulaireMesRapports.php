<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Mes rapports</h1>
            <div class="text text-center">
                Formulaire permettant d'afficher les rapports de visite d'une période donnée
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid" src="assets/img/rapport.jpg">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <div class="row mw-100">
                    <?php if (isset($_SESSION['aucunRap']) && $_SESSION['aucunRap']) {
                        echo '<p class="alert alert-danger text-center">Aucun rapport de visite à cette période.</p>';
                        $_SESSION['aucunRap'] = false;
                    } ?>
                    <?php if (isset($_SESSION['fourchetteRap']) && $_SESSION['fourchetteRap']) {
                        echo '<p class="alert alert-danger text-center">La fourchette selectionnée est incorrecte.</p>';
                        $_SESSION['fourchetteRap'] = false;
                    } ?>
                    <?php if (isset($_SESSION['pratRap']) && $_SESSION['pratRap']) {
                        echo '<p class="alert alert-danger text-center">Un problème est survenu lors da selection d\'un praticien.</p>';
                        $_SESSION['pratRap'] = false;
                    } ?>
                    <form class="formulaire col-12 m-0 fit mx-auto" action="index.php?uc=rapportdevisite&action=mesrapports" method="post">
                        <label for="datesaisit">Date de début : </span></label>
                        <input class="m-0 form-control py-0 d-inline w-50 text-rapport" type="date" name="datedebut" id="datedebut"><br /><br />

                        <label for="datesaisit">Date de fin : </label>
                        <input class="m-0 form-control py-0 d-inline w-50 text-rapport" type="date" name="datefin" id="datefin"><br /><br />

                        <label for="praticien">Praticien visité <span class="text-muted">(facultatif)</span></label>
                        <select name="praticien" class="form-select">
                            <option value>- Choisissez un praticien -</option>
                            <?php
                            foreach ($prat as $key) {
                                echo '<option  value="' . $key['num'] . '">' . $key['num'] . ' - ' . $key['nom'] . ' ' . $key['prenom'] . '</option>';
                            }
                            ?>
                        </select>

                        <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations" name="mesrapports">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $("form").on("submit", function() {
        $("p").remove();
        if ($('#datedebut').val() == "" && $('#datefin').val() == "") {
            event.preventDefault();
            $("form").before('<p class="alert alert-danger text-center fit mx-auto" id="errorDate">Veuillez saisir au moins une date.</p>');
            $("p").hide().slideDown()
        }
    })
</script>