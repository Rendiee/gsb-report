<?php

require_once ('modele/medicament.modele.inc.php');
require_once ('modele/praticien.modele.inc.php');
require_once ('modele/rapportvisite.modele.inc.php');
require_once ('modele/connexion.modele.inc.php');

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
            if(!empty($_SESSION['login'])){
                include("controleur/c_medicaments.php");
            }else{
                include("vues/v_interdit.php");
            }
            break;
        }
	case 'praticiens' :
		{   
            if(!empty($_SESSION['login'])){
                include("controleur/c_praticiens.php");
            }else{
                include("vues/v_interdit.php");
            }
            break;
        }
	case 'rapportdevisite' :
	  { 
        if(!empty($_SESSION['login'])){
          include("controleur/c_rapportdevisite.php");
        }else{
            include("vues/v_interdit.php");
        }
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
<?php include("vues/v_footer.php") ;?>
</body>


