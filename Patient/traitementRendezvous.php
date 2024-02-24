<?php
// Connexion à la base de données
global $sql;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Création la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Récupération des données du formulaire
$raisonRV = $_POST['raisonRV'];
$description = $_POST['description'];
$idDisponibilite = $_POST['idDisponibilite'];
$idMedecin = $_POST['idMedecin'];
$idClinique = $_POST['idClinique'];
$jourSemaine = $_POST['jourSemaine'];
//Devra être récupéré à partir de la session, modification à faire
//$idPatient = $_POST['idPatient'];
$idPatient = 1;
// Préparation et exécution de la requête d'insertion
$sql = "INSERT INTO rendezvous (dateRDV, raisonRdv, detailsRdv, RDV_idPatient, RDV_idMedecin, RDV_idClinique, RDV_idDisponibilite) 
        VALUES ('$jourSemaine', '$raisonRV', '$description', '$idPatient' , '$idMedecin', '$idClinique', '$idDisponibilite')";


if ($conn->query($sql) === TRUE) {
// Mise à jour du champ statutDispo de la disponibilité réservée
    $sqlUpdateDispo = "UPDATE medecin_disponibilite SET statutDispo = 'NON' WHERE idDisponibilite = '$idDisponibilite'";
    if ($conn->query($sqlUpdateDispo) === TRUE) {

        echo "Rendez-vous pris avec succès !";





    }
} else {
    echo "Erreur lors de la prise de rendez-vous : " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
