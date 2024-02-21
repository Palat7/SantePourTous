<?php

class adresse{

    private $idAdresse;
    private $numRue;
    private $nomRue;
    private $nomVille;
    private $nomProvince;
    private $codePostal;

    /**
     * @param $idAdresse
     * @param $numRue
     * @param $nomRue
     * @param $nomVille
     * @param $nomProvince
     * @param $codePostal
     */


    public function __construct($idAdresse, $numRue, $nomRue, $nomVille, $nomProvince, $codePostal)
    {
        $this->idAdresse = $idAdresse;
        $this->numRue = $numRue;
        $this->nomRue = $nomRue;
        $this->nomVille = $nomVille;
        $this->nomProvince = $nomProvince;
        $this->codePostal = $codePostal;
    }


    /**
     * @return mixed
     */
    public function getIdAdresse()
    {
        return $this->idAdresse;
    }

    /**
     * @return mixed
     */
    public function getnumRue()
    {
        return $this->numRue;
    }

    /**
     * @return mixed
     */
    public function getnomRue()
    {
        return $this->nomRue;
    }

    /**
     * @return mixed
     */
    public function getnomVille()
    {
        return $this->nomVille;
    }

    /**
     * @return mixed
     */
    public function getnomProvince()
    {
        return $this->nomProvince;
    }

    /**
     * @return mixed
     */
    public function getcodePostal()
    {
        return $this->codePostal;
    }

   
    /**
     * @param mixed $numRue
     */
    public function setnumRue($numRue)
    {
        $this->numRue = $numRue;
    }

    /**
     * @param mixed $nomRue
     */
    public function setnomRue($nomRue)
    {
        $this->nomRue = $nomRue;
    }

    /**
     * @param mixed $nomVille
     */
    public function setnomVille($nomVille)
    {
        $this->nomVille = $nomVille;
    }

    /**
     * @param mixed $nomProvince
     */
    public function setnomProvince($nomProvince)
    {
        $this->nomProvince = $nomProvince;
    }

    /**
     * @param mixed $codePostal
     */
    public function setcodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }


}