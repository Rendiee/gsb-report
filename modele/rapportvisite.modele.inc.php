<?php

include_once 'bd.inc.php';

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

function getAllInformationNonValide($mat){
    try 
    {	
        $monPdo = connexionPDO();
        $req = $monPdo -> prepare('SELECT * FROM `rapport_visite` WHERE COL_Matricule=:mat AND `RAP_SAISITDEFINITIVE`=0');
        $req -> bindParam(':mat', $mat, PDO::PARAM_STR);
        $req -> execute();
        $result = $req->fetchAll();

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

function insertRapportVisite($dateVisite, $bilan, $dateSaisit, $saisitDef, $motifAutre, $med1, $med2, $praNum, $motifId, $praNumRemplacant){

    try 
    {	
        $getId = getMaxIdRapportVisite();
        if($getId == null){
            $getId = 1;
        }else{
            $getId = $getId['max_id'] + 1;
        }

        $colMatricule = $_SESSION['matricule'];

        $monPdo = connexionPDO();
        $req = $monPdo -> prepare('INSERT INTO rapport_visite VALUES (:colMat, :rapNum, :rapDateVisite, :rapBilan, :rapDateSaisit, :rapSaisitDefinitive, :rapMotifAutre, :medoc1, :medoc2, :praNum, :motId, :praNumRemplacant)');
        $req -> bindParam(':colMat', $colMatricule, PDO::PARAM_STR);
        $req -> bindParam(':rapNum', $getId, PDO::PARAM_INT);
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