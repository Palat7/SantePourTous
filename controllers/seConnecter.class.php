<?php

include_once(DOSSIER_BASE_INCLUDE."controllers/controller.abstract.class.php");
include_once(DOSSIER_BASE_INCLUDE."models/DAO/UtilisateurDAO.class.php");

class SeConnecter extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function executerAction()
    {
        if ($this->acteur=="utilisateur") {
            array_push ($this->messagesErreur,"Vous êtes déjà connécté.");
            return "pageAccueil";
    }
        if (ISSET($_POST['username']) AND ISSET($_POST['password'])){
            $unUtilisateur=UtilisateurDAO::chercher($_POST['username']);
            if ($unUtilisateur==null) {
                array_push ($this->messagesErreur,"Cet utilisateur n'existe pas.");
                return "pageSeConnecter";
            } elseif (!$unUtilisateur->verifierMotPasse($_POST['password']))  {
                array_push ($this->messagesErreur,"Le mot de passe est incorrect.");
                return "pageSeConnecter";
            } else {
                $this->acteur="utilisateur";
                $_SESSION['utilisateurConnecte']=$_POST['username'];
                return "pageAccueil";
            }
        } else {
            return "pageSeConnecter";
        }
    }

}