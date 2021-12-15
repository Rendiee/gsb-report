<?php

include_once 'bd.inc.php';

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
            $req = 'SELECT m.MED_DEPOTLEGAL as \'depotlegal\', m.MED_NOMCOMMERCIAL as \'nomcom\', m.MED_COMPOSITION as \'compo\', m.MED_EFFETS as \'effet\', m.MED_CONTREINDIC as \'contreindic\', m.MED_PRIXECHANTILLON as \'prixechan\', f.FAM_LIBELLE as \'famille\' FROM medicament m INNER JOIN famille f ON f.FAM_CODE = m.FAM_CODE WHERE MED_NOMCOMMERCIAL = "'.$nom.'"';
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