<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'connexion':
	{
		    include("vues/v_connexion.php");
		    break;
	    }
	case 'deconnexion':
	{
			//TODO : Session destroy et redirection
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
			include("vues/v_profil.php");
			break;
		}
}
?>
