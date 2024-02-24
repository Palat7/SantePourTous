<?php

    include_once(DOSSIER_BASE_INCLUDE."controllers/controller.abstract.class.php");
    include_once(DOSSIER_BASE_INCLUDE . "models/DAO/medecinDAO.class.php");

    class VoirMedecins extends Controller{

        private $tabMedecins;

        public function __construct(){
            parent::__construct();
            $this->tabMedecins=array();
        }

        /**
         * @return array
         */
        public function getTabMedecins()
        {
            return $this->tabMedecins;
        }


        public function executerAction()
        {
            $this->tabMedecins = medecinDAO::chercherTous();
            return "pageVoirMedecins";
        }
    }