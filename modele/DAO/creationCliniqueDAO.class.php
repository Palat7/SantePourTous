<?php


/* Description : DAO pour la classe InfoAccessoire de la BD automobile
 * Date        :
 * Auteur      :
*/

// ****** INLCUSIONS *******
// Importe l'interface DAO et de la classe InfoAccessoire
if (defined('DOSSIER_BASE_INCLUDE')) {
    include_once DOSSIER_BASE_INCLUDE . "modele/DAO/DAO.interface.php";
    include_once DOSSIER_BASE_INCLUDE . "modele/clinique.class.php";
} else {
    include_once "DAO.interface.php";
    include_once "../clinique.class.php";
    include_once "creationCliniqueDAO.class.php";
}

// ****** CLASSE *******
class creationCliniqueDAO implements DAO
{

    // Cette méthode doit retourner l'objet dont la clé primaire a été reçu en paramètre
    // Notes : 1) On retourne null si non-trouvé,
    //         2) Si la clé primaire est composée, alors le paramètre est un tableau assiociatif
    // ici la seule $clés est un int représentant le code du produit



    /*
    public static function chercher($cles)
    {
        // obtenir la connexion
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        // valeur par défaut pour la variable à retourner si non-trouvée
        //  $uneInfo = null;
        $tableau = array();
        // $tableauAutre = array();
        // Préparer une requête de type PDOStatement avec des paramètres SQL
        $requete = $connexion->prepare("SELECT nomMedecin, prenomMedecin, specMedecin, courrielMed, numProfession, typeFacturation  FROM medecin m join 
        clinique c on m.Medecin_idClinique = c.idClinique WHERE nomClinique =?");
        // Exécuter la requête
        $requete->execute(array($cles));
        // Analyser l’enregistrement, s’il existe, et créer l’instance du Produit
        // note on pourait aussi lancer une exception si on a plus d’un résultat …
        foreach ($requete as $enr) {
            $unMedecin = new Medecin($enr['nomMedecin'], $enr['prenomMedecin'], $enr['specMedecin'], $enr['courrielMed'],
                $enr['numProfession'], $enr['typeFacturation']);
            array_push($tableau, $unMedecin);
        }
        // fermer le curseur de la requête et la connexion à la BD
        $requete->closeCursor();
        ConnexionBD::close();
        return $tableau;
    }

*/




    /*

    // Cette méthode doit retourner une liste de tous les objets reliés à la table de la BD
    static public function chercherTous()
    {
        return self::chercherAvecFiltre("");
    }

    // Comme la méthode chercherTous, mais en applicant le filtre (clause WHERE ...) reçue en param.
    static public function chercherAvecFiltre($filtre)
    {
        // obtenir la connexion
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        // initialisation du tableau vide
        $tableau = [];
        // Préparer une requête de type PDOStatement avec des paramètres SQL
        $requete = $connexion->prepare("SELECT * FROM info_accessoire " . $filtre);
        // Exécuter la requête
        $requete->execute();
        // Analyser les enregistrements s'il y en a
        foreach ($requete as $enr) {
            $uneInfo = new InfoAccessoire($enr['code'], $enr['nom'], $enr['prix_unitaire_suggere']);
            array_push($tableau, $uneInfo);
        }
        // fermer le curseur de la requête et la connexion à la BD
        $requete->closeCursor();
        ConnexionBD::close();
        return $tableau;
    }
*/
    static function inserer($uneClinique)
    {
        // on essaie d’établir la connexion
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        // On prépare la commande insert
        $requete = $connexion->prepare("INSERT INTO info_accessoire (code,nom,prix_unitaire_suggere) VALUES (?,?,?)");
        // On l’exécute, et on retourne l’état de réussite (true/false)
        $tableauInfos = [$uneInfo->getCode(), $uneInfo->getNom(), $uneInfo->getPrixUnitaireSuggere()];
        return $requete->execute($tableauInfos);
    }





    // Cette méthode modifie tous les champs (non-clé primaire) de l'objet reçu en paramètre dans la table
    // Retourne true/false selon que l'opération a été un succès ou pas.
    static public function modifier($uneInfo)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        // On prépare la commande insert
        $requete = $connexion->prepare("UPDATE info_accessoire SET nom=?,prix_unitaire_suggere=? WHERE code=?");
        // On l’exécute, et on retourne l’état de réussite (true/false)
        $tableauInfos = [$uneInfo->getNom(), $uneInfo->getPrixUnitaireSuggere(), $uneInfo->getCode()];
        return $requete->execute($tableauInfos);
    }

    // Cette méthode supprime l'objet reçu en paramètre de la table
    // Retourne true/false selon que l'opération a été un succès ou pas.
    static public function supprimer($uneInfo)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }
        // On prépare la commande insert
        $requete = $connexion->prepare("DELETE FROM info_accessoire WHERE code=?");
        // On l’exécute, et on retourne l’état de réussite (true/false)
        $tableauInfos = [$uneInfo->getCode()];
        return $requete->execute($tableauInfos);
    }

}

