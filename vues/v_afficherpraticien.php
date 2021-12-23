<section class="bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col test">
                <h1 class="titre">Informations du praticien :<br/><span class="carac"><?php echo $carac['1'].' '.$carac['2']; ?></span></h1>
                <img class="img-fluid" src="assets/img/medecin.jpg">
            </div>
            <div class="col test">
                <div class="formulaire">
                    
                    <p><span class="carac">Nom</span> : <?php echo $carac[1] ?></p>
                    <p><span class="carac">Prénom</span> : <?php echo $carac[2] ?></p>
                    <p><span class="carac">Adresse</span> : <?php echo $carac[3] ?></p>
                    <p><span class="carac">Code Postal</span> : <?php echo $carac[4] ?></p>
                    <p><span class="carac">Ville</span> : <?php echo $carac[5] ?></p>
                    <p><span class="carac">Notoriété</span> : <?php echo $carac[6] ?></p>
                    <p><span class="carac">Confiance</span> : <?php echo $carac[7] ?></p>
                    <p><span class="carac">Type de praticien</span> : <?php echo $carac[8] ?></p>
                
                    <input class="btn btn-info text-light valider" type="button" onclick="history.go(-1)" value="Retour">
                </div>
            </div>
        </div>
    </div>
</section>