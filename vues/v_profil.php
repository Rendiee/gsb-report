
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
                    echo '<p><span class="carac">Matricule</span> : '.$info[0].'</p><br/><br/>
                    <p><span class="carac">Nom</span> : '.$info[1].'</p><br/><br/><p><span class="carac">Prenom</span> : '.$info[2].'</p><br/><br/>
                    <p><span class="carac">Rue</span> : '.$info[3].'</p><br/><br/><p><span class="carac">Code Postal</span> : '.$info[4].'</p><br/><br/>
                    <p><span class="carac">Ville</span> : '.$info[5].'</p><br/><br/><p><span class="carac">Date d\'embauche</span> : '.$info[6].'</p><br/><br/>
                    <p><span class="carac">Habilitation</span> : '.$info[7].'</p><br/><br/><p><span class="carac">Secteur</span> : '.$info[8].'</p><br/><br/>
                    <p><span class="carac">Région</span> : '.$info[9];?></p>
            </div>    
        </div>
        </div>
    </div>
</section>