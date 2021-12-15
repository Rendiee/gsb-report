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


?>