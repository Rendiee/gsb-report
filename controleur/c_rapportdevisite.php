<?php

if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])){
	$action="rapport";
}else{
	$action = $_REQUEST['action'];
}
if(isset($_REQUEST['rapport'])){
	$action = $_REQUEST['rapport'];
}
if(isset($_REQUEST['mesrapports'])){
	$action = 'mesrapports';
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
			
			insertRapportVisite($_POST['datevisite'],$_POST['bilanrapport'],$_POST['datesaisit'],$def,null,$_POST['medicamentproposer'],null,$_POST['praticien'],$_POST['motif'],null);

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
				$getId = getMaxIdRapportVisite($_SESSION['matricule']);
				if($getId == null){
					$num = 1;
				}else{
					$num = $getId['max_id'] + 1;
				}
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
            
			if(isset($_SESSION['habilitation']) && $_SESSION['habilitation']==2){
				
				if(!empty($_REQUEST['nouveauxRapports'])){
					include("vues/v_nouveauxRapports.php");
				}elseif(!empty($_REQUEST['historiqueRapports'])){
					include("vues/v_historiqueRapports.php");
				}
				else{
					include("vues/v_rapportregion.php");
				}
			}else{
				header("location: index.php?uc=rapportdevisite&action=rapport");
			}
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