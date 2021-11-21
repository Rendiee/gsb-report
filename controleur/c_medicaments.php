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
            include("vues/v_affichermedoc.php");
		    break;
	    }
}
?>
