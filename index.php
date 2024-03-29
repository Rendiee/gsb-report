<?php
    require_once ('modele/medicament.modele.inc.php');
    require_once ('modele/praticien.modele.inc.php');
    require_once ('modele/rapportvisite.modele.inc.php');
    require_once ('modele/connexion.modele.inc.php');

    if(!isset($_REQUEST['uc']) || empty($_REQUEST['uc']))
        $uc = 'accueil';
    else{
        $uc = $_REQUEST['uc'];
    }
?>    
<?php
    if(empty($_SESSION['login'])){
        include("vues/v_headerDeconnexion.php");
    }else{
        include("vues/v_header.php");
    }    
    switch($uc)
    {
        case 'accueil':
        {   
            unset($_SESSION['mesrapports']);
			unset($_SESSION['praticienMonRapport']);
            include("vues/v_accueil.php");
            break;
        }
        case 'medicaments' :
        {   
            unset($_SESSION['mesrapports']);
            unset($_SESSION['praticienMonRapport']);
            if(!empty($_SESSION['login'])){
                include("controleur/c_medicaments.php");
            }else{
                include("vues/v_accesInterdit.php");
            }
            break;
        }
        case 'praticiens' :
        {   
            unset($_SESSION['mesrapports']);
            unset($_SESSION['praticienMonRapport']);
            if(!empty($_SESSION['login'])){
                include("controleur/c_praticiens.php");
            }else{
                include("vues/v_accesInterdit.php");
            }
            break;
        }
        case 'rapportdevisite' :
        { 
            if(!empty($_SESSION['login'])){
                include("controleur/c_rapportdevisite.php");
            }else{
                include("vues/v_accesInterdit.php");
            }
            break; 
        }
        case 'connexion' :
        {   
            unset($_SESSION['mesrapports']);
            unset($_SESSION['praticienMonRapport']);
            include("controleur/c_connexion.php");
            break; 
        }
        case 'exam' :
            {   
                include("controleur/c_exam.php");
                break; 
            }
        default :
        {   
            unset($_SESSION['mesrapports']);
            unset($_SESSION['praticienMonRapport']);
            include("vues/v_accueil.php");
            break;
        }
    }
?>
<?php include("vues/v_footer.php") ;?>
</body>
</html>