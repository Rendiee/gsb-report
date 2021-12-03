<?php

    include("v_header.php");

?>

<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Informations du médicament :<br/><span class="carac"><?php echo $carac['MED_NOMCOMMERCIAL']; ?></span></h1>
                    <a class="col" data-type="image" data-fslightbox="gallery" href="assets/img/medicament.jpg">
                        <img class="img-fluid" src="assets/img/medoc.jpeg">
                    </a>
                </div>
                <div class="col-lg-4 offset-lg-1 align-left affich">
                    <div class="row">
                         <?php echo '<p><span class="carac">Dépot légal</span> : '.$carac[0].'</p><br/><br/>
                            <p><span class="carac">Nom commercial</span> : '.$carac[1].'</p><br/><br/><p><span class="carac">Composition</span> : '.$carac[2].'</p><br/><br/>
                            <p><span class="carac">Effets</span> : '.$carac[3].'</p><br/><br/><p><span class="carac">Contre indication</span> : '.$carac[4] ; ?></p>
                    </div>
                    <div class="row">
                       <input class="btn btn-info text-light" type="button" onclick="window.location.href='index.php?uc=medicaments&action=formulairemedoc';" value="Retour">
                    </div>
                </div>
            </div>
        </div>
    </section>