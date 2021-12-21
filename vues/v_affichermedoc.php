
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Informations du médicament :<br/><span class="carac"><?php echo $carac[1]; ?></span></h1>
                        <img class="img-fluid" src="assets/img/medoc.jpeg">
                </div>
                <div class="col-lg-4 offset-lg-1 align-left affich">
                    <div class="row">

                            <p><span class="carac">Dépot légal</span> : <?php echo $carac[0] ?></p>
                            <p><span class="carac">Nom commercial</span> : <?php echo $carac[1] ?></p>
                            <p><span class="carac">Composition</span> : <?php echo $carac[2] ?></p>
                            <p><span class="carac">Effets</span> : <?php echo $carac[3] ?></p>
                            <p><span class="carac">Contre indication</span> : <?php echo $carac[4] ?></p>
                            <p><span class="carac">Prix de l'échantillon</span> : <?php echo $carac[5].'€' ?></p>
                            <p><span class="carac">Famille</span> : <?php echo $carac[6] ?></p>
                            
                    </div>
                       <input class="btn btn-info text-light valider" type="button" onclick="history.go(-1)" value="Retour">
                </div>
            </div>
        </div>
    </section>