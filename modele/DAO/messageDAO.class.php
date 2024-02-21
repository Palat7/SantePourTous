<?php
if(defined('DOSSIER_BASE_INCLUDE')){
    include_once DOSSIER_BASE_INCLUDE."models/DAO/DAO.interface.php";
    include_once DOSSIER_BASE_INCLUDE . "models/utilisateur.class.php";
} else{
    include_once "DAO.interface.php";
    include_once "../utilisateur.class.php";
}
class messageDAO implements DAO
{

    public static function chercher($id)
    {try {
        $connexion = ConnexionBD::getInstance();
    } catch (Exception $e) {
        throw new Exception("Impossible d'obtenir la connexion à la BD.");
    }

    $unMessage = null;

    $requete = $connexion->prepare("SELECT * FROM Messages WHERE idMessages = ?");
    $requete->execute(array($id));

    if ($requete->rowCount() != 0) {
        $enr = $requete->fetch();
        $unMessage = new Message($enr['$idMessage'], $enr['$dateMessage'], $enr['idExpediteur'], $enr['idDestinataire'], $enr['sujet'], $enr['contenu'], $enr['fichierAdjoint'], $enr['statutOuvert'], $enr['statutSupprime']);
    }

    $requete->closeCursor();
    ConnexionBD::close();

    return $unMessage;
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
    
            $requete = $connexion->prepare("SELECT * FROM Messages " . $filtre);
            $requete->execute();
    
            foreach ($requete as $enr) {
                $unMessage = new Message ($enr['$dateMessage'], $enr['idExpediteur'], $enr['idDestinataire'], $enr['sujet'], $enr['contenu'], $enr['fichierAdjoint'], $enr['statutOuvert'], $enr ['statutSupprime']  );
                array_push($tableau, $unMessage   );
            }
    
            $requete->closeCursor();
            ConnexionBD::close();
    
            return $tableau;
        }    }

    public static function chercherTous()
    {
        return self::chercherAvecFiltre("");
    }

    public static function inserer($unMessage)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }
        $requete=$connexion->prepare("INSERT INTO Messages () value (?,?,?, ?, ?, ?)");
        $tableauInfosPat=[$unMessage->getDateMessage(), $unMessage->getIdExpediteur(),$unMessage->getDestinataire(),$unMessage->getSujet(), $unMessage->getContenu(), $unMessage->getStatutOuvert(), $unMessage->getStatutFerme()];
        return $requete->execute($tableauInfosPat);    }

    public static function modifier($unMessage)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete = $connexion->prepare("UPDATE Messages SET password=? WHERE dateMessage=?");
        $tableauInfos = array ($unMessage->getDateMessage(), $unMessage->getIdExpediteur(),$unMessage->getDestinataire(),$unMessage->getSujet(), $unMessage->getContenu(), $unMessage->getStatutOuvert(), $unMessage->getStatutFerme());

        return $requete->execute($tableauInfos);
    }

    static public function supprimer($unMessage)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter a la BD.");
        }

        $requete = $connexion->prepare("DELETE FROM Messages WHERE jourSemaine=?");
        $tableauInfos = array ($unMessage->getDateMessage(), $unMessage->getIdExpediteur(),$unMessage->getDestinataire(),$unMessage->getSujet(), $unMessage->getContenu(), $unMessage->getStatutOuvert(), $unMessage->getStatutFerme());
        return $requete->execute($tableauInfos);    }

    

}
