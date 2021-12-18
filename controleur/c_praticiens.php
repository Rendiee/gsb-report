<?php

if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])){
	$action="formulairepraticien";
}else{
	$action = $_REQUEST['action'];
}

switch($action)
{
	case 'formulairepraticien':
	{		
			$result = getAllMatriculePraticien();
		    include("vues/v_formulairepraticien.php");
		    break;
	    }
	case 'afficherpraticien':
	{	
		if(isset($_REQUEST['praticien'])){
			$pra=$_REQUEST['praticien'];
			$carac = getAllInformationPraticien($pra);
			include("vues/v_afficherpraticien.php");
		}else{
			header("location: index.php?uc=praticiens&action=formulairepraticien");
		}
		break;
	    }
	default :
	{
		include("vues/v_formulairepraticien.php");
		break;
	}
}
?>
