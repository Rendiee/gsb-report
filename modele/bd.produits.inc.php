<?php

include_once 'bd.inc.php';

	function getInformationPraticien($id){

	}

	function getNomMedicament(){

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

?>