<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])){
	$action="connexion";
}else{
	$action = $_REQUEST['action'];
}
if (!isset($_SESSION['matricule'])){
	$action="connexion";
}
switch($action)
{
	case 'connexion':
	{
		if(isset($_SESSION['login'])){
    
			header('Location: index.php?uc=connexion&action=profil');
			
		}else{
		    include("vues/v_connexion.php");
		}    
		break;
	    }
	case 'deconnexion':
	{
			session_destroy();
			header('Location: index.php?uc=accueil');
			break;
		}
	case 'inscription':
	{
            include("vues/v_inscription.php");
		    break;
	    }
	case 'profil':
		{	
			$info=getAllInformationCompte($_SESSION['matricule']);
			include("vues/v_profil.php");
			break;
		}
	default :
	{
		header('location: index.php?uc=connexion&action=connexion');
		break;
	}
}
?>
