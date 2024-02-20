<?php

if(defined('DOSSIER_BASE_INCLUDE')){
    include_once DOSSIER_BASE_INCLUDE."models/DAO/DAO.interface.php";
    include_once DOSSIER_BASE_INCLUDE . "models/medecindisponibilite.class.php";
    include_once DOSSIER_BASE_INCLUDE . "models/medecin.class.php";
    include_once DOSSIER_BASE_INCLUDE . "models/plagehoraire.class.php";
   // include_once DOSSIER_BASE_INCLUDE . "models/services.class.php";
} else{
    include_once "DAO.interface.php";
    include_once "medecinDAO.class.php";
    include_once "../medecindisponibilite.class.php";
}
class MedecinDispDAO implements DAO
{

    public static function chercher($cles)
    {
        // TODO: Implement chercher() method.
    }

    public static function chercherTous()
    {
        // TODO: Implement chercherTous() method.
    }

    public static function chercherAvecFiltre($filtre)
    {
        // TODO: Implement chercherAvecFiltre() method.
    }

    public static function inserer($unObjet)
    {
        // TODO: Implement inserer() method.
    }

    public static function modifier($unObjet)
    {
        // TODO: Implement modifier() method.
    }

    public static function supprimer($unObjet)
    {
        // TODO: Implement supprimer() method.
    }

}