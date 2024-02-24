<?php
// *****************************************************************************************
// Description   : Contrôleur spécifique pour toutes les actions non-valides qui rammène à la
//                 page d'accueil
// Date          :
// Auteur        :
// Collaborateur : Aucun
// *****************************************************************************************
include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");

class InscriptionClinique extends Controleur {

    // ******************* Constructeur vide
    public function __construct() {
        parent::__construct();
    }

    // ******************* Méthode exécuter action
    public function executerAction() {

        return "pageInscriptionClinique";
    }

}
