<?php
include("vues/v_header.php") ;
require_once("modele/bd.produits.inc.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

 
switch($uc)
{
	case 'accueil':
		{
            include("vues/v_accueil.html");
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
  case 'contacteznous' :
      {
          include("vues/v_contacteznous.html");
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

