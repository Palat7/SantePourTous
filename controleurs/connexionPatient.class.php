<?php
// *****************************************************************************************
// Description   : Contrôleur spécifique pour toutes les actions non-valides qui rammène à la
//                 page d'accueil
// Date          :
// Auteur        :
// Collaborateur : Aucun
// *****************************************************************************************
include_once(DOSSIER_BASE_INCLUDE . "controleurs/controleur.abstract.class.php");
include_once(DOSSIER_BASE_INCLUDE . "modele/DAO/patientDAO.class.php");
include_once(DOSSIER_BASE_INCLUDE . "modele/DAO/utilisateurDAO.class.php");


class ConnexionPatient extends Controleur
{

    // ******************* Constructeur vide
    public function __construct()
    {
        parent::__construct();
    }

    // ******************* Méthode exécuter action
      public function executerAction():string
      {

          if (isset($_POST['utilisateur']) && isset($_POST['password'])) {
              $unUtilisateur = UtilisateurDAO::chercher($_POST['utilisateur']);

              if (!is_null($unUtilisateur)) {
                  $unPatient = PatientDAO::chercher($unUtilisateur->getIdUtilisateur());
                  print_r($unPatient);
                  die;

                  if (!is_null($unPatient)) {
                      $this->setActeur('utilisateur');
                      session_start();


                      $_SESSION['utilisateurConnecte']['connexion'] = $unUtilisateur;
                      $_SESSION['utilisateurConnecte']['patient'] = $unPatient;

                  }
              }


              return "pageAcceuilPatient";
          }
          return "pageConnexionPatient";
      }




}
