<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'formulairemedoc':
	{
		    include("vues/v_formulairemedoc.php");
		    break;
	    }
	case 'affichermedoc':
	{	
			$med=$_REQUEST['medicament'];
			if ($med!='default'){
			$carac = getAllInformationMedicament($med);
            include("vues/v_affichermedoc.php");
			}
			else{
				include("vues/v_formulairemedoc.php");
			}
		    break;
	    }
}
?>
