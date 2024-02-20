<?php

if(defined('DOSSIER_BASE_INCLUDE')){
    include_once DOSSIER_BASE_INCLUDE."models/DAO/DAO.interface.php";
    include_once DOSSIER_BASE_INCLUDE . "models/patient.class.php";
} else{
    include_once "DAO.interface.php";
    include_once "../patient.class.php";
}
class patientDAO implements DAO
{

    static public function chercher($id)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d'obtenir la connexion à la BD.");
        }

        $unUtilisateur = null;

        $requete = $connexion->prepare("SELECT * FROM patient WHERE idPatient = ?");
        $requete->execute(array($id));

        if ($requete->rowCount() != 0) {
            $enr = $requete->fetch();
            $unPatient = new Patient($enr['idPatient'], $enr['$nomPatient'], $enr['prenomPatient'], $enr['ramqPatient'], $enr['numSequence'], $enr['dateNaissance'], $enr['sexePatient'], $enr['courrielPatient']);
        }

        $requete->closeCursor();
        ConnexionBD::close();

        return $unPatient;

    }

    static public function chercherTous()
    {
        return self::chercherAvecFiltre("");
    }

    static public function chercherAvecFiltre($filtre)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d'obtenir la connexion à la BD.");
        }

        $tableau = array();

        $requete = $connexion->prepare("SELECT * FROM patient " . $filtre);
        $requete->execute();

        foreach ($requete as $enr) {
            $unPatient = new Patient($enr['$nomPatient'], $enr['prenomPatient'], $enr['ramqPatient'], $enr['numSequence'], $enr['dateNaissance'], $enr['sexePatient'], $enr['courrielPatient']);
            array_push($tableau, $unPatient);
        }

        $requete->closeCursor();
        ConnexionBD::close();

        return $tableau;
    }

    static public function inserer($unPatient)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }
        $requete=$connexion->prepare("INSERT INTO patient () value (?,?,?,?,?,?)");
        $tableauInfosPat=[$unPatient->getNomPatient(), $unPatient->getPrenomPatient(),$unPatient->getRamqPatient(), $unPatient->getNumSequence(), $unPatient->getDateNaissance(), $unPatient->getSexePatient(), $unPatient->CourrielPatient()];
        return $requete->execute($tableauInfosPat);
    }

    static public function modifier($unPatient)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete = $connexion->prepare("UPDATE patient SET password=? WHERE nomPatient=?");
        $tableauInfos = array($unPatient->getNomPatient(), $unPatient->getPrenomPatient(),$unPatient->getRamqPatient(), $unPatient->getNumSequence(), $unPatient->getDateNaissance(), $unPatient->getSexePatient(), $unPatient->CourrielPatient());
        return $requete->execute($tableauInfos);
    }

    static public function supprimer($unPatient)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete = $connexion->prepare("DELETE FROM patient WHERE nomPatient=?");
        $tableauInfos = array($unPatient->getNomPatient());
        return $requete->execute($tableauInfos);
    }

}