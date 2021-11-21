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
			$nom = $res->fetchAll();

			return $nom;
		} 

	catch (PDOException $e) 
		{
       		print "Erreur !: " . $e->getMessage();
      	  	die();
		}

	}

?>