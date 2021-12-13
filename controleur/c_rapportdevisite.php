<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])){
	$action="rapport";
}else{
	$action = $_REQUEST['action'];
}
if(isset($_REQUEST['rapport'])){
	$action = $_REQUEST['rapport'];
}
switch($action)
{
	case 'rapport' :
		{
			include("vues/v_formulairerapportdevisite.php");
			break;
		}
	case 'redigerrapport':
	{		if(getNonValide()>0 && !isset($_REQUEST['nouveau'])){
				$info = getInformationNonValide();
				include("vues/v_formulairerapportnonvalide.php");
			}else{
				$result = getAllMatriculeCollaborateur();
				$motif = getMotif();
				$medoc = getAllNomMedicament();
				$prat = getAllMatriculePraticien();
				include("vues/v_redigerrapport.php");
			}
		    break;
	    }
	case 'rapportNonValide':
	{		
		if(isset($_REQUEST['nonValide'])){
			$rap=$_REQUEST['nonValide'];
			if ($rap!='default'){
			include("vues/v_rapportnonvalide.php");
			}else{
				header("location: index.php?uc=rapportdevisite&action=redigerrapport");
			}
		}else{
			header("location: index.php?uc=rapportdevisite&action=redigerrapport");
		}
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