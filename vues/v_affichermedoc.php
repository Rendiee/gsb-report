<section class="bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col test align-items-start">
                <h1 class="titre">Informations du médicament :<br/>
                    <span class="carac"><?php echo $carac[1]; ?></span>
                </h1>
                <img class="img-fluid" src="assets/img/medoc.jpeg">
            </div>
            <div class="col test">
                <div class="formulaire">
                    
                    <p><span class="carac">Dépot légal</span> : <?php echo $carac[0] ?></p>
                    <p><span class="carac">Nom commercial</span> : <?php echo $carac[1] ?></p>
                    <p><span class="carac">Composition</span> : <?php echo $carac[2] ?></p>
                    <p><span class="carac">Effets</span> : <?php echo $carac[3] ?></p>
                    <p><span class="carac">Contre indication</span> : <?php echo $carac[4] ?></p>
                    <p><span class="carac">Prix de l'échantillon</span> : <?php echo $carac[5].'€' ?></p>
                    <p><span class="carac">Famille</span> : <?php echo $carac[6] ?></p> 
                    
                    <input class="btn btn-info text-light valider" type="button" onclick="history.go(-1)" value="Retour">
                </div>
            </div>
        </div>
    </div>
</section>