<?php
// contrôleur tout pret pour l'exam
$action = $_REQUEST['action'];
switch ($action) {
	case 'proportion': {
			$prop = getProportionModeDeContact();
			$total = 0;
			foreach ($prop as $key) {
				$total += $key['nb'];
			}
			include('vues/v_formulaireTest1.php');
			break;
		}
	case 'ville': {
			if(isset($_POST['chercher'])){
				$prat = getPraticienFromVille($_POST['liste-ville']);
				//var_dump($_POST['liste-ville']);
				include('vues/v_praticienVille.php');
			}else{
				$ville = getAllVillePraticien();
				include('vues/v_formulaireTest2.php');
			}
			break;
		}
	case '': {
			
			break;
		}
	default: {
        // remplacer la valeur par défaut
        header("location: index.php?uc=accueil");
			break;
		}
}
