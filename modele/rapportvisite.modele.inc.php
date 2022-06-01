<?php

include_once 'bd.inc.php';

function getRapportVisiteCollaborateur($matricule, $date1, $date2, $pratNum, $pratPresent)
{
    try {
        if (empty($date1) && empty($date2)) {
            $requete = 'SELECT *, concat(DAY(`RAP_DATEVISITE`),\'/\',MONTH(`RAP_DATEVISITE`),\'/\',YEAR(`RAP_DATEVISITE`)) as dateVisite, p.PRA_NOM, p.PRA_PRENOM, m.MOT_LIBELLE FROM rapport_visite r JOIN motif_principale m ON m.MOT_ID=r.MOT_ID JOIN praticien p ON r.PRA_NUM=p.PRA_NUM WHERE r.COL_MATRICULE = :matricule';
        } elseif (!empty($date1) && empty($date2)) {
            $requete = 'SELECT *, concat(DAY(`RAP_DATEVISITE`),\'/\',MONTH(`RAP_DATEVISITE`),\'/\',YEAR(`RAP_DATEVISITE`)) as dateVisite, p.PRA_NOM, p.PRA_PRENOM, m.MOT_LIBELLE FROM rapport_visite r JOIN motif_principale m ON m.MOT_ID=r.MOT_ID JOIN praticien p ON r.PRA_NUM=p.PRA_NUM WHERE r.COL_MATRICULE = :matricule AND r.RAP_DATEVISITE >= :dateDebut';
        } elseif (!empty($date2) && empty($date1)) {
            $requete = 'SELECT *, concat(DAY(`RAP_DATEVISITE`),\'/\',MONTH(`RAP_DATEVISITE`),\'/\',YEAR(`RAP_DATEVISITE`)) as dateVisite, p.PRA_NOM, p.PRA_PRENOM, m.MOT_LIBELLE FROM rapport_visite r JOIN motif_principale m ON m.MOT_ID=r.MOT_ID JOIN praticien p ON r.PRA_NUM=p.PRA_NUM WHERE r.COL_MATRICULE = :matricule AND r.RAP_DATEVISITE <= :dateFin';
        } else {
            $requete = 'SELECT *, concat(DAY(`RAP_DATEVISITE`),\'/\',MONTH(`RAP_DATEVISITE`),\'/\',YEAR(`RAP_DATEVISITE`)) as dateVisite, p.PRA_NOM, p.PRA_PRENOM, m.MOT_LIBELLE FROM rapport_visite r JOIN motif_principale m ON m.MOT_ID=r.MOT_ID JOIN praticien p ON r.PRA_NUM=p.PRA_NUM WHERE r.COL_MATRICULE = :matricule AND r.RAP_DATEVISITE >= :dateDebut AND r.RAP_DATEVISITE <= :dateFin';
        }

        $pratAddon = ' AND r.PRA_NUM = :pratNum ORDER BY RAP_DATEVISITE';

        if ($pratPresent) {
            $requete = $requete . $pratAddon;
        } else {
            $requete = $requete . ' ORDER BY RAP_DATEVISITE';
        }

        $monPdo = connexionPDO();
        $req = $monPdo->prepare($requete);
        $req->bindParam(':matricule', $matricule, PDO::PARAM_STR);
        if (!empty($date1)) {
            $req->bindParam(':dateDebut', $date1, PDO::PARAM_STR);
        }
        if (!empty($date2)) {
            $req->bindParam(':dateFin', $date2, PDO::PARAM_STR);
        }
        if ($pratPresent) {
            $req->bindParam(':pratNum', $pratNum, PDO::PARAM_INT);
        }
        $req->execute();
        $res = $req->fetchAll();

        return $res;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getMotif()
{

    try {

        $monPdo = connexionPDO();
        $req = 'SELECT MOT_ID, MOT_LIBELLE FROM motif_principale';
        $res = $monPdo->query($req);
        $result = $res->fetchAll();

        return $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getNonValide()
{
    try {
        $monPdo = connexionPDO();
        $req = 'SELECT COUNT(`RAP_SAISITDEFINITIVE`) FROM `rapport_visite` WHERE `RAP_SAISITDEFINITIVE`=0';
        $res = $monPdo->query($req);
        $result = $res->fetch();

        return $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function nonValideExistant($num)
{
    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT * FROM `rapport_visite` WHERE RAP_NUM=:num AND COL_MATRICULE="' . $_SESSION['matricule'] . '" AND `RAP_SAISITDEFINITIVE`=0');
        $req->bindParam(':num', $num, PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetch();

        return $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getAllInformationNonValide($mat)
{
    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT `RAP_NUM`, p.PRA_NOM, SUBSTRING(p.PRA_PRENOM, 1, 1 ) as \'PRA_PRENOM\', concat(DAY(`RAP_DATEVISITE`),\'/\',MONTH(`RAP_DATEVISITE`),\'/\',YEAR(`RAP_DATEVISITE`)) as \'RAP_DATEVISITE\' FROM `rapport_visite` r JOIN praticien p ON p.PRA_NUM=r.PRA_NUM WHERE COL_Matricule=:mat AND `RAP_SAISITDEFINITIVE`=0;');
        $req->bindParam(':mat', $mat, PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetchAll();

        return $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getInformationsMesRapports($num, $matricule)
{
    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT `COL_MATRICULE`, `RAP_NUM`, p.PRA_NOM, p.PRA_PRENOM, r.PRA_NUM, concat(DAY(`RAP_DATEVISITE`),\'/\',MONTH(`RAP_DATEVISITE`),\'/\',YEAR(`RAP_DATEVISITE`)) as \'RAP_DATEVISITE\', `RAP_BILAN`, concat(DAY(`RAP_DATESAISIT`),\'/\',MONTH(`RAP_DATESAISIT`),\'/\',YEAR(`RAP_DATESAISIT`)) as \'RAP_DATESAISIT\', `RAP_SAISITDEFINITIVE`, `RAP_MOTIFAUTRE`, `MED_DEPOTLEGAL_1`, `MED_DEPOTLEGAL_2`, m.MOT_LIBELLE FROM `rapport_visite` r JOIN motif_principale m ON m.MOT_ID=r.MOT_ID JOIN praticien p ON p.PRA_NUM=r.PRA_NUM WHERE COL_MATRICULE = :matricule AND `RAP_NUM`=:num;');
        $req->bindParam(':num', $num, PDO::PARAM_INT);
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $result = $req->fetch();

        return $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getInformationNonValide($num)
{

    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT * FROM `rapport_visite` WHERE COL_MATRICULE = "' . $_SESSION['matricule'] . '" AND `RAP_NUM`=:num');
        $req->bindParam(':num', $num, PDO::PARAM_INT);
        $req->execute();
        $res = $req->fetch();

        return $res;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getNomMotif($num)
{

    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT `MOT_ID`,`MOT_LIBELLE` FROM `motif_principale` where MOT_ID = :num');
        $req->bindParam(':num', $num, PDO::PARAM_INT);
        $req->execute();
        $res = $req->fetch();

        return $res;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getMaxIdRapportVisite($colMatricule)
{

    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT MAX(RAP_NUM) as \'max_id\' FROM rapport_visite WHERE COL_Matricule=:colMat');
        $req->bindParam(':colMat', $colMatricule, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetch();

        return $res;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function modifierRapportNonValide($bilan, $dateVisite, $medoc1, $medoc2, $definitif, $num){
    try {
        $matricule = $_SESSION['matricule'];

        $monPdo = connexionPDO();
        $req = $monPdo->prepare('UPDATE rapport_visite SET RAP_BILAN = :bilan, RAP_DATEVISITE = :dateVisite, MED_DEPOTLEGAL_1 = :medoc1, MED_DEPOTLEGAL_2 = :medoc2, RAP_SAISITDEFINITIVE = :definitif WHERE COL_MATRICULE = :matricule AND RAP_NUM = :num');
        $req->bindParam(':bilan', $bilan);
        $req->bindParam(':dateVisite', $dateVisite);
        $req->bindParam(':medoc1', $medoc1);
        $req->bindParam(':medoc2', $medoc2);
        $req->bindParam(':definitif', $definitif);
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':num', $num);
        $req->execute();

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function insertRapportVisite($dateVisite, $bilan, $dateSaisit, $saisitDef, $motifAutre, $med1, $med2, $praNum, $motifId, $praNumRemplacant, $mode)
{

    try {

        $colMatricule = $_SESSION['matricule'];

        $getId = getMaxIdRapportVisite($colMatricule);

        if ($getId == null) {
            $getId = 1;
        } else {
            $getId = $getId['max_id'] + 1;
        }



        $monPdo = connexionPDO();
        $req = $monPdo->prepare('INSERT INTO rapport_visite VALUES (:colMat, :rapNum, :rapDateVisite, :rapBilan, :rapDateSaisit, :rapSaisitDefinitive, :rapMotifAutre, :medoc1, :medoc2, :praNum, :motId, :praNumRemplacant, :mode)');
        $req->bindParam(':colMat', $colMatricule, PDO::PARAM_STR);
        $req->bindParam(':rapNum', $getId, PDO::PARAM_INT);
        $req->bindParam(':rapDateVisite', $dateVisite, PDO::PARAM_STR);
        $req->bindParam(':rapBilan', $bilan, PDO::PARAM_STR);
        $req->bindParam(':rapDateSaisit', $dateSaisit, PDO::PARAM_STR);
        $req->bindParam(':rapSaisitDefinitive', $saisitDef, PDO::PARAM_BOOL);
        $req->bindParam(':rapMotifAutre', $motifAutre, PDO::PARAM_STR);
        $req->bindParam(':medoc1', $med1, PDO::PARAM_STR);
        $req->bindParam(':medoc2', $med2, PDO::PARAM_STR);
        $req->bindParam(':praNum', $praNum, PDO::PARAM_INT);
        $req->bindParam(':motId', $motifId, PDO::PARAM_INT);
        $req->bindParam(':praNumRemplacant', $praNumRemplacant, PDO::PARAM_INT);
        $req->bindParam(':mode', $mode, PDO::PARAM_INT);

        $req->execute();
        //$req->debugDumpParams();
        return $req;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getRegionCodeConnected($colMatricule)
{

    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT REG_CODE FROM collaborateur WHERE COL_MATRICULE = :colMat');
        $req->bindParam(':colMat', $colMatricule, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetch();

        return $res;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getRapportParRegion($regCode, $date1, $date2)
{

    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT r.*, concat(DAY(`RAP_DATEVISITE`),\'/\',MONTH(`RAP_DATEVISITE`),\'/\',YEAR(`RAP_DATEVISITE`)) as dateVisite, p.PRA_NOM, p.PRA_PRENOM, m.MOT_LIBELLE, c.COL_NOM, c.COL_PRENOM FROM rapport_visite r JOIN motif_principale m ON m.MOT_ID=r.MOT_ID JOIN praticien p ON r.PRA_NUM=p.PRA_NUM JOIN collaborateur c ON c.COL_MATRICULE=r.COL_MATRICULE WHERE c.REG_CODE=:regCode AND r.RAP_DATEVISITE >= :dateDebut AND r.RAP_DATEVISITE <= :dateFin');
        $req->bindParam(':regCode', $regCode, PDO::PARAM_STR);
        $req->bindParam(':dateDebut', $date1, PDO::PARAM_STR);
        $req->bindParam(':dateFin', $date2, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetchAll();

        return $res;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getVisiteurRegion($regCode)
{

    try {
        $monPdo = connexionPDO();
        $req = $monPdo->prepare('SELECT COL_MATRICULE, COL_NOM, COL_PRENOM FROM collaborateur WHERE REG_CODE = :regCode AND COL_MATRICULE NOT IN (select COL_MATRICULE from collaborateur where COL_MATRICULE = "' . $_SESSION['matricule'] . '")');
        $req->bindParam(':regCode', $regCode, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetchAll();

        return $res;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

/*
* Function qui va chercher dans la base
* de donnée tous les modes de contacts
* existant.
*
* @return $result : array contenant les différents modes de contacts avec l'id et le libelle
*/

function getModeContacte()
{
    try {

        $monPdo = connexionPDO();
        $req = 'SELECT id, libelle FROM contacte';
        $res = $monPdo->query($req);
        $result = $res->fetchAll();

        return $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

/*
* Function qui va compter pour chaque
* mode de contact le nombre présent en tout
* dans tous les rapports de visites.
*
* @return $result : array contenant pour chaque mode de contact, le nombre présent et son libelle
*/

function getProportionModeDeContact()
{
    try {

        $monPdo = connexionPDO();
        $req = 'SELECT COUNT(r.contact) as nb, c.libelle as lib FROM rapport_visite r INNER JOIN contacte c ON r.contact = c.id GROUP BY r.contact';
        $res = $monPdo->query($req);
        $result = $res->fetchAll();

        return $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

