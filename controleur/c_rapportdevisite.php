<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])){
	$action="redigerrapport";
}else{
	$action = $_REQUEST['action'];
}

if(isset($_REQUEST['rapport'])){
	$cr = $_REQUEST['rapport'];
}else{
	$cr = '';
}


switch($cr)
{

	case 'redigerrapport':
	{
		    include("vues/v_redigerrapport.php");
		    break;
	    }
	case 'rapportregion':
	{
            include("vues/v_rapportregion.php");
		    break;
	    }
	case 'rapportsecteur':
		{
			include("vues/v_rapportsecteur.php");
			break;
	}
	default :
	{
		include("vues/v_formulairerapportdevisite.php");
		break;
	}
}
?>