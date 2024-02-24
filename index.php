<?php
    // *****************************************************************************************
	// Description : Contrôleur frontal du site
	// Date        : 
	// Auteur      : 
    // *****************************************************************************************

	// Définition d'une constante pour les chemins absolus pour les hyperliens en HTML
	define("DOSSIER_BASE_LIENS", "");
	// Définition d'une constante pour les inclusions en PHP
	$chemin=(substr($_SERVER['DOCUMENT_ROOT'],-1)=="/")?$_SERVER['DOCUMENT_ROOT']:$_SERVER['DOCUMENT_ROOT']."/";
	define("DOSSIER_BASE_INCLUDE", $chemin."dashboard/SantePourTous/");
		
	//Inclusion de la manufacture de controleur (qui importe déjà tous les contrôleur)
	include_once DOSSIER_BASE_INCLUDE."controleurs/manufactureControleur.class.php";
	
	//Obtenir le bon controleur
	if (!ISSET($_GET['action'])) {
		$action = "";
	} else {
		$action = $_GET['action'];
	}
	$controleur = ManufactureControleur::creerControleur($action);
	
	// Executer l'action et obtener le nom de la vue
	$nomVue=$controleur->executerAction();
	
	// inclure la bonne vue
	include_once(DOSSIER_BASE_INCLUDE."vues/".$nomVue.".php");
?>