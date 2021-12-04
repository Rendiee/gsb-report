
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Informations du praticien :<br/><span class="carac"><?php echo $carac['0'].' '.$carac['1']; ?></span></h1>
                    <a class="col" data-type="image" data-fslightbox="gallery" href="assets/img/medecin.jpg">
                        <img class="img-fluid" src="assets/img/medecin.jpg">
                    </a>
                </div>
                <div class="col-lg-4 offset-lg-1 align-left affich">
                    <div class="row">
                         <?php 
                            if(empty($carac[6])){
                                $carac[6]='Non définie';
                            }                            
                            echo '<p><span class="carac">Nom</span> : '.$carac[0].'</p><br/><br/>
                            <p><span class="carac">Prénom</span> : '.$carac[1].'</p><br/><br/><p><span class="carac">Adresse</span> : '.$carac[2].'</p><br/><br/>
                            <p><span class="carac">Code Postal</span> : '.$carac[3].'</p><br/><br/><p><span class="carac">Ville</span> : '.$carac[4].'</p><br/><br/>
                            <p><span class="carac">Notoriété</span> : '.$carac[5].'</p><br/><br/><p><span class="carac">Confiance</span> : '.$carac[6] ; ?></p>
                    </div>
                    <div class="row">
                       <input class="btn btn-info text-light" type="button" onclick="window.location.href='index.php?uc=praticiens&action=formulairepraticien';" value="Retour">
                    </div>
                </div>
            </div>
        </div>
    </section>