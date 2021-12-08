
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Informations du médicament :<br/><span class="carac"><?php echo $carac['MED_NOMCOMMERCIAL']; ?></span></h1>
                        <img class="img-fluid" src="assets/img/medoc.jpeg">
                </div>
                <div class="col-lg-4 offset-lg-1 align-left affich">
                    <div class="row">

                            <p><span class="carac">Dépot légal</span> : <?php echo $carac[0] ?></p>
                            <p><span class="carac">Nom commercial</span> : <?php echo $carac[1] ?></p>
                            <p><span class="carac">Composition</span> : <?php echo $carac[2] ?></p>
                            <p><span class="carac">Effets</span> : <?php echo $carac[3] ?></p>
                            <p><span class="carac">Contre indication</span> : <?php echo $carac[4] ?></p>
                            
                    </div>
                    <div class="row">
                       <input class="btn btn-info text-light" type="button" onclick="window.location.href='index.php?uc=medicaments&action=formulairemedoc';" value="Retour">
                    </div>
                </div>
            </div>
        </div>
    </section>