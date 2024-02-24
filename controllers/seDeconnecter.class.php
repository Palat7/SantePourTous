<?php

    include_once(DOSSIER_BASE_INCLUDE."controllers/controller.abstract.class.php");
    include_once(DOSSIER_BASE_INCLUDE."models/DAO/UtilisateurDAO.class.php");

    class SeDeconnecter extends Controller{

        public function __construct(){
        parent::__construct();
        }

        public function executerAction() {

            if ($this->acteur=="visiteur") {
                array_push ($this->messagesErreur,"Vous êtes déjà déconnécté.");
                return "pageAccueil";
            } elseif (ISSET($_POST['deconnexion'])) {
                $this->acteur="visiteur";
                unset($_SESSION['utilisateurConnecte']);
                return "pageAccueil";
            } else {
                return "pageSeDeconnecter";
            }
        }



    }