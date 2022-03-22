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
if(!isset($_POST['valider'])){//sert à eviter le renvoie du formulaire si on F5 (évite d'inserer un rapport à l'infini)
	unset($_SESSION['stop']);
}
switch($action)
{
	case 'redigerrapport':
	{		
		unset($_SESSION['mesrapports']);
		unset($_SESSION['praticienMonRapport']);
		if(isset($_POST['valider']) && !isset($_SESSION['stop'])){
			if(isset($_POST['saisitdefinitive'])){
				$def = 1;
			}else{
				$def = 0;
			}
			if(empty($_POST['praticien']) || empty($_POST['datevisite']) || empty($_POST['bilanrapport']) || empty($_POST['datesaisit']) || empty($_POST['motif'])){
				$vide = true;
			}
			if(!getDepotMedoc($_POST['medicamentproposer1'])){
				$_POST['medicamentproposer1']=NULL;
			}
			if(getNomMotif($_POST['motif'])){
				if(!isset($vide) && insertRapportVisite($_POST['datevisite'],$_POST['bilanrapport'],$_POST['datesaisit'],$def,null,$_POST['medicamentproposer1'],null,$_POST['praticien'],$_POST['motif'],null)){
					$succes = '<p class="alert alert-success w-100 text-center">Rapport saisit avec succès</p>';
				}else{
					$succes = '<p class="alert alert-danger w-100 text-center">Un problème est survenu lors de la validation du rapport</p>';
				}
			}else{
				$succes = '<p class="alert alert-danger w-100 text-center">Un problème est survenu lors de la validation du rapport</p>';
			}			
			unset($_POST['valider']);//sert à eviter le renvoie du formulaire si on F5 (et évite d'inserer un rapport à l'infini)
			$_SESSION['stop']=true;
		}

		if(!empty(getAllInformationNonValide($_SESSION['matricule'])) && !isset($_REQUEST['nouveau'])){
			$info = getAllInformationNonValide($_SESSION['matricule']);
			include("vues/v_listeRapportsNonValide.php");
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
			include("vues/v_redigerRapport.php");
		}
		break;

	}

	case 'rapportNonValide':
	{	
		unset($_SESSION['mesrapports']);
		unset($_SESSION['praticienMonRapport']);
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
				include("vues/v_ModifierRapportNonValide.php");
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
		unset($_SESSION['mesrapports']);
		unset($_SESSION['praticienMonRapport']);
		if(isset($_SESSION['habilitation']) && $_SESSION['habilitation']==2){	
			
			$regCode = getRegionCodeConnected($_SESSION['matricule']);
			$visiteurRegion = getVisiteurRegion($regCode['REG_CODE']);

			if(isset($_POST['rapportregion'])){
				$dateDeb=$_POST['datedebut'];
				$dateFi=$_POST['datefin'];
				$dateDebut=new DateTime($dateDeb);
				$dateFin=new DateTime($dateFi);

				$rapportRegion = getRapportParRegion($regCode['REG_CODE'], $_POST['datedebut'], $_POST['datefin']);
				include("vues/v_rapportRegion.php");
			}else{
				include("vues/v_formulaireRapportRegion.php");
			}
		}else{
			header("location: index.php?uc=accueil");
		}
		break;

	}

	case 'mesrapports':
	{	
		if(isset($_POST['praticienMonRapport']) && is_numeric($_POST['praticienMonRapport']) && getAllInformationPraticien($_POST['praticienMonRapport'])){
			$pra=$_POST['praticienMonRapport'];
			$carac = getAllInformationPraticien($pra);
			if(empty($carac[7])){
				$carac[7]='Non défini(e)';
			}
			include("vues/v_afficherPraticienMonRapport.php");
		}elseif(isset($_POST['medocMonRapport']) && getAllInformationMedicamentNom($_POST['medocMonRapport'])){
			$med=$_POST['medocMonRapport'];
			$carac = getAllInformationMedicamentNom($med);
			if(empty($carac[7])){
				$carac[7]='Non défini(e)';
			}   
			include("vues/v_afficherMedicamentMonRapport.php");	
		}else{
			if(isset($_POST['retourFormulaireMesRapports'])){
				unset($_SESSION['mesrapports']);
			}
			if(isset($_POST['retourListeMesRapports'])){
				unset($_SESSION['praticienMonRapport']);
			}
			if(isset($_SESSION['praticienMonRapport']) || isset($_POST['voirRapport'])){
				if(isset($_POST['voirRapport'])){
					$_SESSION['praticienMonRapport'] = $_POST;
				}
				$_POST = $_SESSION['praticienMonRapport'];
				$infoRapport=getInformationsMesRapports($_POST['RAP_NUM']);
				if($infoRapport['RAP_MOTIFAUTRE']==NULL){
					$motif=$infoRapport['MOT_LIBELLE'];
				}else{
					$motif=$infoRapport['RAP_MOTIFAUTRE'];
				}

				if($infoRapport['RAP_SAISITDEFINITIVE']){
					$definitif = 'Oui';
				}else{
					$definitif = 'Non';
				}
				if($infoRapport['MED_DEPOTLEGAL_1'] == NULL){
					$medoc = 'Aucun';
				}elseif($infoRapport['MED_DEPOTLEGAL_2'] == NULL){
					$medoc1 = getDepotMedoc($infoRapport['MED_DEPOTLEGAL_1']);
				}else{
					$medoc1 = getDepotMedoc($infoRapport['MED_DEPOTLEGAL_1']);
					$medoc2 = getDepotMedoc($infoRapport['MED_DEPOTLEGAL_2']);
				}
				include("vues/v_afficherMonRapport.php");
			}elseif(isset($_SESSION['mesrapports']) || isset($_POST['mesrapports'])){
				if(isset($_POST['mesrapports'])){
					$_SESSION['mesrapports'] = $_POST;
				}
				$_POST = $_SESSION['mesrapports'];
				$dated=date_create($_POST['datedebut']);
				$datef=date_create($_POST['datefin']);
				$dateDeb=$_POST['datedebut'];
				$dateFi=$_POST['datefin'];
				if(!empty($_POST['praticien'])){
					if(is_numeric($_POST['praticien']) && getPraticiExistant(intval($_POST['praticien']))){
						$pra=true;
					}else{
						$pra=false;
					}
				}else{
					$pra=false;
				}
				if(isset($_POST['praticien']) && $dated<=$datef){
					$infoMesRapports = getRapportVisiteCollaborateur($_SESSION['matricule'], $_POST['datedebut'], $_POST['datefin'], $_POST['praticien'], $pra);
					if(empty($infoMesRapports)){
						$_SESSION['aucunRap']=true;
						unset($_SESSION['mesrapports']);
						$prat = getAllInformationPraticienVisite($_SESSION['matricule']);
						header("location: index.php?uc=rapportdevisite&action=mesrapports");
					}else{
						$dateDebut=new DateTime($dateDeb);
						$dateFin=new DateTime($dateFi);
						include("vues/v_listeMesRapports.php");
					}
				}else{
					$prat = getAllInformationPraticienVisite($_SESSION['matricule']);
					unset($_SESSION['mesrapports']);
					if($dated>$datef){
						$_SESSION['fourchetteRap']=true;
					}else{
						$_SESSION['pratRap']=true;
					}
					header("location: index.php?uc=rapportdevisite&action=mesrapports");
				}
			}else{
				if(getAllInformationPraticienVisite($_SESSION['matricule'])){
					$prat = getAllInformationPraticienVisite($_SESSION['matricule']);
					include("vues/v_formulaireMesRapports.php");
				}else{
					$succes='Vous n\'avez aucun rapport de visite à votre nom.';
					include("vues/v_problemeSurvenu.php");
				}
			}
		}
		break;
	}
	
	default :
	{
		header("location: index.php?uc=accueil");
		break;

	}
}
?>