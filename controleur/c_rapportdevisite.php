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
	{		

		if(isset($_POST['valider'])){

			if(isset($_POST['saisitdefinitive'])){
				$def = 1;
			}else{
				$def = 0;
			}
			if(empty($_POST['datevisite'])){
				$_POST['datevisite']=NULL;
			}
			if($_POST['medicamentproposer']=='default'){
				$_POST['medicamentproposer']=NULL;
			}
			
			insertRapportVisite($_POST['datevisite'],
			$_POST['bilanrapport'],
			$_POST['datesaisit'],
			$def,
			null,
			$_POST['medicamentproposer'],
			null,
			$_POST['praticien'],
			$_POST['motif'],
			null);

			$succes = '<p class="alert alert-success">Rapport saisit avec succès !</p>';

		}

		if(!empty(getAllInformationNonValide($_SESSION['matricule'])) && !isset($_REQUEST['nouveau'])){
				$info = getAllInformationNonValide($_SESSION['matricule']);
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
				$nonValide = getInformationNonValide($rap);
				$nomPraticien = getAllInformationPraticien($nonValide[9]);
				$nomMotif = getNomMotif($nonValide[10]);
				$result = getAllMatriculeCollaborateur();
				$motif = getMotif();
				$medoc = getAllNomMedicament();
				$prat = getAllMatriculePraticien();
				include("vues/v_rapportnonvalide.php");
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
	case 'mesrapports':
		{
			include("vues/v_mesrapports.php");
			break;
	}
	default :
	{
		include("vues/v_formulairerapportdevisite.php");
		break;
	}
}
?>