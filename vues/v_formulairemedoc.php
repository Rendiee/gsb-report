
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de médicament</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire permettant d'afficher toutes les informations
                        à propos d'un médicament en particulier.
                    </p>
                    <a class="col" data-type="image" data-fslightbox="gallery" href="assets/img/medoc.jpeg">
                        <img class="img-fluid" src="assets/img/medoc.jpeg">
                    </a>
                </div>
                <div class="col-lg-4 offset-lg-1 align-left">
                    <div class="row">
                        <form action="index.php?uc=medicaments&action=affichermedoc" method="post" class="form-signin">
                            <label for="name">Liste des médicaments : </form>
                            <select name="medicament" id="listemedicament">
                                <option class="form-control" value="default" >- Choisissez un médicament -</option>
                                <?php
                                
                                    $result = getAllNomMedicament();
                                    foreach($result as $key){
                                        echo '<option class="form-control" value="'.$key['MED_NOMCOMMERCIAL'].'">'.$key['MED_DEPOTLEGAL'].' - '.$key['MED_NOMCOMMERCIAL'].'</option>';
                                    }
                                
                                ?>
                            </select>
                                </br>
                                <input class="btn btn-info text-light" type="submit" value="Afficher les informations">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>