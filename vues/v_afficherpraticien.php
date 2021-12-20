
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Informations du praticien :<br/><span class="carac"><?php echo $carac['1'].' '.$carac['2']; ?></span></h1>
                        <img class="img-fluid" src="assets/img/medecin.jpg">
                </div>
                <div class="col-lg-4 offset-lg-1 align-left affich">
                    <div class="row">
                                    
                            <p><span class="carac">Nom</span> : <?php echo $carac[1] ?></p>
                            <p><span class="carac">Prénom</span> : <?php echo $carac[2] ?></p>
                            <p><span class="carac">Adresse</span> : <?php echo $carac[3] ?></p>
                            <p><span class="carac">Code Postal</span> : <?php echo $carac[4] ?></p>
                            <p><span class="carac">Ville</span> : <?php echo $carac[5] ?></p>
                            <p><span class="carac">Notoriété</span> : <?php echo $carac[6] ?></p>
                            <p><span class="carac">Confiance</span> : <?php echo $carac[7] ?></p>
                            <p><span class="carac">Type de praticien</span> : <?php echo $carac[8] ?></p>

                    </div>
                       <input class="btn btn-info text-light valider" type="button" onclick="window.location.href='index.php?uc=praticiens&action=formulairepraticien';" value="Retour">
                </div>
            </div>
        </div>
    </section>