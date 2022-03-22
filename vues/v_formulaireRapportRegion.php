<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Rapport de ma région</h1>
            <p class="text text-center">
                Formulaire permettant d'afficher les rapports de visite de ma région d'une période donnée
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid" src="assets/img/carte-region.png">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <div class="row mw-100">
                    <?php if (isset($succes)){echo $succes;} ?>
                    <form class="formulaire col-12 m-0" action="index.php?uc=rapportdevisite&action=rapportregion" method="post">
                        <p style="color:grey;margin-top:-10px"><span style="color:red">*</span>Champs obligatoires</p>

                        <label for="datesaisit">Date de début : </span></label>
                        <input class="m-0 form-control py-0 d-inline w-50 text-rapport" type="date" required name="datedebut"><span style="color:red"> *</span><br/><br/>
                        
                        <label for="datesaisit">Date de fin : </label>
                        <input class="m-0 form-control py-0 d-inline w-50 text-rapport" type="date" required name="datefin"><span style="color:red"> *</span><br/><br/>

                        <label for="praticien">Visiteur de la région</label>
                        <select name="praticien" class="form-select">
                            <option value>- Choisissez un visiteur - (facultatif)</option>
                            <?php
                                foreach($visiteurRegion as $key){
                                    echo '<option value="'.$key['COL_MATRICULE'].'">'.$key['COL_MATRICULE'].' - '.$key['COL_NOM'].' '.$key['COL_PRENOM'].'</option>';
                                }                                
                            ?>
                        </select>
                        
                        <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations" name="rapportregion">
                    </form>                
                </div>
            </div>
        </div>
    </div>
</section>