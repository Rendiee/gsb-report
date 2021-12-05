
<?php

if(isset($_SESSION['login'])){
    
    header('Location: index.php?uc=connexion&action=profil');
    
}

if(isset($_POST['connexion'])){
    
    if(empty($_POST['username'])){
        $userEmpty="Veuillez saisir votre identifiant !";
       
        
    }elseif(empty($_POST['password'])){
        $userEmpty="Veuillez saisir votre mot de passe !";
        

    }else{
        
        $arr = checkConnexion($_POST['username'], $_POST['password']);
        
        if(empty($arr)){
            $userEmpty="Informations incorrecte !";
            
            
        }else{
            
            $_SESSION['habilitation'] = $arr['habilitation'];
            $_SESSION['login'] = $arr['id_log'];
            $_SESSION['matricule'] = $arr['matricule'];
            header('Location: index.php?uc=connexion&action=profil');
        }
        
    }
    
}

?>
<section class="bg-light py-5">
    <div class="feature-work container my-4">
        <div class="row d-flex d-flex align-items-center">

        <div class="col-lg-5">
            <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire de connexion</h1>
            <p class="feature-work-body text-muted light-300">Formulaire permettant de se connecter au site et d'accèder au données.</p>

        <a class="col" data-type="image" data-fslightbox="gallery" href="assets/img/login.png">
        <img class="img-fluid" src="assets/img/login.png">
        </a>
    </div>


    <div class="col-lg-5 offset-lg-1 align-left">
        <div class="wrapper">
            <?php if (isset($userEmpty)){echo '<p class="alert alert-danger">'.$userEmpty.'</p>';} ?>
            <form class="form-signin" action="index.php?uc=connexion&action=connexion" method="post">    

                <h2 class="form-signin-heading">Se connecter</h2>

                <input type="text" class="form-control" name="username" placeholder="Identifiant" autofocus="" />
                <input type="password" class="form-control" name="password" placeholder="Mot de passe"/>      
                <input class="btn btn-lg btn-info btn-block text-light" type="submit" name="connexion" value="Connexion">
                <p><br/>Vous n'avez pas encore de compte ?<br/><a href="index.php?uc=connexion&action=inscription">S'inscrire</a></p>

            </form>
        </div>

    </div>
</div>
</div>
</section>