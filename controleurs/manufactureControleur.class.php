<?php
// *****************************************************************************************
// Description   : classe contenant la fonction statqieu qui géère les contrôleurs spécifiques
// Date          :
// Auteur        :
// Collaborateur : Aucun
// *****************************************************************************************
include_once(DOSSIER_BASE_INCLUDE . "controleurs/defaut.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/connexionPatient.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/inscriptionPatient.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/inscriptionMedecin.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/inscriptionClinique.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/connexionMedecin.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/SeConnecterClinique.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/SeDeconnecterClinique.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/creationCompte.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/voirMedecinClinique.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/creationClinique.class.php");
include_once(DOSSIER_BASE_INCLUDE . "controleurs/TraitementCreationClinique.php");



class ManufactureControleur
{
    //  Méthode qui crée une instance du controleur associé à l'action
    //  et le retourne
    public static function creerControleur($action)
    {
        $controleur = null;


        switch ($action) {
            case "pageConnexionPatient":
                $controleur = new ConnexionPatient();
                break;
            case "pageConnexionMedecin":
                $controleur = new ConnexionMedecin();
                break;
            case "pageCreationCompte":
                $controleur = new CreationCompte();
                break;
            case "pageInscriptionPatient":
                $controleur = new InscriptionPatient();
                break;
            case "pageInscriptionMedecin":
                $controleur = new InscriptionMedecin();
                break;
            case "pageInscriptionClinique":
                $controleur = new InscriptionClinique();
                break;
            case "pageAcceuilPatient":
                $controleur = new AcceuilPatient();
                break;

            case "voirMedecinClinique":
                $controleur = new voirMedecinClinique();
                break;
            case "seConnecterClinique":
                $controleur = new SeConnecterClinique();
                break;

            case "seDeconnecterClinique":
                $controleur = new SeDeconnecterClinique();
                break;

            case "TraitementCreationClinique":
                $controleur = new TraitementCreationClinique();
                break;
            case "pageCreationClinique":
                $controleur = new CreationClinique();
                break;
            case "pageAcceuilMedecin":
                $controleur = new AcceuilMedecin();
                break;

            case "pageAcceuil":
            default:
                $controleur = new Defaut();
                break;
        }

        return $controleur;
    }
}



/*
elseif($action=="seConnecter") {
$controleur = new SeConnecter();
} elseif ($action=="seDeconnecter") {
$controleur = new SeDeconnecter();
}
elseif ($action=="pageAccueilClinique1") {
$controleur = new Defaut();
}
elseif ($action=="pageCreationCompte") {
$controleur = new Defaut();
}
elseif ($action=="voirInscriptionMedecin") {
$controleur = new VoirInscriptionMedecin();
}
*/