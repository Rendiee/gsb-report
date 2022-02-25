<section class="bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6 test align-items-start structure-hero">
                <h1 class="titre">Formulaire de médicament</h1>
                <p class="text">
                    Formulaire permettant d'afficher toutes les informations
                    à propos d'un médicament en particulier.
                </p>
            </div>
            <div class="col test">
                <img class="img-fluid size-img-page" src="assets/img/medoc.jpeg">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4">
                <form action="index.php?uc=medicaments&action=affichermedoc" method="post" class="formulaire-recherche col-12">
                    <label for="listemedoc">Médicaments disponible :</label>
                    <select name="medicament" id="listechoix">
                        <option value="default">- Choisissez un médicament -</option>
                        <?php                            
                            foreach($result as $key){
                                echo '<option value="'.$key['MED_NOMCOMMERCIAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                            }                           
                        ?>
                    </select>
                    <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations">
                </form>
            </div>
        </div>
    </div>
</section>