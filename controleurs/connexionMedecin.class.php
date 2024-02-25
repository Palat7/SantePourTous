<?php
// **
// Description   : Contrôleur spécifique pour toutes les actions non-valides qui rammène à la
//                 page d'accueil
// Date          :
// Auteur        :
// Collaborateur : Aucun
// **
include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");
include_once(DOSSIER_BASE_INCLUDE ."modele/DAO/medecinDAO.class.php");
include_once(DOSSIER_BASE_INCLUDE ."modele/DAO/utilisateurDAO.class.php");

class ConnexionMedecin extends Controleur
{

    // ** Constructeur vide
    public function construct()
    {
        parent::construct();
    }

    // ** Méthode exécuter action
    public function executerAction(): string
    {
        if (isset($_POST['utilisateur']) && isset($_POST['password'])) {
            $unUtilisateur = UtilisateurDAO::chercher($_POST['utilisateur']);

            if ($unUtilisateur == null) {
                array_push($this->messagesErreur, "Cet utilisateur n'existe pas.");
                return "pageConnexionMedecin";}

            if (!is_null($unUtilisateur)) {
                $unMedecin = MedecinDAO::chercher($unUtilisateur->getIdUtilisateur());


                if (!is_null($unMedecin)) {
                    $this->setActeur('utilisateur');
                    //  session_start();
                    $_SESSION['utilisateurConnecte']['connexion'] = $unUtilisateur;
                    $_SESSION['utilisateurConnecte']['medecin'] = $unMedecin;

                }

            }
            return "pageAcceuilMedecin";
        }
        return "pageConnexionMedecin";
    }

}

