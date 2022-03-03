<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Tous les rapports du <?php echo date_format($dateDebut, 'd/m/Y').' au '.date_format($dateFin, 'd/m/Y'); if($pra){echo '<br/> du praticien '.$infoMesRapports[0]['PRA_NOM'].' '.$infoMesRapports[0]['PRA_PRENOM'];}?></h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-9 col-lg-8 col-xl-7 py-3">
                <div class="max-rediger h-auto formulaire mb-0 mt-0 d-flex align-items-center flex-column justify-content-between overflow-auto pb-0">
                    <div class="w-100 d-flex flex-column">
                        <?php                            
                            foreach($infoMesRapports as $key){
                                $text='';
                                if(!is_null($key['MED_DEPOTLEGAL_2'])){
                                    $text = ' / ' . $key['MED_DEPOTLEGAL_2'];
                                }
                                echo '<form action="index.php?uc=rapportdevisite&action=mesrapports" method="post" class="d-flex flex-column w-100">
                                    <label for="praticien">N°'.$key['RAP_NUM'].' - '.$key['PRA_NOM'].' '.$key['PRA_PRENOM'].'</label>
                                    <div class="d-flex align-items-center justify-content-between w-100">
                                        <option value="'.$key['RAP_NUM'].'" class="m-0 p-0"></option>
                                        <div class="mw-100 overflow-auto form-control d-flex justify-content-between align-items-center">
                                            <div class="col-6 col-sm-5 col-md-3 text-center">'.$key['dateVisite'].'</div>
                                            <div class="text-center d-none d-sm-block">|</div>
                                            <div class="col-6 col-sm-5 col-md-3 text-center"><u>Motif</u> : '.$key['MOT_LIBELLE'].'</div>
                                            <div class="text-center d-none d-sm-block">|</div>
                                            <div class="col-6 col-sm-5 col-md-3 text-center"><u>Médicament(s)</u> : '.$key['MED_DEPOTLEGAL_1'].$text.'</div>
                                        </div>
                                        <input class="btn btn-info text-light valider m-0 ms-3" type="submit" value="Voir">
                                    </div>
                                    </form> ';
                            }                           
                        ?>
                    </div>
                    <div class="position-sticky bottom-0 retour-rap w-100 py-3">                        
                        <input class="btn btn-info text-light valider col-6 col-sm-5 col-md-4 col-lg-3" type="button" onclick="history.go(-1)" value="Retour">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>