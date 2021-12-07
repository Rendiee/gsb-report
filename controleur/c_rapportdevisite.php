<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])){
	$action="redigerrapport";
}else{
	$action = $_REQUEST['action'];
}
switch($action)
{
	case 'redigerrapport':
	{
		    include("vues/v_formulairerapportdevisite.php");
		    break;
	    }
	case 'afficherrapport':
	{
            include("vues/v_afficherrapport.php");
		    break;
	    }
	default :
	{
		include("vues/v_rapportdevisite.php");
		break;
	}
}
?>