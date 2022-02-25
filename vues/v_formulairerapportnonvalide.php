<section class="bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col test align-items-start">
                <h1 class="titre">Formulaire de rapport non valide</h1>
                <p class="feature-work-body text-muted light-300">
                    Formulaire affichant tous les rapports non valide encore existant.
                </p>
                <img class="img-fluid" src="assets/img/rapport.jpg">
            </div>
            <div class="col test">
                <div class="row">
                    <?php if (isset($succes)){echo $succes;} ?>
                    <div class="formulaire-recherche">        
                        <form action="index.php?uc=rapportdevisite&action=rapportNonValide" method="post" class="form-signin d-flex flex-column align-items-center">
                            <label for="name">Liste des rapports non valide :</label>
                            <select required name="nonValide" id="listechoix">
                                <option class="form-control" value>- Choisissez un rapport non valide -</option>
                                <?php                                
                                    foreach($info as $key){
                                        echo '<option class="form-control" value="'.$key['RAP_NUM'].'">N°'.$key['RAP_NUM'].'</option>';
                                    }                                
                                ?>
                            </select>
                            <input class="btn btn-info text-light valider" type="submit" value="Modifier le rapport">
                        </form>
                        <form action="index.php?uc=rapportdevisite&action=redigerrapport" method="post" class="m-0">
                            <input class="btn btn-info text-light valider m-0" type="submit" value="Saisir un nouveau rapport" name="nouveau">
                        </form>
                    </div>
                 </div>                    
            </div>
        </div>
    </div>
</section>