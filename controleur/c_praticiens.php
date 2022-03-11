<?php

if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])){
	$action="formulairepraticien";
}else{
	$action = $_REQUEST['action'];
}
unset($_SESSION['mesrapports']);
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

		if(isset($_REQUEST['praticien']) && is_numeric($_REQUEST['praticien']) && getAllInformationPraticien($_REQUEST['praticien'])){
			$pra=$_REQUEST['praticien'];
			$carac = getAllInformationPraticien($pra);
			if(empty($carac[7])){
				$carac[7]='Non défini(e)';
			}   
			include("vues/v_afficherpraticien.php");
		}else{
			$_SESSION['erreur'] = true;
			header("location: index.php?uc=praticiens&action=formulairepraticien");
		}
		break;

	}

	default :
	{
		
		header('Location: index.php?uc=praticiens&action=formulairepraticien');
		break;
		
	}
}
?>
