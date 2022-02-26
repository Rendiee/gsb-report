<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Rapport de visite</h1>
            <p class="text text-center">
                Formulaire permettant d'afficher toutes les rapports de visite de votre région.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid" src="assets/img/rapport.jpg">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <div class="row">
                    <form class="formulaire-recherche col-12 m-0" action="index.php?uc=rapportdevisite&action=rapportregion" method="post">
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
                    <form class="formulaire-recherche col-12 m-0" action="index.php?uc=rapportdevisite&action=rapportregion" method="post">
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