<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Informations du praticien <span class="carac"><?php echo $carac['1'] . ' ' . $carac['2']; ?></span></h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid size-img-page" src="assets/img/docteur-avatar.png">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <div class="formulaire">
                    <p><span class="carac">Nom</span> : <?php echo $carac[1] ?></p>
                    <p><span class="carac">Prénom</span> : <?php echo $carac[2] ?></p>
                    <p><span class="carac">Adresse</span> : <?php echo $carac[3] ?></p>
                    <p><span class="carac">Code Postal</span> : <?php echo $carac[4] ?></p>
                    <p><span class="carac">Ville</span> : <?php echo $carac[5] ?></p>
                    <p><span class="carac">Notoriété</span> : <?php echo $carac[6] ?></p>
                    <p><span class="carac">Confiance</span> : <?php echo $carac[7] ?></p>
                    <p><span class="carac">Type de praticien</span> : <?php echo $carac[8] ?></p>
                    <input class="btn btn-info text-light valider col-6 col-sm-5 col-md-4 col-lg-3" type="button" onclick="history.go(-1)" value="Retour">
                </div>
            </div>
        </div>
    </div>
</section>