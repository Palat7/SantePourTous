<?php

class Medecin{

    private $idMedecin;
    private $nomMedecin;
    private $prenomMedecin;
    private $specMedecin;
    private $courrielMedecin;
    private $numProfession;
    private $typeFacturation;
    private $Medecin_idClinique;
    private $medecin_idAdresse;
    private $medecin_idUtilisateur;

    /**
     * @param $nomMedecin
     * @param $prenomMedecin
     * @param $specMedecin
     * @param $courrielMedecin
     * @param $numProfession
     * @param $typeFacturation
     */


    public function __construct($nomMedecin, $prenomMedecin, $specMedecin, $courrielMedecin, $numProfession, $typeFacturation)
    {
        $this->nomMedecin = $nomMedecin;
        $this->prenomMedecin = $prenomMedecin;
        $this->specMedecin = $specMedecin;
        $this->courrielMedecin = $courrielMedecin;
        $this->numProfession = $numProfession;
        $this->typeFacturation = $typeFacturation;
    }


    /**
     * @return mixed
     */
    public function getIdMedecin()
    {
        return $this->idMedecin;
    }

    /**
     * @return mixed
     */
    public function getNomMedecin()
    {
        return $this->nomMedecin;
    }

    /**
     * @return mixed
     */
    public function getPrenomMedecin()
    {
        return $this->prenomMedecin;
    }

    /**
     * @return mixed
     */
    public function getSpecMedecin()
    {
        return $this->specMedecin;
    }

    /**
     * @return mixed
     */
    public function getCourrielMedecin()
    {
        return $this->courrielMedecin;
    }

    /**
     * @return mixed
     */
    public function getNumProfession()
    {
        return $this->numProfession;
    }

    /**
     * @return mixed
     */
    public function getTypeFacturation()
    {
        return $this->typeFacturation;
    }

    /**
     * @return mixed
     */
    public function getMedecinIdClinique()
    {
        return $this->Medecin_idClinique;
    }

    /**
     * @return mixed
     */
    public function getMedecinIdAdresse()
    {
        return $this->medecin_idAdresse;
    }

    /**
     * @return mixed
     */
    public function getMedecinIdUtilisateur()
    {
        return $this->medecin_idUtilisateur;
    }

    /**
     * @param mixed $nomMedecin
     */
    public function setNomMedecin($nomMedecin)
    {
        $this->nomMedecin = $nomMedecin;
    }

    /**
     * @param mixed $prenomMedecin
     */
    public function setPrenomMedecin($prenomMedecin)
    {
        $this->prenomMedecin = $prenomMedecin;
    }

    /**
     * @param mixed $specMedecin
     */
    public function setSpecMedecin($specMedecin)
    {
        $this->specMedecin = $specMedecin;
    }

    /**
     * @param mixed $courrielMedecin
     */
    public function setCourrielMedecin($courrielMedecin)
    {
        $this->courrielMedecin = $courrielMedecin;
    }

    /**
     * @param mixed $numProfession
     */
    public function setNumProfession($numProfession)
    {
        $this->numProfession = $numProfession;
    }

    /**
     * @param mixed $typeFacturation
     */
    public function setTypeFacturation($typeFacturation)
    {
        $this->typeFacturation = $typeFacturation;
    }




}