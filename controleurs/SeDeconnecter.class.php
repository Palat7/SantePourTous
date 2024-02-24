<?php
    // *****************************************************************************************
	// Description   : Contrôleur spécifique pour toutes les actions non-valides qui rammène à la
	//                 page d'accueil
	// Date          : 
	// Auteur        : 
	// Collaborateur : Aucun
    // *****************************************************************************************
	include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/utilisateurDAO.class.php");

	class SeDeconnecter extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		

		// ******************* Méthode exécuter action
		public function executerAction() {
			//----------------------------- VÉRIFIER LA VALIDITÉ DE LA SESSION  -----------
			if ($this->acteur=="visiteur") {
				array_push ($this->messagesErreur,"Vous êtes déjà déconnécté.");
                //return "pageAccueil";
              // return "pageSeConnecter";
               return "pageAcceuil";
			}

            elseif (ISSET($_POST['deconnexion'])) {
				$this->acteur="visiteur";
				unset($_SESSION['utilisateurConnecte']);
				//return "pageAccueil";
               // return "pageSeConnecter";
                return "pageAcceuil";

			}

            else {
				return "pageAccueilClinique1";
                //return "pageAccueil";
			}
		}


		
	}	
	
?>