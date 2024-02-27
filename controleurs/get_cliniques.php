<?php
//Connexion à la base de données
$nom_utilisateur = "root";
$mot_passe = "root";
$configuration = "mysql:host=localhost;dbname=mydb";
$connexionBD = new PDO($configuration, $nom_utilisateur, $mot_passe);
// Récupération de la valeur de la ville sélectionnée depuis la requête GET
$ville = isset($_GET['ville']) ? $_GET['ville'] : '';

//Requête SQL pour récupérer les cliniques en fonction de la ville sélectionnée
$sql = "SELECT idClinique, nomClinique FROM clinique AS c INNER JOIN adresse AS a ON c.Clinique_idAdresse = a.idAdresse WHERE a.nomVille = ?";
$stmt = $connexionBD->prepare($sql);

$options_cliniques = '';

if ($stmt) {
    $stmt->execute(array($ville));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        //Ajout de chaque clinique au tableau d'options
        $options_cliniques .= "<option value='" . $row["idClinique"] . "'>" . $row["idClinique"] . " - " . $row["nomClinique"];
    }

    //Renvoi des options des cliniques au format JSON
    echo json_encode($options_cliniques);
} else {

    echo json_encode(['<option value="">Erreur lors de la préparation de la requête</option>']);
}
?>