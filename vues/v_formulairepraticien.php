<section class="bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="structure-hero">
                <h1 class="titre">Formulaire de praticien</h1>
                <p class="text">
                    Formulaire permettant d'afficher les informations
                    à propos d'un praticien en particulier.
                </p>
            </div>
            <div class="col test">
                <img class="img-fluid size-img-page" src="assets/img/medecin.jpg">
            </div>
            <div class="col test">
                <form action="index.php?uc=praticiens&action=afficherpraticien" method="post" class="formulaire-recherche">
                    <label class="titre-formulaire" for="listepraticien">Praticiens disponible :</label>
                    <select name="praticien" id="listechoix">
                        <option value="default">- Choisissez un praticien -</option>
                        <?php                               
                            foreach($result as $key){
                                echo '<option value="'.$key['PRA_NUM'].'">'.$key['PRA_NUM'].' - '.$key['PRA_NOM'].' '.$key['PRA_PRENOM'].'</option>';
                            }                                
                        ?>
                    </select>
                    <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations">
                </form>                   
            </div>
        </div>
    </div>
</section>