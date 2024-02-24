<?php

abstract class Controller
{
    protected $messagesErreur =array();

    protected $acteur="visiteur";

    public function __construct(){$this->determinerActeur();}

    /**
     * @return array
     */
    public function getMessagesErreur()
    {
        return $this->messagesErreur;
    }

    /**
     * @return string
     */
    public function getActeur()
    {
        return $this->acteur;
    }

 abstract public function executerAction();

    private function determinerActeur()
    {
        session_start();
        if(isset($SESSION['utilisateurConnecte'])){
            $this->acteur="utilisateur";
        }
    }


}