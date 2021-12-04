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
			$req = 'SELECT PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE, PRA_COEFNOTORIETE, PRA_COEFCONFIANCE FROM praticien WHERE PRA_NUM = '.$mat;
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
			$req = 'SELECT c.COL_NOM, c.COL_NOM, c.COL_ADRESSE, c.COL_CP, c.COL_VILLE, c.COL_DATEEMBAUCHE, h.HAB_LIB, s.SEC_LIBELLE, r.REG_NOM FROM collaborateur c INNER JOIN habilitation h ON h.HAB_ID = c.HAB_ID INNER JOIN secteur s ON s.SEC_CODE = c.SEC_CODE INNER JOIN region r ON r.REG_CODE = c.REG_CODE WHERE c.COL_MATRICULE = "'.$matricule.'"';
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
	function insertInscription($username, $mdp, $matricule){

		try 
		{	
			$hash=hash('sha512', $mdp);
			$getInfo = connexionPDO();
			$req = $getInfo -> prepare('insert into login VALUES (0,:identifiant,:mdp,:matricule)');
			$req -> bindParam(':identifiant', $username,PDO::PARAM_STR);
			$req -> bindParam(':mdp', $hash,PDO::PARAM_STR);
			$req -> bindParam(':matricule', $matricule,PDO::PARAM_STR);
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

?>