<?php

if (defined('DOSSIER_BASE_INCLUDE')) {
    include_once DOSSIER_BASE_INCLUDE."models/medecin.class.php";
    include_once DOSSIER_BASE_INCLUDE."models/patient.class.php";
    include_once DOSSIER_BASE_INCLUDE."models/medecindisponibilite.class.php";
    //include_once DOSSIER_BASE_INCLUDE."models/clinique.class.php";

} else {
    include_once "medecin.class.php";
    include_once "patient.class.php";
    include_once "medecindisponibilite.class.php";
    //include_once "clinique.class.php";
}
class RendezVous
{
    private $idRendezvous;
    private $dateRdv;
    private $raisonRdv;
    private $detailsRdv;
    private $RDV_idPatient;
    private $RDV_idMedecin;
    private $RDV_idClinique;
    private $RDV_idDisponibilite;

    /**
     * @param $idRendezvous
     * @param $dateRdv
     * @param $raisonRdv
     * @param $detailsRdv
     */
    public function __construct($idRendezvous, $dateRdv, $raisonRdv, $detailsRdv)
    {
        $this->idRendezvous = $idRendezvous;
        $this->dateRdv = $dateRdv;
        $this->raisonRdv = $raisonRdv;
        $this->detailsRdv = $detailsRdv;
    }

    /**
     * @return mixed
     */
    public function getIdRendezvous()
    {
        return $this->idRendezvous;
    }

    /**
     * @return mixed
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * @return mixed
     */
    public function getRaisonRdv()
    {
        return $this->raisonRdv;
    }

    /**
     * @return mixed
     */
    public function getDetailsRdv()
    {
        return $this->detailsRdv;
    }

    /**
     * @return mixed
     */
    public function getRDVIdPatient()
    {
        return $this->RDV_idPatient;
    }

    /**
     * @return mixed
     */
    public function getRDVIdMedecin()
    {
        return $this->RDV_idMedecin;
    }

    /**
     * @return mixed
     */
    public function getRDVIdClinique()
    {
        return $this->RDV_idClinique;
    }

    /**
     * @return mixed
     */
    public function getRDVIdDisponibilite()
    {
        return $this->RDV_idDisponibilite;
    }

    /**
     * @param mixed $dateRdv
     */
    public function setDateRdv($dateRdv): void
    {
        $this->dateRdv = $dateRdv;
    }

    /**
     * @param mixed $raisonRdv
     */
    public function setRaisonRdv($raisonRdv): void
    {
        $this->raisonRdv = $raisonRdv;
    }

    /**
     * @param mixed $detailsRdv
     */
    public function setDetailsRdv($detailsRdv): void
    {
        $this->detailsRdv = $detailsRdv;
    }



}

