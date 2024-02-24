<?php
// Connexion à la base de données
$nom_utilisateur = "root";
$mot_passe = "root";
$configuration = "mysql:host=localhost;dbname=mydb";
$connexionBD = new PDO($configuration, $nom_utilisateur, $mot_passe);

// Récupération de la valeur de la clinique sélectionnée depuis la requête GET
$clinique = isset($_GET['clinique']) ? $_GET['clinique'] : '';

// Requête SQL pour récupérer les médecins en fonction de la clinique sélectionnée
$sql = "SELECT idMedecin, nomMedecin FROM medecin WHERE Medecin_idClinique = ?";
$stmt = $connexionBD->prepare($sql);

$options_medecins = '';

if ($stmt) {
    $stmt->execute(array($clinique));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        // Ajout de chaque médecin comme une option dans la liste déroulante
        $options_medecins .= "<option value='" . $row["idMedecin"] . "'>". $row["idMedecin"]  . $row["nomMedecin"];
    }
    // Renvoi des options des médecins au format JSON
    //Revoir
    echo json_encode($options_medecins);
} else {
    // Gestion des erreurs
    echo '<option value="">Erreur lors de la préparation de la requête</option>';
}
?>
