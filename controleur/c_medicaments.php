<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])){
	$action="formulairemedoc";
}else{
	$action = $_REQUEST['action'];
}

switch($action)
{
	case 'formulairemedoc':
	{
			$result = getAllNomMedicament();
		    include("vues/v_formulairemedoc.php");
		    break;
	    }
	case 'affichermedoc':
	{		
			if(isset($_REQUEST['medicament'])){
				$med=$_REQUEST['medicament'];
				if ($med!='default'){
				$carac = getAllInformationMedicament($med);
				include("vues/v_affichermedoc.php");
				}
				else{
					include("vues/v_formulairemedoc.php");
				}
			}
			else{
				header("location: index.php?uc=medicaments&action=formulairemedoc");
			}
		    break;
	}
	default :
	{
		header("location: index.php?uc=medicaments&action=formulairemedoc");
        break;
	}
}
?>
