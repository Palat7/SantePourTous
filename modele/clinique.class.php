<?php

class Clinique
{





    private $idClinique;
    private $nomClinique;
    private $courrielClinique;
    private $telClinique;
    private $Clinique_idAdresse;
    private $Clinique_idUtilisateur;




    public function __construct($nomClinique, $courrielClinique, $telClinique, $Clinique_idAdresse, $Clinique_idUtilisateur)
    {
        $this->nomClinique = $nomClinique;
        $this->courrielClinique = $courrielClinique;
        $this->telClinique = $telClinique;
        $this->Clinique_idAdresse = $Clinique_idAdresse;
        $this->Clinique_idUtilisateur = $Clinique_idUtilisateur;

    }


    /**
     * @return mixed
     */
    public function getIdClinique()
    {
        return $this->idClinique;
    }

    /**
     * @return mixed
     */
    public function getNomClinique()
    {
        return $this->nomClinique;
    }

    /**
     * @return mixed
     */
    public function getCourrielClinique()
    {
        return $this->courrielClinique;
    }

    /**
     * @return mixed
     */
    public function getTelClinique()
    {
        return $this->telClinique;
    }

    /**
     * @return mixed
     */
    public function getCliniqueIdAdresse()
    {
        return $this->Clinique_idAdresse;
    }

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->Clinique_idUtilisateur;
    }

    public function setNomClinique($nomClinique)
    {
        $this->nomClinique= $nomClinique;
    }

    public function setCourrielClinique($courrielClinique)
    {
        $this->courrielClinique= $courrielClinique;
    }


    public function setTelClinique($telClinique)
    {
        $this->telCliniqueClinique= $telClinique;
    }

    public function setCliniqueIdAdresse($idAdresseClinique)
    {
        $this->Clinique_idAdresse= $idAdresseClinique;
    }


    public function setIdUtilisateurClinique($idUtilisateurClinique)
    {
        $this->Clinique_idUtilisateur= $idUtilisateurClinique;
    }




}