<section class="bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">            
            <div class="col test">
                <h1 class="titre">Profil de : <br/><span class="carac"><?php echo $info[1].' '.$info[2]?></span></h1>
                <p class="text">
                    Vos informations personnelles.
                </p>
                <img class="img-fluid" src="assets/img/profil.png">
            </div>
        <div class="col test">
            <div class="formulaire">

                <p><span class="carac">Matricule</span> : <?php echo $info[0] ?></p>
                <p><span class="carac">Nom</span> : <?php echo $info[1] ?></p>
                <p><span class="carac">Prenom</span> : <?php echo $info[2] ?></p>
                <p><span class="carac">Rue</span> : <?php echo $info[3] ?></p>
                <p><span class="carac">Code Postal</span> : <?php echo $info[4] ?></p>
                <p><span class="carac">Ville</span> : <?php echo $info[5] ?></p>
                <p><span class="carac">Date d'embauche</span> : <?php echo $info[6] ?></p>
                <p><span class="carac">Habilitation</span> : <span style="color:#0DCAF0;font-weight: 700;"> <?php echo $info[7] ?></span></p>
                <p><span class="carac">Secteur</span> : <?php echo $info[8] ?></p>
                <p><span class="carac">Région</span> : <?php echo $info[9]?></p>
                
            </div>
        </div>
    </div>
</section>