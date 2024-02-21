<?php

class MedecinDisponibilite
{
    private $idDisponibilite;
    private $MD_idMedecin;
    private $MD_idPlageHoraire;
    private $statutDispo;
    private $RDV_idServices;

    /**
     * @param $idDisponibilite
     * @param $statutDispo
     */
    public function __construct($idDisponibilite, $statutDispo)
    {
        $this->idDisponibilite = $idDisponibilite;
        $this->statutDispo = $statutDispo;
    }

    /**
     * @return mixed
     */
    public function getIdDisponibilite()
    {
        return $this->idDisponibilite;
    }

    /**
     * @return mixed
     */
    public function getMDIdMedecin()
    {
        return $this->MD_idMedecin;
    }

    /**
     * @return mixed
     */
    public function getMDIdPlageHoraire()
    {
        return $this->MD_idPlageHoraire;
    }

    /**
     * @return mixed
     */
    public function getStatutDispo()
    {
        return $this->statutDispo;
    }

    /**
     * @return mixed
     */
    public function getRDVIdServices()
    {
        return $this->RDV_idServices;
    }

    /**
     * @param mixed $statutDispo
     */
    public function setStatutDispo($statutDispo): void
    {
        $this->statutDispo = $statutDispo;
    }



}