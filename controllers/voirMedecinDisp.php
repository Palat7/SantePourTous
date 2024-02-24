<?php

include_once(DOSSIER_BASE_INCLUDE."controllers/controller.abstract.class.php");
include_once(DOSSIER_BASE_INCLUDE . "models/DAO/medecinDispDAO.class.php");
class VoirMedecinDisp extends Controller
{
private $tabInfosDisponibilites;

public function __construct()
{
    parent::__construct();
    $this->tabInfosDisponibilites=array();
}

    public function getTabInfosDisponibilites()
    {
        return $this->tabInfosDisponibilites;
    }

public function executerAction()
{
    $this->tabInfosDisponibilites=medecinDispDAO::chercherTous();
    return "pageVoirDisponibilites";
}

}