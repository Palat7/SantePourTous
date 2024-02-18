<?php

if(defined('DOSSIER_BASE_INCLUDE')){
    include_once DOSSIER_BASE_INCLUDE."models/DAO/DAO.interface.php";
    include_once DOSSIER_BASE_INCLUDE . "models/medecin.class.php";
} else{
    include_once "DAO.interface.php";
    include_once "../medecin.class.php";
}


class medecinDAO implements DAO
{

    public static function chercher($cles)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $unMedecin = null;

        $requete = $connexion->prepare("SELECT * FROM medecin WHERE nomMedecin = ?");


        $requete->execute(array($cles));

        if ($requete->rowCount() != 0) {
            $enr = $requete->fetch();
            $unMedecin = new Medecin($enr['idMedecin'], $enr['nomMedecin'], $enr['prenomMedecin'], $enr['specMedecin'], $enr['courrielMedecin'], $enr['numProfession'], $enr['typeFacturation']);
        }
        $requete->closeCursor();
        ConnexionBD::close();
        return $unMedecin;
    }

    static public function chercherTous()
    {
        return self::chercherAvecFiltre("");
    }

    public static function chercherAvecFiltre($filtre)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $tableau=[];
        $requete=$connexion->prepare("SELECT * FROM medecin ".$filtre);
        $requete->execute();

        foreach ($requete as $enr) {
            $unMedecin=new Medecin( $enr['nomMedecin'], $enr['prenomMedecin'], $enr['specMedecin'], $enr['courrielMedecin'], $enr['numProfession'], $enr['typeFacturation']);
            array_push($tableau,$unMedecin);
        }
        $requete-> closeCursor();
        ConnexionBD::close();
        return $tableau;
    }

    public static function inserer($unMedecin)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }
        $requete=$connexion->prepare("INSERT INTO medecin (nomMedecin, prenomMedecin, specMedecin, courrielMedecin, numProfession, typeFacturation) value (?,?,?,?,?,?)");
        $tableauInfosMed=[$unMedecin->getNomMedecin(), $unMedecin->getPrenomMedecin(),$unMedecin->getSpecMedecin(), $unMedecin->getCourrielMedecin(), $unMedecin->getNumProfession(), $unMedecin->getTypeFacturation()];
        return $requete->execute($tableauInfosMed);
    }

    public static function modifier($unMedecin)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }
        $requete=$connexion->prepare("UPDATE medecin SET nomMedecin=?, prenomMedecin=?, specMedecin=?, courrielMedecin=?, numProfession=?, typeFacturation=? WHERE idMedecin=?");
        $tableauInfosMed = [$unMedecin->getNomMedecin(), $unMedecin->getPrenomMedecin(),$unMedecin->getSpecMedecin(), $unMedecin->getCourrielMedecin(), $unMedecin->getNumProfession(), $unMedecin->getTypeFacturation() ];
        return $requete->execute($tableauInfosMed);
    }
    public static function supprimer($unMedecin)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete=$connexion->prepare("DELETE FROM info_accessoire WHERE idMedecin=?");
        $tableauInfosMed=[$unMedecin->getCode()];
        return $requete->execute($tableauInfosMed);
    }
}