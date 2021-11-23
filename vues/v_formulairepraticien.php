<!-- Start Feature Work -->
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de praticien</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire permettant d'afficher les informations
                        à propos d'un praticien en particulier.
                    </p>
                    <a class="col" data-type="image" data-fslightbox="gallery" href="assets/img/praticien.jpg">
                        <img class="img-fluid" src="assets/img/praticien.jpg">
                    </a>
                </div>
                <div class="col-lg-6 offset-lg-1 align-left">
                    <div class="row">
                    <form class="form-signin" action="" method="post">
                            <label for="name">Liste des praticiens : </form>
                            <select name="medicament" id="listemedicament">
                                <option class="form-control" value="default">- Choisissez un matricule -</option>
                                <?php
                                
                                    $result = getAllMatriculePraticien();
                                    foreach($result as $key){
                                        echo '<option class="form-control" value="'.$key['PRA_NUM'].'">'.$key['PRA_NUM'].'</option>';
                                    }
                                
                                ?>
                            </select>
                                </br>
                            <input type="submit" value="Afficher les informations">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
 <!-- End Feature Work -->