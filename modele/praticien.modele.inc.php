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
			$req = 'SELECT p.PRA_NUM AS \'num\', p.PRA_NOM AS \'nom\', p.PRA_PRENOM AS \'prenom\', p.PRA_ADRESSE AS \'adresse\', p.PRA_CP AS \'cp\', p.PRA_VILLE AS \'ville\', p.PRA_COEFNOTORIETE AS \'coefnoto\', p.PRA_COEFCONFIANCE AS \'coefconf\', tp.TYP_LIBELLE AS \'typeprat\' FROM praticien p INNER JOIN type_praticien tp ON tp.TYP_CODE = p.TYP_CODE WHERE p.PRA_NUM = '.$mat;
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