<?php
require_once("modele/bd.fonction.inc.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else{
	$uc = $_REQUEST['uc'];
}

include("vues/v_header.php");

switch($uc)
{
	case 'accueil':
		{
            include("vues/v_accueil.php");
            break;
        }
	case 'medicaments' :
		{
            include("controleur/c_medicaments.php");
            break;
        }
	case 'praticiens' :
		{
            include("controleur/c_praticiens.php");
            break;
        }
	case 'rapportdevisite' :
	  {
          include("controleur/c_rapportdevisite.php");
          break; 
      }
  case 'connexion' :
      {
          include("controleur/c_connexion.php");
          break; 
      }
}
include("vues/v_footer.html") ;
?>

