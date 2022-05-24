<?php

if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "rapport";
} else {
	$action = $_REQUEST['action'];
}
if (isset($_REQUEST['rapport'])) {
	$action = $_REQUEST['rapport'];
}
if (isset($_REQUEST['mesrapports'])) {
	$action = 'mesrapports';
}
switch ($action) {
	case 'redigerrapport': {
			unset($_SESSION['mesrapports']);
			unset($_SESSION['praticienMonRapport']);
			if (isset($_POST['valider'])) {
				if (isset($_POST['saisitdefinitive'])) {
					$def = 1;
				} else {
					$def = 0;
				}
				if (empty($_POST['praticien']) || empty($_POST['datevisite']) || empty($_POST['bilanrapport']) || empty($_POST['datesaisit']) || empty($_POST['listemotif'])) {
					$vide = true;
				}
				if (!getDepotMedoc($_POST['medicamentproposer1'])) {
					$_POST['medicamentproposer1'] = NULL;
				}
				if (!isset($_POST['medicamentproposer2'])) {
					$med2 = null;
				} elseif (!getDepotMedoc($_POST['medicamentproposer2'])) {
					$med2 = null;
				} else {
					$med2 = $_POST['medicamentproposer2'];
				}
				if (isset($_POST['motif-autre'])) {
					$motifAutre = $_POST['motif-autre'];
				} else {
					$motifAutre = null;
				}
				$_SESSION['countMsg'] = 0;
				if (getNomMotif($_POST['listemotif'])) {
					if (!isset($vide) && $_POST['datevisite'] <= $_POST['datesaisit'] && insertRapportVisite($_POST['datevisite'], $_POST['bilanrapport'], $_POST['datesaisit'], $def, $motifAutre, $_POST['medicamentproposer1'], $med2, $_POST['praticien'], $_POST['listemotif'], null)) {
						$_SESSION['msg'] = '<p class="alert alert-success text-center fit mx-auto">Rapport saisit avec succès</p>';
					} else {
						$_SESSION['msg'] = '<p class="alert alert-danger text-center fit mx-auto">Un problème est survenu lors de la validation du rapport</p>';
					}
				} else {
					$_SESSION['msg'] = '<p class="alert alert-danger text-center fit mx-auto">Un problème est survenu lors de la validation du rapport</p>';
				}
				header('location: index.php?uc=rapportdevisite&action=redigerrapport');
			}

			if (!empty(getAllInformationNonValide($_SESSION['matricule'])) && !isset($_REQUEST['nouveau'])) {
				$info = getAllInformationNonValide($_SESSION['matricule']);
				include("vues/v_listeRapportsNonValide.php");
			} else {
				$result = getAllMatriculeCollaborateur();
				$motif = getMotif();
				$medoc = getAllNomMedicament();
				$prat = getAllMatriculePraticien();
				$getId = getMaxIdRapportVisite($_SESSION['matricule']);
				if ($getId == null) {
					$num = 1;
				} else {
					$num = $getId['max_id'] + 1;
				}
				include("vues/v_redigerRapport.php");
			}
			break;
		}

	case 'rapportNonValide': {
			unset($_SESSION['mesrapports']);
			unset($_SESSION['praticienMonRapport']);
			if (isset($_REQUEST['nonValide'])) {
				$rap = $_REQUEST['nonValide'];
				if (!empty(nonValideExistant($rap))) {
					$nonValide = getInformationNonValide($rap);
					$nomPraticien = getAllInformationPraticien($nonValide[9]);
					$nomMotif = getNomMotif($nonValide[10]);
					$result = getAllMatriculeCollaborateur();
					$motif = getMotif();
					$medoc = getAllNomMedicament();
					$prat = getAllMatriculePraticien();
					include("vues/v_ModifierRapportNonValide.php");
				} else {
					$_SESSION['erreur'] = true;
					header("location: index.php?uc=rapportdevisite&action=redigerrapport");
				}
			} else {
				header("location: index.php?uc=rapportdevisite&action=redigerrapport");
			}
			break;
		}

	case 'rapportregion': {
			unset($_SESSION['mesrapports']);
			unset($_SESSION['praticienMonRapport']);
			if (isset($_SESSION['habilitation']) && $_SESSION['habilitation'] == 2) {

				$regCode = getRegionCodeConnected($_SESSION['matricule']);
				$visiteurRegion = getVisiteurRegion($regCode['REG_CODE']);

				if (isset($_POST['rapportregion'])) {
					$dateDeb = $_POST['datedebut'];
					$dateFi = $_POST['datefin'];
					$dateDebut = new DateTime($dateDeb);
					$dateFin = new DateTime($dateFi);

					$rapportRegion = getRapportParRegion($regCode['REG_CODE'], $_POST['datedebut'], $_POST['datefin']);
					include("vues/v_rapportRegion.php");
				} else {
					include("vues/v_formulaireRapportRegion.php");
				}
			} else {
				header("location: index.php?uc=accueil");
			}
			break;
		}

	case 'mesrapports': {
			if (isset($_POST['praticienMonRapport']) && is_numeric($_POST['praticienMonRapport']) && getAllInformationPraticien($_POST['praticienMonRapport'])) {
				$pra = $_POST['praticienMonRapport'];
				$carac = getAllInformationPraticien($pra);
				if (empty($carac[7])) {
					$carac[7] = 'Non défini(e)';
				}
				include("vues/v_afficherPraticienMonRapport.php");
			} elseif (isset($_POST['medocMonRapport']) && getAllInformationMedicamentNom($_POST['medocMonRapport'])) {
				$med = $_POST['medocMonRapport'];
				$carac = getAllInformationMedicamentNom($med);
				if (empty($carac[7])) {
					$carac[7] = 'Non défini(e)';
				}
				include("vues/v_afficherMedicamentMonRapport.php");
			} else {
				if (isset($_POST['retourFormulaireMesRapports'])) {
					unset($_SESSION['mesrapports']);
				}
				if (isset($_POST['retourListeMesRapports'])) {
					unset($_SESSION['praticienMonRapport']);
				}
				if (isset($_SESSION['praticienMonRapport']) || isset($_POST['voirRapport'])) {
					if (isset($_POST['voirRapport'])) {
						$_SESSION['praticienMonRapport'] = $_POST;
					}
					$_POST = $_SESSION['praticienMonRapport'];
					$infoRapport = getInformationsMesRapports($_POST['RAP_NUM']);
					var_dump($infoRapport);
					if ($infoRapport['RAP_MOTIFAUTRE'] == NULL) {
						$motif = $infoRapport['MOT_LIBELLE'];
					} else {
						$motif = 'Autre : ' . $infoRapport['RAP_MOTIFAUTRE'];
					}

					if ($infoRapport['RAP_SAISITDEFINITIVE']) {
						$definitif = 'Oui';
					} else {
						$definitif = 'Non';
					}
					if ($infoRapport['MED_DEPOTLEGAL_1'] == NULL) {
						$medoc = 'Aucun';
					} elseif ($infoRapport['MED_DEPOTLEGAL_2'] == NULL) {
						$medoc1 = getDepotMedoc($infoRapport['MED_DEPOTLEGAL_1']);
					} else {
						$medoc1 = getDepotMedoc($infoRapport['MED_DEPOTLEGAL_1']);
						$medoc2 = getDepotMedoc($infoRapport['MED_DEPOTLEGAL_2']);
					}
					include("vues/v_afficherMonRapport.php");
				} elseif (isset($_SESSION['mesrapports']) || isset($_POST['mesrapports'])) {
					if (isset($_POST['mesrapports'])) {
						$_SESSION['mesrapports'] = $_POST;
					}
					$_POST = $_SESSION['mesrapports'];

					if (empty($_POST['datedebut'])) {
						$dateDeb = "";
					} else {
						$dated = date_create($_POST['datedebut']); // CONVERTION DES VARIABLES STRING EN DATE POUR COMPARÉ LES DATES
						$dateDeb = $_POST['datedebut'];
					}
					if (empty($_POST['datefin'])) {
						$dateFin = "";
					} else {
						$datef = date_create($_POST['datefin']); // CONVERTION DES VARIABLES STRING EN DATE POUR COMPARÉ LES DATES
						$dateFin = $_POST['datefin'];
					}

					if (!empty($_POST['praticien'])) {
						if (is_numeric($_POST['praticien']) && getPraticiExistant(intval($_POST['praticien']))) {
							$pra = true;
						} else {
							$pra = false;
						}
					} else {
						$pra = false;
					}
					if (isset($_POST['praticien'])) {
						$infoMesRapports = getRapportVisiteCollaborateur($_SESSION['matricule'], $dateDeb, $dateFin, $_POST['praticien'], $pra);
						if (empty($infoMesRapports)) {
							$_SESSION['aucunRap'] = true;
							unset($_SESSION['mesrapports']);
							$prat = getAllInformationPraticienVisite($_SESSION['matricule']);
							header("location: index.php?uc=rapportdevisite&action=mesrapports");
						} else {
							include("vues/v_listeMesRapports.php");
						}
					} else {
						$prat = getAllInformationPraticienVisite($_SESSION['matricule']);
						unset($_SESSION['mesrapports']);
						if ($dated > $datef) {
							$_SESSION['fourchetteRap'] = true;
						} else {
							$_SESSION['pratRap'] = true;
						}
						header("location: index.php?uc=rapportdevisite&action=mesrapports");
					}
				} else {
					if (getAllInformationPraticienVisite($_SESSION['matricule'])) {
						$prat = getAllInformationPraticienVisite($_SESSION['matricule']);
						include("vues/v_formulaireMesRapports.php");
					} else {
						$succes = 'Vous n\'avez aucun rapport de visite à votre nom.';
						include("vues/v_problemeSurvenu.php");
					}
				}
			}
			break;
		}

	default: {
			header("location: index.php?uc=accueil");
			break;
		}
}
