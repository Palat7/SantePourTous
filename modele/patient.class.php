<?php

if (defined('DOSSIER_BASE_INCLUDE')) {
    include_once DOSSIER_BASE_INCLUDE."modele/utilisateur.class.php";
} else {
    include_once "utilisateur.class.php";
}
class Patient
{
    private $idPatient;
    private $nomPatient;
    private $prenomPatient;
    private $ramqPatient;
    private $numSequence;
    private $dateNaissance;
    private $sexePatient;
    private $courrielPatient;
    private $patient_idAdresse;
    private $patient_idUtilisateur;

    /**
     * @param $idPatient
     * @param $nomPatient
     * @param $prenomPatient
     * @param $ramqPatient
     * @param $numSequence
     * @param $dateNaissance
     * @param $sexePatient
     * @param $courrielPatient
     */
    public function __construct($idPatient, $nomPatient, $prenomPatient, $ramqPatient, $numSequence, $dateNaissance, $sexePatient, $courrielPatient)
    {
        $this->idPatient = $idPatient;
        $this->nomPatient = $nomPatient;
        $this->prenomPatient = $prenomPatient;
        $this->ramqPatient = $ramqPatient;
        $this->numSequence = $numSequence;
        $this->dateNaissance = $dateNaissance;
        $this->sexePatient = $sexePatient;
        $this->courrielPatient = $courrielPatient;

    }


    /**
     * @return mixed
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }

    /**
     * @return mixed
     */
    public function getNomPatient()
    {
        return $this->nomPatient;
    }

    /**
     * @return mixed
     */
    public function getPrenomPatient()
    {
        return $this->prenomPatient;
    }

    /**
     * @return mixed
     */
    public function getRamqPatient()
    {
        return $this->ramqPatient;
    }

    /**
     * @return mixed
     */
    public function getNumSequence()
    {
        return $this->numSequence;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getSexePatient()
    {
        return $this->sexePatient;
    }

    /**
     * @return mixed
     */
    public function getCourrielPatient()
    {
        return $this->courrielPatient;
    }

    /**
     * @return mixed
     */
    public function getPatientIdAdresse()
    {
        return $this->patient_idAdresse;
    }

    /**
     * @return mixed
     */
    public function getPatientIdUtilisateur()
    {
        return $this->patient_idUtilisateur;
    }

    /**
     * @param mixed $nomPatient
     */
    public function setNomPatient($nomPatient)
    {
        $this->nomPatient = $nomPatient;
    }

    /**
     * @param mixed $prenomPatient
     */
    public function setPrenomPatient($prenomPatient)
    {
        $this->prenomPatient = $prenomPatient;
    }

    /**
     * @param mixed $ramqPatient
     */
    public function setRamqPatient($ramqPatient)
    {
        $this->ramqPatient = $ramqPatient;
    }

    /**
     * @param mixed $numSequence
     */
    public function setNumSequence($numSequence)
    {
        $this->numSequence = $numSequence;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @param mixed $sexePatient
     */
    public function setSexePatient($sexePatient)
    {
        $this->sexePatient = $sexePatient;
    }

    /**
     * @param mixed $courrielPatient
     */
    public function setCourrielPatient($courrielPatient)
    {
        $this->courrielPatient = $courrielPatient;
    }


}

