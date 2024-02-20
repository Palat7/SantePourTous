<?php

class VoirPatients extends Controller
{
    private $tabPatients;

    public function __construct(){
        parent::__construct();
        $this->tabPatients=array();
    }

    /**
     * @return array
     */
    public function getTabPatients()
    {
        return $this->tabPatients;
    }


    public function executerAction()
    {
        $this->tabPatients = patientDAO::chercherTous();
        return "pageVoirPatient";
    }
}