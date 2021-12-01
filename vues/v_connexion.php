<!-- Start Feature Work -->
<section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                
            <div class="col-lg-5">
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de connexion</h1>
                    <p class="feature-work-body text-muted light-300">
                        Formulaire permettant de se connecter au site
                        et d'accèder au données.
                    </p>
                    <a class="col" data-type="image" data-fslightbox="gallery" href="assets/img/login.png">
                        <img class="img-fluid" src="assets/img/login.png">
                    </a>
                </div>

                <div class="col-lg-5 offset-lg-1 align-left">
                    <div class="wrapper">
                        <form class="form-signin" action="" method="post">       
                            <h2 class="form-signin-heading">Se connecter</h2>
                            <input type="text" class="form-control" name="username" placeholder="Identifiant" required="" autofocus="" />
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required=""/>      
                            <input class="btn btn-lg btn-info btn-block text-light" type="submit" name="connexion" value="Connexion">
                            <!-- <label>Pas de compte ? <a href="index.php?uc=connexion&action=inscription">Inscrivez-vous</a></label> -->

                            <?php

                           // insertLogin();
                            
                                if(isset($_POST['connexion'])){

                                    if(empty($_POST['username']) || empty($_POST['password'])){

                                        echo '<p class="alert alert-danger">Des champs obligatoires sont vides !</p>';

                                }else{

                                    $getInfo = connexionPDO();
                                    $req = $getInfo -> prepare('SELECT l.LOG_ID, l.COL_MATRICULE, c.HAB_ID FROM login l INNER JOIN collaborateur c ON l.COL_MATRICULE = c.COL_MATRICULE WHERE l.LOG_LOGIN = :identifiant AND l.LOG_MOTDEPASSE = "'.password_hash($_POST['username'], PASSWORD_DEFAULT).'"');
                                    $req -> bindParam(':identifiant', $_POST['username'], PDO::PARAM_STR);
                                    $req -> execute();
                                    $res = $req -> fetch();

                                    echo $_POST['username'];
                                    echo mhash(MHASH_SHA256, utf8_encode($_POST['username']));

                                    var_dump($res);
                                    //TODO : Changer la requete pour vérifier avec le mot de passe directement 

                                    if($res != false){

                                            $getHab = connexionPDO();
                                            $res2 = $getHab -> prepare('SELECT HAB_ID FROM collaborateur WHERE COL_MATRICULE = '.$res['COL_MATRICULE']);
                                            
                                            $_SESSION['habilitation'] = $res2['HAB_ID'];
                                            $_SESSION['login'] = $_POST['username'];

                                            header('Location: index.php?uc=connexion&action=profil');

                                    }else{
                                        echo '<p class="alert alert-danger">Information incorrecte !</p>';
                                    }

                                }

                            }
                            
                            ?>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
 <!-- End Feature Work -->  