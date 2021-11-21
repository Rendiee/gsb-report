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
            include("vues/v_afficherpraticien.php");
		    break;
	    }
}
?>
