<?php

if (defined('DOSSIER_BASE_INCLUDE')) {
    include_once DOSSIER_BASE_INCLUDE."models/utilisateur.class.php";
} else {
    include_once "utilisateur.class.php";
}
class messages
{
   private $idMessage;
   private $dateMessage;

   private $idExpediteur; 
   private $idDestinataire; 
   private $sujet;

   private $contenu; 

   private $fichierAdjoint; 
   private $statutOuvert;

   private $statutSupprime;

    /**
     * @param $idMessage
     * @param $dateMessage
     * @param $idExpediteur
     * @param $idDestinataire
     * @param $sujet
     * @param $contenu 
     * @param $fichierAdjoint 
     * @param $statutOuvert 
     * @param $statutSupprime  $name $name
     * 
     */
    public function __construct($idMessage, $dateMessage, $idExpediteur, $idDestinataire, $sujet, $contenu, $fichierAdjoint, $statutOuvert, $statutSupprime)
    {

        $this ->idMessage = $idMessage;
        $this ->dateMessage = $dateMessage;
        $this ->idExpediteur = $idExpediteur;
        $this ->idDestinataire = $idDestinataire;
        $this ->sujet = $sujet;
        $this ->contenu = $contenu;
        $this ->fichierAdjoint = $fichierAdjoint;
        $this ->statutOuvert = $statutOuvert;
        $this ->statutSupprime = $statutSupprime;

    }


    /**
     * @return mixed
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * @return mixed
     */
    public function getDateMessage()
    {
        return $this->dateMessage;
    }

    /**
     * @return mixed
     */
    public function getIdExpediteur()
    {
        return $this->idExpediteur;
    }

    /**
     * @return mixed
     */
    public function getIdDestinataire()
    {
        return $this->idDestinataire;
    }

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @return mixed
     */
    public function getFichierAdjoint()
    {
        return $this->fichierAdjoint;
    }

    /**
     * @return mixed
     */
    public function getStatutOuvert()
    {
        return $this->statutOuvert;
    }

    /**
     * @return mixed
     */
    public function getStatutSupprime()
    {
        return $this->statutSupprime;
    }

  

    /**
     * @param mixed $dateMessage
     */
    public function setDateMessage ($dateMessage)
    {
        $this->dateMessage = $dateMessage;
    }

    /**
     * @param mixed $idExpediteur
     */
    public function setIdExpediteur($idExpediteur)
    {
        $this->idExpediteur = $idExpediteur;
    }

    /**
     * @param mixed $idDestinataire
     */
    public function setIdDestinataire($idDestinataire)
    {
        $this->idDestinataire = $idDestinataire;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu  = $contenu;
    }

    /**
     * @param mixed $fichierAdjoint
     */
    public function setfichierAdjoint($fichierAdjoint)
    {
        $this->fichierAdjoint = $fichierAdjoint;
    }

    /**
     * @param mixed $statutOuvert
     */
    public function setStatutOuvert($statutOuvert)
    {
        $this->statutOuvert = $statutOuvert;
    }

 /**
     * @param mixed $statutSupprime
     */   public function setStatutSupprime ($statutSupprime)
   {
       $this->statutSupprime = $statutSupprime;
   }


}

