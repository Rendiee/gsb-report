<?php

require ('modele/praticien.modele.inc.php');

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
			if ($pra!='default')
			{
				$carac = getAllInformationPraticien($pra);
			include("vues/v_afficherpraticien.php");
			}
			else{
				header("location: index.php?uc=praticiens&action=formulairepraticien");
			}
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
