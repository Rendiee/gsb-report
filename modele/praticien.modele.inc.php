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

    function getAllInformationPraticienVisite($mat){

		try 
		{
        	$monPdo = connexionPDO();
			$req = 'SELECT p.PRA_NUM AS \'num\', p.PRA_NOM AS \'nom\', p.PRA_PRENOM AS \'prenom\', p.PRA_ADRESSE AS \'adresse\', p.PRA_CP AS \'cp\', p.PRA_VILLE AS \'vill\e\', p.PRA_COEFNOTORIETE AS \'coefnoto\', p.PRA_COEFCONFIANCE AS \'coefconf\', tp.TYP_LIBELLE AS \'typeprat\' FROM praticien p JOIN type_praticien tp ON tp.TYP_CODE = p.TYP_CODE JOIN rapport_visite rv ON rv.`PRA_NUM`=p.PRA_NUM AND `COL_MATRICULE`= "'.$mat.'" ORDER BY p.PRA_NUM';
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
    function getPraticiExistant($mat){

            $monPdo = connexionPDO();
			$req = 'SELECT PRA_NUM FROM rapport_visite rv WHERE `COL_MATRICULE`= "'.$_SESSION['matricule'].'" AND PRA_NUM='.$mat;
			$res = $monPdo->query($req);
			$resultat = $res->fetch();
            if($resultat){
                $result=true;
            }else{
                $result=false;
            }

			return $result;
	}

	/*
	* Function qui va récupérer toutes les
	* villes présentes dans la base de donnée
	* appartenant aux praticiens
	*
	* @return $result : array contenant une liste de ville
	*/

	function getAllVillePraticien(){

		try 
            {
                $monPdo = connexionPDO();
                $req = 'SELECT p.PRA_VILLE as ville FROM praticien p GROUP BY p.PRA_VILLE';
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

	/*
	* Function qui va récupérer tous les praticiens
	* habitant dans la ville passer en paramètre.
	* 
	* @param $ville : ville pour récupérer tous les praticiens de celle-ci
	*
	* @return $res : array contenant les numéros, les prénoms et les noms des praticiens habitant dans la ville passé en paramètre
	*/

	function getPraticienFromVille($ville){

		try 
            {
                $monPdo = connexionPDO();
                $req = $monPdo->prepare('SELECT p.PRA_NUM as num, p.PRA_PRENOM as prenom, p.PRA_NOM as nom FROM praticien p WHERE p.PRA_VILLE = :ville;');
				$req->bindParam(':ville', $ville, PDO::PARAM_STR);
				$req->execute();
				$res = $req->fetchAll();

                return $res;
            } 

        catch (PDOException $e) 
            {
                print "Erreur !: " . $e->getMessage();
                    die();
            }

	}

?>