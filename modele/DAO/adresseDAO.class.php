<?php
if(defined('DOSSIER_BASE_INCLUDE')){
    include_once DOSSIER_BASE_INCLUDE."models/DAO/DAO.interface.php";
} else{
    include_once "DAO.interface.php";
}
class adresseDAO implements DAO
{

    public static function chercher($id)
    {try {
        $connexion = ConnexionBD::getInstance();
    } catch (Exception $e) {
        throw new Exception("Impossible d'obtenir la connexion à la BD.");
    }

    $unAdresse = null;

    $requete = $connexion->prepare("SELECT * FROM adresse WHERE idAdresse = ?");
    $requete->execute(array($id));

    if ($requete->rowCount() != 0) {
        $enr = $requete->fetch();
        $unAdresse = new adresse($enr['$idAdresse'], $enr['$numRue'], $enr['nomRue'], $enr['nomVille'], $enr['nomProvince'], $enr['codePostal'] );
    }

    $requete->closeCursor();
    ConnexionBD::close();

    return $unAdresse;
    }

    public static function chercherAvecFiltre($filtre)
    {
        {
            try {
                $connexion = ConnexionBD::getInstance();
            } catch (Exception $e) {
                throw new Exception("Impossible d'obtenir la connexion à la BD.");
            }
    
            $tableau = array();
    
            $requete = $connexion->prepare("SELECT * FROM adresse " . $filtre);
            $requete->execute();
    
            foreach ($requete as $enr) {
                $unAdresse = new adresse ($enr['idAdresse'], $enr['$numRue'], $enr['nomRue'], $enr['nomVille'], $enr['nomProvince'], $enr['codePostal']);
                array_push($tableau, $unAdresse   );
            }
    
            $requete->closeCursor();
            ConnexionBD::close();
    
            return $tableau;
        }    }

    public static function chercherTous()
    {
        return self::chercherAvecFiltre("");
    }

    public static function inserer($unAdresse)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }
        $requete=$connexion->prepare("INSERT INTO adresse () value (?,?,?, ?, ?, ?)");
        $tableauInfosPat=[ $unAdresse->getnumRue(),$unAdresse->getnomRue(),$unAdresse->getnomVille(), $unAdresse->getnomProvince(), $unAdresse->getcodePostal()];
        return $requete->execute($tableauInfosPat);    }

    public static function modifier($unAdresse)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete = $connexion->prepare("UPDATE adresse SET password=? WHERE numRue=?");
        $tableauInfos = array ($unAdresse->getDateMessage(), $unAdresse->getnomRue(),$unAdresse->getDestinataire(),$unAdresse->getSujet(), $unAdresse->getContenu(), $unAdresse->getStatutOuvert(), $unAdresse->getStatutFerme());

        return $requete->execute($tableauInfos);
    }

    static public function supprimer($unAdresse)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete = $connexion->prepare("DELETE FROM adresse WHERE numRue =?");
        $tableauInfos = array ($unAdresse->getnumRue(), $unAdresse->getnomRue(),$unAdresse->getnomVille(),$unAdresse->getnomProvince(), $unAdresse->getcodePostal());
        return $requete->execute($tableauInfos);    }

    

}
