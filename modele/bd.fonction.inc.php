<?php

include_once 'bd.inc.php';

	function getAllMatriculePraticien(){

		try 
		{
        	$monPdo = connexionPDO();
			$req = 'SELECT PRA_NUM, PRA_PRENOM, PRA_NOM FROM praticien ORDER BY PRA_NUM';
			$res = $monPdo->query($req);
			$result = $res->fetchAll();

			return $result;
		} 

	catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}


	}

	function getAllNomMedicament(){

	try 
		{
        	$monPdo = connexionPDO();
			$req = 'SELECT MED_DEPOTLEGAL, MED_NOMCOMMERCIAL FROM medicament ORDER BY MED_NOMCOMMERCIAL';
			$res = $monPdo->query($req);
			$result = $res->fetchAll();

			return $result;
		} 

	catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}

	}

	function getAllInformationMedicament($nom){

		try 
		{
        	$monPdo = connexionPDO();
			$req = 'SELECT MED_DEPOTLEGAL, MED_NOMCOMMERCIAL, MED_COMPOSITION, MED_EFFETS, MED_CONTREINDIC FROM medicament WHERE MED_NOMCOMMERCIAL = "'.$nom.'"';
			$res = $monPdo->query($req);
			$result = $res->fetch();

			return $result;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function getAllInformationPraticien($mat){

		try 
		{
        	$monPdo = connexionPDO();
			$req = 'SELECT PRA_NUM, PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE, PRA_COEFNOTORIETE, PRA_COEFCONFIANCE FROM praticien WHERE PRA_NUM = '.$mat;
			$res = $monPdo->query($req);
			$result = $res->fetch();

			return $result;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function getAllInformationCompte($matricule){

		try 
		{
        	$monPdo = connexionPDO();
			$req = 'SELECT c.`COL_MATRICULE` as `matricule`,c.`COL_NOM` as `nom`,`COL_PRENOM` as `prenom`,c.`COL_ADRESSE` as `adresse`,c.`COL_CP` as `cp`,c.`COL_VILLE` as `ville`, concat(DAY(COL_DATEEMBAUCHE),\' - \',MONTH(`COL_DATEEMBAUCHE`),\' - \',YEAR(`COL_DATEEMBAUCHE`)) as `date_embauche`, h.HAB_LIB as `habilitation` ,s.SEC_LIBELLE as `secteur`, r.REG_NOM as `region` FROM collaborateur c LEFT JOIN secteur s ON s.`SEC_CODE`=c.`SEC_CODE` LEFT JOIN habilitation h ON h.HAB_ID=c.HAB_ID LEFT JOIN region r ON r.REG_CODE=c.REG_CODE WHERE c.COL_MATRICULE="'.$matricule.'"';
			$res = $monPdo->query($req);
			$result = $res->fetch();

			return $result;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function checkConnexion($username, $mdp){

		try 
		{
			$getInfo = connexionPDO();
			$req = $getInfo -> prepare('SELECT l.LOG_ID as \'id_log\', l.COL_MATRICULE as \'matricule\', c.HAB_ID as \'habilitation\' FROM login l INNER JOIN collaborateur c ON l.COL_MATRICULE = c.COL_MATRICULE WHERE l.LOG_LOGIN = :identifiant AND l.LOG_MOTDEPASSE = "'.hash('sha512', $mdp).'"');
			$req -> bindParam(':identifiant', $username, PDO::PARAM_STR);
			$req -> execute();
			$res = $req -> fetch();

			return $res;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}

	}

	function checkMatriculeInscription($matricule){

		try 
		{
			$getInfo = connexionPDO();
			$req = $getInfo -> prepare('select `COL_MATRICULE` as \'matricule\' from login where `COL_MATRICULE`=:matricule');
			$req -> bindParam(':matricule', $matricule, PDO::PARAM_STR);
			$req -> execute();
			$res = $req -> fetch();

			return $res;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}

	}
	function checkMatricule($matricule){

		try 
		{
			$getInfo = connexionPDO();
			$req = $getInfo -> prepare('select `COL_MATRICULE` as \'matricule\' from collaborateur where `COL_MATRICULE`=:matricule');
			$req -> bindParam(':matricule', $matricule, PDO::PARAM_STR);
			$req -> execute();
			$res = $req -> fetch();

			return $res;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}

	}
	function checkUserInscription($username){

		try 
		{
			$getInfo = connexionPDO();
			$req = $getInfo -> prepare('SELECT `LOG_LOGIN` from login where `LOG_LOGIN`=:username');
			$req -> bindParam(':username', $username, PDO::PARAM_STR);
			$req -> execute();
			$res = $req -> fetch();

			return $res;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}

	}

	function getAllMatriculeCollaborateur(){

		try 
		{	

			$monPdo = connexionPDO();
			$req = 'SELECT COL_MATRICULE FROM collaborateur ORDER BY COL_MATRICULE';
			$res = $monPdo->query($req);
			$result = $res->fetchAll();

			return $result;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function getMotif(){

		try 
		{	

			$monPdo = connexionPDO();
			$req = 'SELECT MOT_ID, MOT_LIBELLE FROM motif_principale';
			$res = $monPdo->query($req);
			$result = $res->fetchAll();

			return $result;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function getNonValide(){

		try 
		{	

			$monPdo = connexionPDO();
			$req = 'SELECT COUNT(`RAP_SAISITDEFINITIVE`) FROM `rapport_visite` WHERE `RAP_SAISITDEFINITIVE`=0';
			$res = $monPdo->query($req);
			$result = $res->fetch();

			return $result;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function getAllInformationNonValide(){

		try 
		{	

			$monPdo = connexionPDO();
			$req = 'SELECT * FROM `rapport_visite` WHERE `RAP_SAISITDEFINITIVE`=0';
			$res = $monPdo->query($req);
			$result = $res->fetchAll();

			return $result;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function getInformationNonValide($num){

		try 
		{	
			$monPdo = connexionPDO();
			$req = $monPdo -> prepare('SELECT * FROM `rapport_visite` WHERE `RAP_NUM`=:num');
			$req -> bindParam(':num', $num, PDO::PARAM_INT);
			$req -> execute();
			$res = $req -> fetch();

			return $res;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function getNomMotif($num){

		try 
		{	
			$monPdo = connexionPDO();
			$req = $monPdo -> prepare('SELECT `MOT_ID`,`MOT_LIBELLE` FROM `motif_principale` where MOT_ID = :num');
			$req -> bindParam(':num', $num, PDO::PARAM_INT);
			$req -> execute();
			$res = $req -> fetch();

			return $res;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}
	}

	function getMaxIdRapportVisite(){
		
		try 
		{	
			$monPdo = connexionPDO();
			$req = $monPdo -> prepare('SELECT MAX(RAP_NUM) as \'max_id\' FROM rapport_visite');
			$req -> execute();
			$res = $req -> fetch();

			return $res;
		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}

	}

	function insertRapportVisite($colMatricule, $dateVisite, $bilan, $dateSaisit, $saisitDef, $motifAutre, $med1, $med2, $praNum, $motifId, $praNumRemplacant){

		try 
		{	
			$getId = getMaxIdRapportVisite();
			$num = 0;
			if($getId == null){
				$num = 1;
			}else{
				$num = $getId['max_id'] + 1;
			}


			$monPdo = connexionPDO();
			$req = $monPdo -> prepare('INSERT INTO rapport_visite VALUES (:colMat, :rapNum, :rapDateVisite, :rapBilan, :rapDateSaisit, :rapSaisitDefinitive, :rapMotifAutre, :medoc1, :medoc2, :praNum, :motId, :praNumRemplacant)');
			$req -> bindParam(':colMat', $colMatricule, PDO::PARAM_STR);
			$req -> bindParam(':rapNum', $num, PDO::PARAM_INT);
			$req -> bindParam(':rapDateVisite', $dateVisite, PDO::PARAM_STR);
			$req -> bindParam(':rapBilan', $bilan, PDO::PARAM_STR);
			$req -> bindParam(':rapDateSaisit', $dateSaisit, PDO::PARAM_STR);
			$req -> bindParam(':rapSaisitDefinitive', $saisitDef, PDO::PARAM_BOOL);
			$req -> bindParam(':rapMotifAutre', $motifAutre, PDO::PARAM_STR);
			$req -> bindParam(':medoc1', $med1, PDO::PARAM_STR);
			$req -> bindParam(':medoc2', $med2, PDO::PARAM_STR);
			$req -> bindParam(':praNum', $praNum, PDO::PARAM_INT);
			$req -> bindParam(':motId', $motifId, PDO::PARAM_INT);
			$req -> bindParam(':praNumRemplacant', $praNumRemplacant, PDO::PARAM_INT);

			$req->execute();
			//$req->debugDumpParams();

		} 

		catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}

	}

?>