<section class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col test align-items-start">
                <h1 class="titre">Rapport de ma région</h1>
                <p class="feature-work-body text-muted light-300">
                    Formulaire permettant d'afficher toutes les rapports de visite en fonction d'une date
                </p>
                <img class="img-fluid" src="assets/img/rapport.jpg">
            </div>
            <div class="col test">
                <div class="row">
                    <?php if (isset($succes)){echo $succes;} ?>
                    <form class="form-signin formulaire mx-2" action="index.php?uc=rapportdevisite&action=mesrapports" method="post">
                        <p style="color:grey;margin-top:-10px"><span style="color:red">*</span>Champs obligatoires</p>

                        <label for="datesaisit">Date de début : </span></label>
                        <input type="date" required name="datedebut"><span style="color:red"> *</span><br/><br/>
                        
                        <label for="datesaisit">Date de fin : </label>
                        <input type="date" required name="datefin"><span style="color:red"> *</span><br/><br/>

                        <label for="praticien">Praticien visité</label>
                        <select name="praticien" id="listemotif">
                            <option class="form-control" value>- Choisissez un praticien - (facultatif)</option>
                            <?php
                                foreach($prat as $key){
                                    echo '<option class="form-control" value="'.$key['num'].'">'.$key['num'].' - '.$key['nom'].' '.$key['prenom'].'</option>';
                                }                                
                            ?>
                        </select>
                        
                        <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations" name="mesrapports">
                    </form>                
                </div>
            </div>
        </div>
    </div>
</section>