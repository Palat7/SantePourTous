<?php

if(defined('DOSSIER_BASE_INCLUDE')){
    include_once DOSSIER_BASE_INCLUDE."modele/DAO/DAO.interface.php";
    include_once DOSSIER_BASE_INCLUDE."modele/utilisateur.class.php";
} else{
    include_once "DAO.interface.php";
    include_once "../utilisateur.class.php";
}

class UtilisateurDAO implements DAO
{
    public static function chercher($cles)
    {
        try{
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e){
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $unUtilisateur = null;

        $requete = $connexion->prepare("SELECT * FROM utilisateur WHERE username = ?");
        $requete->execute(array($cles));

        if ($requete->rowCount() !=0){
            $enr = $requete->fetch();
           // $unUtilisateur = new Utilisateur($enr['idUtilisateur'], $enr['firstLogin'],$enr['username'], $enr['password']);
            $unUtilisateur = new Utilisateur($enr['username'], $enr['password']);
        }

        $requete->closeCursor();
        ConnexionBD::close();

        return $unUtilisateur;
    }






    public static function chercherTous()
    {
        return self::chercherAvecFiltre("");
    }

    public static function chercherAvecFiltre($filtre)
    {
        try{
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e){
            throw new Exception("Impossible de se connecter a la BD.");
        }
        $tableau = array();

        $requete = $connexion->prepare("SELECT * FROM utilisateur " . $filtre);
        $requete->execute();

        foreach ($requete as $enr) {
            $unUtilisateur = new Utilisateur($enr['username'], $enr['password'], $enr['typeUtilisateur']);
            array_push($tableau, $unUtilisateur);
        }

        $requete->closeCursor();
        ConnexionBD::close();

        return $tableau;
    }

    public static function inserer($unUtilisateur)
    {
        try{
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e){
            throw new Exception("Impossible de se connecter a la BD.");
        }


        //Constructeur à ajuster
        $requete = $connexion->prepare("INSERT INTO utilisateur (username, password, typeUtilisateur) VALUE (?, ?, ?) ");
        $tableauInfos = array($unUtilisateur->getPassword(),$unUtilisateur->getUsername(), $unUtilisateur->getTypeUtilisateur());
        return $requete->execute($tableauInfos);
    }



    public static function modifier($unUtilisateur)
    {
        try{
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e){
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete = $connexion->prepare("UPDATE utilisateur SET password=? WHERE username=?");
        $tableauInfos = array($unUtilisateur->getPassword(),$unUtilisateur->getUsername(), $unUtilisateur->getTypeUtilisateur());
        return $requete->execute($tableauInfos);

    }

    public static function supprimer($unUtilisateur)
    {
        try{
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e){
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete = $connexion->prepare("DELETE FROM utilisateur WHERE username=?");
        $tableauInfos = array($unUtilisateur->getUsername());
        return $requete->execute($tableauInfos);
    }
}