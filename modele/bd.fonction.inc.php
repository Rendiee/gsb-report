<?php

include_once 'bd.inc.php';

	function getAllMatriculePraticien(){

		try 
		{
        	$monPdo = connexionPDO();
			$req = 'SELECT PRA_NUM FROM praticien';
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
			$req = 'SELECT MED_NOMCOMMERCIAL FROM medicament';
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
			$req = 'SELECT MED_DEPOTLEGAL, MED_NOMCOMMERCIAL, MED_COMPOSITION, MED_EFFETS, MED_CONTREINDIC FROM medicament WHERE MED_NOMCOMMERCIAL = '.$nom;
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

	function getAllInformationPraticien($mat){

		try 
		{
        	$monPdo = connexionPDO();
			$req = 'SELECT PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE, PRA_COEFNOTORIETE, PRA_COEFCONFIANCE FROM praticien WHERE PRA_NUM = '.$mat;
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

?>