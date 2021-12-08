
<section class="bg-light py-5">
    <div class="feature-work container my-4">
        <div class="row d-flex d-flex align-items-center">
            
        <div class="col-lg-5">
            <h1 class="feature-work-heading h2 py-3 semi-bold-600">Profil de : <br/><span class="carac"><?php echo $info[1].' '.$info[2]?></span></h1>
            <p class="feature-work-body text-muted light-300">
                Vos informations personnelles.
            </p>
            <a class="col">
                <img class="img-fluid" src="assets/img/profil.png">
            </a>
        </div>
        <div class="col-lg-4 offset-lg-1 align-left affich">
            <div class="row">
                <?php 
                    for($i=7; $i<=8; $i++){
                        if(empty($info[$i])){
                            $info[$i]='Non définie';
                        } 
                    }
                    ?>

                    <p><span class="carac">Matricule</span> : <?php echo $info[0] ?></p>
                    <p><span class="carac">Nom</span> : <?php echo $info[1] ?></p>
                    <p><span class="carac">Prenom</span> : <?php echo $info[2] ?></p>
                    <p><span class="carac">Rue</span> : <?php echo $info[3] ?></p>
                    <p><span class="carac">Code Postal</span> : <?php echo $info[4] ?></p>
                    <p><span class="carac">Ville</span> : <?php echo $info[5] ?></p>
                    <p><span class="carac">Date d'embauche</span> : <?php echo $info[6] ?></p>
                    <p><span class="carac">Habilitation</span> : <?php echo $info[7] ?></p>
                    <p><span class="carac">Secteur</span> : <?php echo $info[8] ?></p>
                    <p><span class="carac">Région</span> : <?php echo $info[9]?></p>
        </div>
        </div>
    </div>
</section>