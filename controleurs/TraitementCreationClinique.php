<?php


// Configuration de la connexion à la base de données (à adapter selon votre configuration)
/*
$dsn = 'mysql:host=localhost;dbname=mydb';
$username = 'root';
$password = 'root';*/

include_once(DOSSIER_BASE_INCLUDE . "controleurs/controleur.abstract.class.php");
include_once(DOSSIER_BASE_INCLUDE . "modele/DAO/UtilisateurDAO.class.php");

class TraitementCreationClinique extends Controleur
{


    // Implémentation de la méthode abstraite executerAction()
    public function executerAction()
    {
        try {

            if (isset($_POST['formulaireClinique'])) {
                $dsn = 'mysql:host=localhost;dbname=mydb';
                $username = 'root';
                $password = 'root';


                // Connexion à la base de données avec PDO
                $connexion = new PDO($dsn, $username, $password);


                /*
                //Configuration PDO pour rapport erreurs PDOException
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/

                //Récupération des données du formulaire
                $nomUtilisateur = $_POST['nomUtilisateur'];
                $motDePasse = $_POST['motDePasse'];
                $numRue = $_POST['numRue'];
                $nomRue = $_POST['nomRue'];
                $nomVille = $_POST['nomVille'];
                $nomClinique = $_POST['nomClinique'];
                $nomProvince = $_POST['nomProvince'];
                $codePostal = $_POST['codePostal'];
                $courrielClinique = $_POST['courrielClinique'];
                $telephoneClinique = $_POST['telephoneClinique'];

                //Insertion utilisateur dans la table des utilisateurs
                $requeteInsertionUtilisateur = "INSERT INTO utilisateur (username, password) VALUES (?, ?)";
                $stmtInsertUtilisateur = $connexion->prepare($requeteInsertionUtilisateur);
                $stmtInsertUtilisateur->execute([$nomUtilisateur, $motDePasse]);

                //Récupération ID de l'utilisateur nouvellement inséré
                $idUtilisateur = $connexion->lastInsertId();

                //Insertion adresse dans la table des adresses
                $requeteInsertionAdresse = "INSERT INTO adresse (numRue, nomRue, nomVille, nomProvince ,codePostal ) VALUES (?, ?, ?)";
                $stmtInsertAdresse = $connexion->prepare($requeteInsertionAdresse);
                $stmtInsertAdresse->execute([$numRue, $nomRue, $nomVille, $nomProvince, $codePostal]);

                //Récupération ID de l'adresse nouvellement insérée
                $idAdresse = $connexion->lastInsertId();

                //Utilisation de l'ID de l'utilisateur et de l'id de l'adresse et les autres champs pour création clinique
                $query_insert_clinique = "INSERT INTO clinique (nomClinique, courrielClinique,  telClinique, Clinique_idAdresse, Clinique_idUtilisateur ) VALUES (?, ?, ?, ?, ?)";
                $stmt_insert_clinique = $connexion->prepare($query_insert_clinique);
                $stmt_insert_clinique->execute([$nomClinique, $courrielClinique, $telephoneClinique, $idAdresse, $idUtilisateur]);

                echo "Clinique créée avec succès.";
                echo "<script>alert('Clinique créée avec succès.');</script>";
        // Redirection vers la page d'accueil
                //  header("Location: pageAccueil.php");


            }
        } catch (PDOException $e) {
            // Gestion des erreurs PDO
            echo 'Erreur lors de la connexion à la base de données : ' . $e->getMessage();
            echo "<script>alert('Erreur lors de la création de la clinique. Veuillez réessayer.');</script>";
        }


        $connexion = null;
       // return "pageAcceuil";

    }


}

?>