<section class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col test align-items-start">
                <h1 class="titre">Rapport de visite</h1>
                <p class="feature-work-body text-muted light-300">
                    Formulaire permettant d'afficher toutes les rapports de visite de votre région
                </p>
                <img class="img-fluid" src="assets/img/rapport.jpg">
            </div>
            <div class="col test">
                <div class="row">
                    <form class="form-signin formulaire-recherche" action="index.php?uc=rapportdevisite&action=rapportregion" method="post">
                        <label for="name">Nouveaux rapports :</label>
                        <select required  name="nouveauxRapports" id="listechoix">
                            <option class="form-control" value>- Nouveaux rapports -</option>
                        </select>
                        <br/>
                        <input class="btn btn-info text-light valider m-0" type="submit" value="Afficher les informations">
                    </form>
                </div>
                <br/>
                <div class="row">
                    <form class="form-signin formulaire-recherche" action="index.php?uc=rapportdevisite&action=rapportregion" method="post">
                        <label for="name">Anciens rapports :</label>
                        <select required  name="historiqueRapports" id="listechoix">
                            <option class="form-control" value>- Anciens rapports -</option>
                        </select>
                        <br/>
                        <input class="btn btn-info text-light valider m-0" type="submit" value="Afficher les informations">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>