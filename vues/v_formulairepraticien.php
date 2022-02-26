<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Formulaire de praticien</h1>
            <p class="text text-center">
                Formulaire permettant d'afficher les informations
                à propos d'un praticien en particulier.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid size-img-page" src="assets/img/medecin.jpg">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <?php if ($_SESSION['erreur']){echo '<p class="alert alert-danger text-center w-100">Un problème est survenu lors de la selection du praticien</p>'; $_SESSION['erreur']=false;}?>
                <form action="index.php?uc=praticiens&action=afficherpraticien" method="post" class="formulaire-recherche col-12 m-0">
                    <label class="titre-formulaire" for="listepraticien">Praticiens disponible :</label>
                    <select required name="praticien" id="listechoix">
                        <option value class="form-control text-center">- Choisissez un praticien -</option>
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
</section>