<?php

class PlageHoraire
{
    private $idPlageHoraire;
    private $jourSemaine;
    private $heureDebut;
    private $heureFin;

    /**
     * @param $idPlageHoraire
     * @param $jourSemaine
     * @param $heureDebut
     * @param $heureFin
     */
    public function __construct($idPlageHoraire, $jourSemaine, $heureDebut, $heureFin)
    {
        $this->idPlageHoraire = $idPlageHoraire;
        $this->jourSemaine = $jourSemaine;
        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
    }

    /**
     * @return mixed
     */
    public function getIdPlageHoraire()
    {
        return $this->idPlageHoraire;
    }

    /**
     * @return mixed
     */
    public function getJourSemaine()
    {
        return $this->jourSemaine;
    }

    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * @param mixed $jourSemaine
     */
    public function setJourSemaine($jourSemaine): void
    {
        $this->jourSemaine = $jourSemaine;
    }

    /**
     * @param mixed $heureDebut
     */
    public function setHeureDebut($heureDebut): void
    {
        $this->heureDebut = $heureDebut;
    }

    /**
     * @param mixed $heureFin
     */
    public function setHeureFin($heureFin): void
    {
        $this->heureFin = $heureFin;
    }

    public function __toString(){
        $message = "(#id: ".$this->idPlageHoraire.") jour: ".$this->jourSemaine."de ".$this->heureDebut." a ".$this->heureFin;
        return $message;
    }

}