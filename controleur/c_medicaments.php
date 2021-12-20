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
			if(isset($_REQUEST['medicament']) && getAllInformationMedicament($_REQUEST['medicament'])){
				$med=$_REQUEST['medicament'];
				$carac = getAllInformationMedicament($med);
				include("vues/v_affichermedoc.php");				
			}
			else{
				header("location: index.php?uc=medicaments&action=formulairemedoc");
			}
		    break;
	}
	default :
	{
		include("vues/v_formulairemedoc.php");
        break;
	}
}
?>
