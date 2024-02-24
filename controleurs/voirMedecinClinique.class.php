<?php
// *****************************************************************************************
// Description   : Contrôleur spécifique pour l'action de voirEquipes qui s'occupe de gérer
//                 l'affichage de l'ensemble équipes de la ligue
// Date          :
// Auteur        :
// Collaborateur : Aucun
// *****************************************************************************************
include_once(DOSSIER_BASE_INCLUDE . "controleurs/controleur.abstract.class.php");
include_once(DOSSIER_BASE_INCLUDE . "modele/DAO/medecinCliniqueDAO.class.php");

class VoirMedecinClinique extends Controleur
{
    // ******************* Attributs
    private $tabMedecins;

    // ******************* Constructeur vide
    public function __construct()
    {
        parent::__construct();
        $this->tabMedecins = array();
    }

    // ******************* Accesseurs
    public function getTabMedecins()
    {
       // return $this-> $tabMedecins;
        return $this->tabMedecins;

    }

    // ******************* Méthode exécuter action
    public function executerAction()
    {


               // $this->tabMedecins = medecinCliniqueDAO::chercher($_POST['information']);


               // $this->tabMedecins = medecinCliniqueDAO::chercher(str_replace(' ', '', strtolower($_SESSION['utilisateurConnecte'])));

                $this->tabMedecins = medecinCliniqueDAO::chercher($_SESSION['utilisateurConnecte']);




        return "pageVoirMedecinClinique";
    }


}

?>