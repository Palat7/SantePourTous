<?php

include_once (DOSSIER_BASE_INCLUDE."controllers/controller.abstract.class.php");
class Defaut extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function executerAction()
    {
        return "pageAcceuil";
    }
}

