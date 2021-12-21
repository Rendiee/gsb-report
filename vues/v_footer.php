<div id="foot">
    <footer class="pt-4">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.php?uc=accueil">
                        <span class="text-light h5"><u>Projet GSB</u></span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Projet de BTS SIO 2ème année : Rédaction et suivi de rapport de visite sous forme d'un site Web pour l'entreprise GSB avec base de donnée.
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Information</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.php?uc=accueil">Accueil</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="index.php?uc=medicaments&action=formulairemedoc">Médicaments</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="index.php?uc=praticiens&action=formulairepraticien">Praticiens</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="index.php?uc=rapportdevisite&action=rapport">Rapport de visite</a>
                        </li>
                        <?php
                            if(isset($_SESSION['login'])){
                                echo 
                                '<li class="pb-2">
                                    <i class="bx-fw bx bxs-chevron-right bx-xs"></i></i><a class="text-decoration-none text-light py-1" href="index.php?uc=connexion&action=profil">Profil</a>
                                </li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-100 footercustom py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Randy Durelle | Tristan Da Silva.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/fslightbox.js"></script>
<script> fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true; </script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/isotope.pkgd.js"></script>

<script>
    $(window).load(function() {

        var $projects = $('.projects').isotope({
            itemSelector: '.project',
            layoutMode: 'fitRows'
        });
        $(".filter-btn").click(function() {
            var data_filter = $(this).attr("data-filter");
            $projects.isotope({
                filter: data_filter
            });
            $(".filter-btn").removeClass("active");
            $(".filter-btn").removeClass("shadow");
            $(this).addClass("active");
            $(this).addClass("shadow");
            return false;
        });
    });
</script>

<script src="assets/js/gsb.js"></script>
<script src="assets/js/custom.js"></script>