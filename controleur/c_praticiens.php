<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'formulairepraticien':
	{
		    include("vues/v_formulairepraticien.php");
		    break;
	    }
	case 'afficherpraticien':
	{
		$pra=$_REQUEST['praticien'];
		$carac = getAllInformationPraticien($pra);
		include("vues/v_afficherpraticien.php");
		break;
	    }
}
?>
