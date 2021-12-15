<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de praticien</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire permettant d'afficher les informations
                        à propos d'un praticien en particulier.
                    </p>
                    <a class="col">
                        <img class="img-fluid" src="assets/img/medecin.jpg">
                    </a>
                </div>
                <div class="col-lg-4 offset-lg-1 align-left">
                    <div class="row">
                    <form action="index.php?uc=praticiens&action=afficherpraticien" method="post" class="form-signin">
                            <label for="name">Liste des praticiens : </form>
                            <select name="praticien" id="listechoix">
                                <option class="form-control" value="default">- Choisissez un praticien -</option>
                                <?php
                                
                                    foreach($result as $key){
                                        echo '<option class="form-control" value="'.$key['PRA_NUM'].'">'.$key['PRA_NUM'].' - '.$key['PRA_NOM'].' '.$key['PRA_PRENOM'].'</option>';
                                    }
                                
                                ?>
                            </select>
                            <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>