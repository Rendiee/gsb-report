#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: activite_compl
#------------------------------------------------------------

CREATE TABLE activite_compl(
        AC_NUM   Int NOT NULL ,
        AC_DATE  Datetime ,
        AC_LIEU  Varchar (25) ,
        AC_THEME Varchar (10)
	,CONSTRAINT activite_compl_PK PRIMARY KEY (AC_NUM)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: composant
#------------------------------------------------------------

CREATE TABLE composant(
        CMP_CODE    Varchar (4) NOT NULL ,
        CMP_LIBELLE Varchar (25)
	,CONSTRAINT composant_PK PRIMARY KEY (CMP_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: dosage
#------------------------------------------------------------

CREATE TABLE dosage(
        DOS_CODE     Varchar (10) NOT NULL ,
        DOS_QUANTITE Varchar (10) ,
        DOS_UNITE    Varchar (10)
	,CONSTRAINT dosage_PK PRIMARY KEY (DOS_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: famille
#------------------------------------------------------------

CREATE TABLE famille(
        FAM_CODE    Varchar (3) NOT NULL ,
        FAM_LIBELLE Varchar (80)
	,CONSTRAINT famille_PK PRIMARY KEY (FAM_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: medicament
#------------------------------------------------------------

CREATE TABLE medicament(
        MED_DEPOTLEGAL      Varchar (10) NOT NULL ,
        MED_NOMCOMMERCIAL   Varchar (25) ,
        MED_COMPOSITION     Varchar (255) ,
        MED_EFFETS          Varchar (255) ,
        MED_CONTREINDIC     Varchar (255) ,
        MED_PRIXECHANTILLON Float ,
        FAM_CODE            Varchar (3) NOT NULL
	,CONSTRAINT medicament_PK PRIMARY KEY (MED_DEPOTLEGAL)

	,CONSTRAINT medicament_famille_FK FOREIGN KEY (FAM_CODE) REFERENCES famille(FAM_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: presentation
#------------------------------------------------------------

CREATE TABLE presentation(
        PRE_CODE    Varchar (2) NOT NULL ,
        PRE_LIBELLE Varchar (20)
	,CONSTRAINT presentation_PK PRIMARY KEY (PRE_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: secteur
#------------------------------------------------------------

CREATE TABLE secteur(
        SEC_CODE    Varchar (1) NOT NULL ,
        SEC_LIBELLE Varchar (15)
	,CONSTRAINT secteur_PK PRIMARY KEY (SEC_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: region
#------------------------------------------------------------

CREATE TABLE region(
        REG_CODE Varchar (2) NOT NULL ,
        REG_NOM  Varchar (50) ,
        SEC_CODE Varchar (1) NOT NULL
	,CONSTRAINT region_PK PRIMARY KEY (REG_CODE)

	,CONSTRAINT region_secteur_FK FOREIGN KEY (SEC_CODE) REFERENCES secteur(SEC_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: specialite
#------------------------------------------------------------

CREATE TABLE specialite(
        SPE_CODE    Varchar (5) NOT NULL ,
        SPE_LIBELLE Varchar (150)
	,CONSTRAINT specialite_PK PRIMARY KEY (SPE_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type_individu
#------------------------------------------------------------

CREATE TABLE type_individu(
        TIN_CODE    Varchar (5) NOT NULL ,
        TIN_LIBELLE Varchar (50)
	,CONSTRAINT type_individu_PK PRIMARY KEY (TIN_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type_praticien
#------------------------------------------------------------

CREATE TABLE type_praticien(
        TYP_CODE    Varchar (3) NOT NULL ,
        TYP_LIBELLE Varchar (25) ,
        TYP_LIEU    Varchar (35)
	,CONSTRAINT type_praticien_PK PRIMARY KEY (TYP_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: praticien
#------------------------------------------------------------

CREATE TABLE praticien(
        PRA_NUM           Int NOT NULL ,
        PRA_PRENOM        Varchar (30) ,
        PRA_NOM           Varchar (30) ,
        PRA_ADRESSE       Varchar (50) ,
        PRA_CP            Varchar (5) ,
        PRA_VILLE         Varchar (25) ,
        PRA_COEFNOTORIETE Float ,
        TYP_CODE          Varchar (3) NOT NULL
	,CONSTRAINT praticien_PK PRIMARY KEY (PRA_NUM)

	,CONSTRAINT praticien_type_praticien_FK FOREIGN KEY (TYP_CODE) REFERENCES type_praticien(TYP_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: date
#------------------------------------------------------------

CREATE TABLE date(
        JJMMAA Date NOT NULL
	,CONSTRAINT date_PK PRIMARY KEY (JJMMAA)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TYPE FRAIS
#------------------------------------------------------------

CREATE TABLE TYPE_FRAIS(
        TF_CODE    Int NOT NULL ,
        TF_LIBELLE Varchar (30) NOT NULL ,
        TF_FORFAIT Float NOT NULL
	,CONSTRAINT TYPE_FRAIS_PK PRIMARY KEY (TF_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: DEPARTEMENT
#------------------------------------------------------------

CREATE TABLE DEPARTEMENT(
        DEP_CODE      Int NOT NULL ,
        DEP_NOM       Varchar (50) NOT NULL ,
        DEP_CHEFVENTE Varchar (30) NOT NULL
	,CONSTRAINT DEPARTEMENT_PK PRIMARY KEY (DEP_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: visiteur
#------------------------------------------------------------

CREATE TABLE visiteur(
        VIS_MATRICULE    Varchar (10) NOT NULL ,
        VIS_NOM          Varchar (25) ,
        Vis_PRENOM       Varchar (50) ,
        VIS_ADRESSE      Varchar (50) ,
        VIS_CP           Varchar (5) ,
        VIS_VILLE        Varchar (30) ,
        VIS_DATEEMBAUCHE Datetime ,
        SEC_CODE         Varchar (1) ,
        DEP_CODE         Int NOT NULL
	,CONSTRAINT visiteur_PK PRIMARY KEY (VIS_MATRICULE)

	,CONSTRAINT visiteur_secteur_FK FOREIGN KEY (SEC_CODE) REFERENCES secteur(SEC_CODE)
	,CONSTRAINT visiteur_DEPARTEMENT0_FK FOREIGN KEY (DEP_CODE) REFERENCES DEPARTEMENT(DEP_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: rapport_visite
#------------------------------------------------------------

CREATE TABLE rapport_visite(
        VIS_MATRICULE Varchar (10) NOT NULL ,
        RAP_NUM       Int NOT NULL ,
        RAP_DATE      Date ,
        RAP_BILAN     Varchar (255) ,
        RAP_MOTIF     Varchar (255) ,
        PRA_NUM       Int NOT NULL
	,CONSTRAINT rapport_visite_PK PRIMARY KEY (VIS_MATRICULE,RAP_NUM)

	,CONSTRAINT rapport_visite_visiteur_FK FOREIGN KEY (VIS_MATRICULE) REFERENCES visiteur(VIS_MATRICULE)
	,CONSTRAINT rapport_visite_praticien0_FK FOREIGN KEY (PRA_NUM) REFERENCES praticien(PRA_NUM)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FICHE FRAIS
#------------------------------------------------------------

CREATE TABLE FICHE_FRAIS(
        VIS_MATRICULE         Varchar (10) NOT NULL ,
        FF_MOIS               Date NOT NULL ,
        FF_NBHORSCLASSIF      Int NOT NULL ,
        FF_MONTANTHORSCLASSIF Float NOT NULL
	,CONSTRAINT FICHE_FRAIS_PK PRIMARY KEY (VIS_MATRICULE,FF_MOIS)

	,CONSTRAINT FICHE_FRAIS_visiteur_FK FOREIGN KEY (VIS_MATRICULE) REFERENCES visiteur(VIS_MATRICULE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRESCRIRE
#------------------------------------------------------------

CREATE TABLE PRESCRIRE(
        TIN_CODE       Varchar (5) NOT NULL ,
        DOS_CODE       Varchar (10) NOT NULL ,
        MED_DEPOTLEGAL Varchar (10) NOT NULL ,
        PRE_POSOLOGIE  Varchar (50) NOT NULL
	,CONSTRAINT PRESCRIRE_PK PRIMARY KEY (TIN_CODE,DOS_CODE,MED_DEPOTLEGAL)

	,CONSTRAINT PRESCRIRE_type_individu_FK FOREIGN KEY (TIN_CODE) REFERENCES type_individu(TIN_CODE)
	,CONSTRAINT PRESCRIRE_dosage0_FK FOREIGN KEY (DOS_CODE) REFERENCES dosage(DOS_CODE)
	,CONSTRAINT PRESCRIRE_medicament1_FK FOREIGN KEY (MED_DEPOTLEGAL) REFERENCES medicament(MED_DEPOTLEGAL)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FORMULER
#------------------------------------------------------------

CREATE TABLE FORMULER(
        MED_DEPOTLEGAL Varchar (10) NOT NULL ,
        PRE_CODE       Varchar (2) NOT NULL
	,CONSTRAINT FORMULER_PK PRIMARY KEY (MED_DEPOTLEGAL,PRE_CODE)

	,CONSTRAINT FORMULER_medicament_FK FOREIGN KEY (MED_DEPOTLEGAL) REFERENCES medicament(MED_DEPOTLEGAL)
	,CONSTRAINT FORMULER_presentation0_FK FOREIGN KEY (PRE_CODE) REFERENCES presentation(PRE_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CONSTITUER
#------------------------------------------------------------

CREATE TABLE CONSTITUER(
        CMP_CODE       Varchar (4) NOT NULL ,
        MED_DEPOTLEGAL Varchar (10) NOT NULL ,
        CST_QTE        Float NOT NULL
	,CONSTRAINT CONSTITUER_PK PRIMARY KEY (CMP_CODE,MED_DEPOTLEGAL)

	,CONSTRAINT CONSTITUER_composant_FK FOREIGN KEY (CMP_CODE) REFERENCES composant(CMP_CODE)
	,CONSTRAINT CONSTITUER_medicament0_FK FOREIGN KEY (MED_DEPOTLEGAL) REFERENCES medicament(MED_DEPOTLEGAL)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: INTERAGIR
#------------------------------------------------------------

CREATE TABLE INTERAGIR(
        MED_DEPOTLEGAL            Varchar (10) NOT NULL ,
        MED_DEPOTLEGAL_medicament Varchar (10) NOT NULL
	,CONSTRAINT INTERAGIR_PK PRIMARY KEY (MED_DEPOTLEGAL,MED_DEPOTLEGAL_medicament)

	,CONSTRAINT INTERAGIR_medicament_FK FOREIGN KEY (MED_DEPOTLEGAL) REFERENCES medicament(MED_DEPOTLEGAL)
	,CONSTRAINT INTERAGIR_medicament0_FK FOREIGN KEY (MED_DEPOTLEGAL_medicament) REFERENCES medicament(MED_DEPOTLEGAL)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: OFFRIR
#------------------------------------------------------------

CREATE TABLE OFFRIR(
        MED_DEPOTLEGAL Varchar (10) NOT NULL ,
        VIS_MATRICULE  Varchar (10) NOT NULL ,
        RAP_NUM        Int NOT NULL ,
        OFF_QTE        Int NOT NULL
	,CONSTRAINT OFFRIR_PK PRIMARY KEY (MED_DEPOTLEGAL,VIS_MATRICULE,RAP_NUM)

	,CONSTRAINT OFFRIR_medicament_FK FOREIGN KEY (MED_DEPOTLEGAL) REFERENCES medicament(MED_DEPOTLEGAL)
	,CONSTRAINT OFFRIR_rapport_visite0_FK FOREIGN KEY (VIS_MATRICULE,RAP_NUM) REFERENCES rapport_visite(VIS_MATRICULE,RAP_NUM)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: POSSEDER
#------------------------------------------------------------

CREATE TABLE POSSEDER(
        SPE_CODE            Varchar (5) NOT NULL ,
        PRA_NUM             Int NOT NULL ,
        POS_DIPLOME         Varchar (10) NOT NULL ,
        POS_COEFPRESCRIPTIO Float NOT NULL
	,CONSTRAINT POSSEDER_PK PRIMARY KEY (SPE_CODE,PRA_NUM)

	,CONSTRAINT POSSEDER_specialite_FK FOREIGN KEY (SPE_CODE) REFERENCES specialite(SPE_CODE)
	,CONSTRAINT POSSEDER_praticien0_FK FOREIGN KEY (PRA_NUM) REFERENCES praticien(PRA_NUM)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: INVITER
#------------------------------------------------------------

CREATE TABLE INVITER(
        AC_NUM         Int NOT NULL ,
        PRA_NUM        Int NOT NULL ,
        SPECIALISATION TinyINT NOT NULL
	,CONSTRAINT INVITER_PK PRIMARY KEY (AC_NUM,PRA_NUM)

	,CONSTRAINT INVITER_activite_compl_FK FOREIGN KEY (AC_NUM) REFERENCES activite_compl(AC_NUM)
	,CONSTRAINT INVITER_praticien0_FK FOREIGN KEY (PRA_NUM) REFERENCES praticien(PRA_NUM)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: REALISER
#------------------------------------------------------------

CREATE TABLE REALISER(
        VIS_MATRICULE Varchar (10) NOT NULL ,
        AC_NUM        Int NOT NULL
	,CONSTRAINT REALISER_PK PRIMARY KEY (VIS_MATRICULE,AC_NUM)

	,CONSTRAINT REALISER_visiteur_FK FOREIGN KEY (VIS_MATRICULE) REFERENCES visiteur(VIS_MATRICULE)
	,CONSTRAINT REALISER_activite_compl0_FK FOREIGN KEY (AC_NUM) REFERENCES activite_compl(AC_NUM)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TRAVAILLER
#------------------------------------------------------------

CREATE TABLE TRAVAILLER(
        JJMMAA        Date NOT NULL ,
        VIS_MATRICULE Varchar (10) NOT NULL ,
        REG_CODE      Varchar (2) NOT NULL ,
        TRA_ROLE      Varchar (11) NOT NULL
	,CONSTRAINT TRAVAILLER_PK PRIMARY KEY (JJMMAA,VIS_MATRICULE,REG_CODE)

	,CONSTRAINT TRAVAILLER_date_FK FOREIGN KEY (JJMMAA) REFERENCES date(JJMMAA)
	,CONSTRAINT TRAVAILLER_visiteur0_FK FOREIGN KEY (VIS_MATRICULE) REFERENCES visiteur(VIS_MATRICULE)
	,CONSTRAINT TRAVAILLER_region1_FK FOREIGN KEY (REG_CODE) REFERENCES region(REG_CODE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: INCLURE
#------------------------------------------------------------

CREATE TABLE INCLURE(
        TF_CODE       Int NOT NULL ,
        VIS_MATRICULE Varchar (10) NOT NULL ,
        FF_MOIS       Date NOT NULL ,
        INC_QTE       Int NOT NULL ,
        INC_MONTANT   Float NOT NULL
	,CONSTRAINT INCLURE_PK PRIMARY KEY (TF_CODE,VIS_MATRICULE,FF_MOIS)

	,CONSTRAINT INCLURE_TYPE_FRAIS_FK FOREIGN KEY (TF_CODE) REFERENCES TYPE_FRAIS(TF_CODE)
	,CONSTRAINT INCLURE_FICHE_FRAIS0_FK FOREIGN KEY (VIS_MATRICULE,FF_MOIS) REFERENCES FICHE_FRAIS(VIS_MATRICULE,FF_MOIS)
)ENGINE=InnoDB;

