<!-- Start Feature Work -->
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de médicament</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire permettant d'afficher toutes les informations
                        à propos d'un médicament en particulier.
                    </p>
                    <a class="col" data-type="image" data-fslightbox="gallery" href="assets/img/medicament.jpg">
                        <img class="img-fluid" src="assets/img/medicament.jpg">
                    </a>
                </div>
                <div class="col-lg-6 offset-lg-1 align-left">
                    <div class="row">
                        <form action="" method="post">
                            <label for="name">Liste des médicaments : </form>
                            <select name="medicament" id="listemedicament">
                                <option value="default">Choisissez un médicament :</option>
                                <?php
                                
                                    $result = getNomMedicament();
                                    foreach($result as $key){
                                        echo '<option value="'.$key['MED_NOMCOMMERCIAL'].'">'.$key['MED_NOMCOMMERCIAL'].'</option>';
                                    }
                                
                                ?>
                            </select>
                                </br>
                            <input type="submit" value="Afficher les informations">

                                <?php
                                
                                    if(isset($_POST['submit'])){

                                        echo 'Hello';

                                    }
                                    
                                ?>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
 <!-- End Feature Work -->