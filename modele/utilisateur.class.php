<?php

class Utilisateur
{
    private $idUtilisateur;

    // private $firstLogin = true;
    private $firstLogin;
    private $password;
    private $username;
    //  private $typeUtilisateur;

    /*
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
*/

    /*
        public function __construct($idUtilisateur, $firstLogin, $username, $password)
        {
            $this->username = $username;
            $this->password = $password;

            //  $this->typeUtilisateur = $typeUtilisateur;
            $this->idUtilisateur = $idUtilisateur;
            $this->$firstLogin = $firstLogin;
        }
    */


    public function __construct( $username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        //  $this->typeUtilisateur = $typeUtilisateur;
        /*
       $this->idUtilisateur = $idUtilisateur;
        $this->$firstLogin = $firstLogin;
        */
    }

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getTypeUtilisateur()
    {
        return $this->typeUtilisateur;
    }


    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function __toString(){
        return "Nom d'utilisateur: " . $this->username . ", Mot de passe: " . $this->password . ", Type d'utilisateur: " . $this->typeUtilisateur;
    }

    public function  verifierMotPasse($motPassefourni){

        return $this->password === $motPassefourni;

    }

}