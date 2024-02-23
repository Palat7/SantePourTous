<?php
// *****************************************************************************************
// Description   : Contrôleur spécifique pour toutes les actions non-valides qui rammène à la
//                 page d'accueil
// Date          :
// Auteur        :
// Collaborateur : Aucun
// *****************************************************************************************
include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");

class InscriptionPatient extends  Controleur {

    // ******************* Constructeur vide
    public function __construct() {
        parent::__construct();
    }

    // ******************* Méthode exécuter action
    public function executerAction() {
        //----------------------------- VÉRIFIER LA VALIDITÉ DE LA SESSION (pas besoin ici) -----------
        //----------------------------- VÉRIFIER LA VALIDITÉ DES POSTS (pas besoin ici) ---------------
        //----------------------------- INTERACTION BD (pas besoin ici) -------------------------------
        //----------------------------- RETOURNER LE NOM DE LA VUE À APPELER -----
        //return "pageAccueilClinique1";
        return "pageInscriptionPatient";
    }

}

