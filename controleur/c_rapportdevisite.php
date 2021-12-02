<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'redigerrapport':
	{
		    include("vues/v_rapportdevisite.php");
		    break;
	    }
	case 'afficherrapport':
	{
            include("vues/v_afficherrapport.php");
		    break;
	    }
}
?>