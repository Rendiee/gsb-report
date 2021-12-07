<?php
if(isset($_POST['inscription'])){
    
    if(empty($_POST['username'])){
        $userEmpty="Veuillez saisir un identifiant !";
       
        
    }elseif(empty($_POST['matricule'])){
        $userEmpty="Veuillez saisir votre matricule !";
        

    }elseif(empty($_POST['password'])){
        $userEmpty="Veuillez saisir un mot de passe !";
        

    }else{
        if(checkMatricule($_POST['matricule'])){
        $arr = checkMatriculeInscription($_POST['matricule']);
        $user = checkUserInscription($_POST['username']);
        if(!empty($arr)){
            $userEmpty='Le matricule "'.$_POST['matricule'].'" est déjà associé à un compte !';
        }elseif(!empty($user)){
            $userEmpty='L\'identifiant choisi n\'est pas disponible !';
        }else{
            $ins = insertInscription($_POST['username'],$_POST['password'],$_POST['matricule']);
            $inscri="Inscription réussie !";
        }
        }else{
            $userEmpty= 'Le matricule "'.$_POST['matricule'].'" n\'existe pas !';
        }
    }
    
}
?>

<section class="bg-light py-5">
<div class="feature-work container my-4">
        <div class="row d-flex d-flex align-items-center">

        <div class="col-lg-5">
            <h1 class="feature-work-heading h2 py-3 semi-bold-600">Formulaire d'inscription</h1>
            <p class="feature-work-body text-muted light-300">Formulaire permettant de se connecter au site et d'accèder au données.</p>

        <a class="col" data-type="image" data-fslightbox="gallery" href="assets/img/login.png">
        <img class="img-fluid" src="assets/img/login.png">
        </a>
    </div>
    <div class="col-lg-5 offset-lg-1 align-left">
        <div class="wrapper" >
            <?php 
                if (isset($userEmpty)){echo '<p class="alert alert-danger">'.$userEmpty.'</p>';} 
                if (isset($inscri)){echo '<p class="alert alert-success">'.$inscri.'</p>';}
            ?>
            <form class="form-signin" action="index.php?uc=connexion&action=inscription" method="post">    

                <h2 class="form-signin-heading">Inscription</h2>

                <input type="text" class="form-control" name="username" placeholder="Identifiant" autofocus="" />
                <input type="text" class="form-control" name="matricule" placeholder="Matricule"/>
                <input type="password" class="form-control" name="password" placeholder="Mot de passe"/>      
                <input class="btn btn-lg btn-info btn-block text-light" type="submit" name="inscription" value="S'inscrire">
                <p><br/>Vous avez déjà un compte ?<br/><a href="index.php?uc=connexion&action=connexion">Se connecter</a></p>

            </form>
        </div>

    </div>
    </div>
</div>
</section>