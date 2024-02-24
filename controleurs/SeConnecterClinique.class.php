<?php
// *****************************************************************************************
// Description   : Contrôleur spécifique pour toutes les actions non-valides qui rammène à la
//                 page d'accueil
// Date          :
// Auteur        :
// Collaborateur : Aucun
// *****************************************************************************************
include_once(DOSSIER_BASE_INCLUDE . "controleurs/controleur.abstract.class.php");
include_once(DOSSIER_BASE_INCLUDE . "modele/DAO/utilisateurDAO.class.php");

class SeConnecterClinique extends Controleur
{

    // ******************* Constructeur vide
    public function __construct()
    {
        parent::__construct();
    }


    // ******************* Méthode exécuter action
    public function executerAction()
    {
        //----------------------------- VÉRIFIER LA VALIDITÉ DE LA SESSION  -----------
        if ($this->acteur == "utilisateur") {
            array_push($this->messagesErreur, "Vous êtes déjà connécté.");
            return "pageAccueilClinique1";
        }
        //----------------------------- VÉRIFIER LA VALIDITÉ DES POSTS ---------------
        if (isset($_POST['nom_utilisateur']) and isset($_POST['mot_passe'])) {
            $unUtilisateur = UtilisateurDAO::chercher($_POST['nom_utilisateur']);
            if ($unUtilisateur == null) {
                array_push($this->messagesErreur, "Cet utilisateur n'existe pas.");
                return "pageSeConnecterClinique";
            } elseif (!$unUtilisateur->verifierMotPasse($_POST['mot_passe'])) {
                array_push($this->messagesErreur, "Le mot de passe est incorrect.");
                return "pageSeConnecterClinique";
            } else {

                $this->acteur = "utilisateur";

                $_SESSION['utilisateurConnecte'] = $_POST['nom_utilisateur'];


                return "pageAccueilClinique1";
            }
        } else {
            return "pageSeConnecterClinique";
          //  return "pageAccueilClinique1";

        }
    }
}

?>