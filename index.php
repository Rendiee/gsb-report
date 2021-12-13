<?php
require_once("modele/bd.fonction.inc.php");

if(!isset($_REQUEST['uc']) || empty($_REQUEST['uc']))
     $uc = 'accueil';
else{
	$uc = $_REQUEST['uc'];
}
?>
<body>
    <div id="contenu">
<?php
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
      default :
      {
        include("vues/v_accueil.php");
        break;
      }
}

?>
</div>
<?php include("vues/v_footer.html") ;?>
</body>


