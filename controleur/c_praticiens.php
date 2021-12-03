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
		if ($pra!='default')
		{
			$carac = getAllInformationPraticien($pra);
		include("vues/v_afficherpraticien.php");
		}
		else{
			include("vues/v_formulairepraticien.php");
		}
		break;
	    }
}
?>
