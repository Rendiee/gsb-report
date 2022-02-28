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
if(!isset($_POST['valider'])){//sert à eviter le renvoie du formulaire si on F5 (wévite d'inserer un rapport a l'infini)
	unset($_SESSION['stop']);
}
switch($action)
{
	case 'redigerrapport':
	{		
		
		if(isset($_POST['valider']) && !isset($_SESSION['stop'])){			
			if(isset($_POST['saisitdefinitive'])){
				$def = 1;
			}else{
				$def = 0;
			}
			if(empty($_POST['datevisite'])){
				$_POST['datevisite']=NULL;
			}
			if(!getDepotMedoc($_POST['medicamentproposer'])){
				$_POST['medicamentproposer']=NULL;
			}
			if(getNomMotif($_POST['motif'])){
				if(insertRapportVisite($_POST['datevisite'],$_POST['bilanrapport'],$_POST['datesaisit'],$def,null,$_POST['medicamentproposer'],null,$_POST['praticien'],$_POST['motif'],null)){
					$succes = '<p class="alert alert-success">Rapport saisit avec succès</p>';
				}else{
					$succes = '<p class="alert alert-danger">Un problème est survenu lors de la validation du rapport</p>';
				}
			}else{
				$succes = '<p class="alert alert-danger">Un problème est survenu lors de la validation du rapport</p>';
			}			
			unset($_POST['valider']);//sert à eviter le renvoie du formulaire si on F5 (et évite d'inserer un rapport a l'infini)
			$_SESSION['stop']=true;
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
			if(!empty(nonValideExistant($rap))){
				$nonValide = getInformationNonValide($rap);
				$nomPraticien = getAllInformationPraticien($nonValide[9]);
				$nomMotif = getNomMotif($nonValide[10]);
				$result = getAllMatriculeCollaborateur();
				$motif = getMotif();
				$medoc = getAllNomMedicament();
				$prat = getAllMatriculePraticien();
				include("vues/v_rapportnonvalide.php");
			}else{
				$_SESSION['erreur']=true;
				header("location: index.php?uc=rapportdevisite&action=redigerrapport");
			}
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
			header("location: index.php?uc=accueil");
		}
		break;

	}

	case 'mesrapports':
	{	
		if(isset($_POST['mesrapports'])){
			$dated=date_create($_POST['datedebut']);
			$datef=date_create($_POST['datefin']);
			if(!empty($_POST['praticien']) ){
				if(is_numeric($_POST['praticien']) && getPraticiExistant(intval($_POST['praticien']))){
					$pra=true;
				}else{
					$pra=false;
				}
			}else{
				$pra=true;
			}
			if($dated<=$datef && $pra){
				include("vues/v_affichermesrapports.php");
			}else{
				$prat = getAllInformationPraticienVisite($_SESSION['matricule']);
				if($dated>$datef){
					$succes='<p class="alert alert-danger" style="text-align:center">La fourchette selectionnée est incorrecte.</p>';					
					include("vues/v_mesrapports.php");
				}else{
					$succes='<p class="alert alert-danger" style="text-align:center">Un problème est survenu lors da selection d\'un praticien.</p>';
					include("vues/v_mesrapports.php");
				}
			}
		}else{
			if(getAllInformationPraticienVisite($_SESSION['matricule'])){
				$prat = getAllInformationPraticienVisite($_SESSION['matricule']);
				include("vues/v_mesrapports.php");
			}else{
				$succes='<p class="alert alert-danger" style="text-align:center">Vous n\'avez aucun rapport de visite à votre nom.</p>';
				include("vues/v_aucunrapport.php");
			}
		}
		break;
	}
	
	default :
	{

		include("vues/v_formulairerapportdevisite.php");
		break;

	}
}
?>