<?php
   // *****************************************************************************************
	// Description   : classe contenant la fonction statqieu qui géère les contrôleurs spécifiques
	// Date          : 
	// Auteur        : 
	// Collaborateur : Aucun
    // *****************************************************************************************
	include_once(DOSSIER_BASE_INCLUDE."controleurs/defaut.class.php");
	//include_once(DOSSIER_BASE_INCLUDE."controleurs/voirInfosAccessoires.class.php");
	//include_once(DOSSIER_BASE_INCLUDE."controleurs/chercherInfosAccessoires.class.php");
	include_once(DOSSIER_BASE_INCLUDE . "controleurs/seConnecterClinique.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/seDeconnecter.class.php");
	//include_once(DOSSIER_BASE_INCLUDE."controleurs/chercherAuto.class.php");
	
	class ManufactureControleur {
		//  Méthode qui crée une instance du controleur associé à l'action
		//  et le retourne
		public static function creerControleur($action) {
			$controleur = null;
			if ($action=="seConnecterClinique") {
                $controleur = new seConnecterClinique();
            } elseif ($action=="seDeconnecter") {
                $controleur = new SeDeconnecter();
            }
            elseif ($action=="PageAccueilClinique1") {
                $controleur = new Defaut();
            }


            else {
				$controleur = new Defaut();
			}
			return $controleur;
		}
	}
	
?>