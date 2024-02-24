<?php
// Connexion à la base de données
$nom_utilisateur = "root";
$mot_passe = "root";
$configuration = "mysql:host=localhost;dbname=mydb";
$connexionBD = new PDO($configuration, $nom_utilisateur, $mot_passe);

// Récupération de la valeur du médecin sélectionné depuis la requête GET
$medecin = isset($_GET['listeMedecins']) ? $_GET['listeMedecins'] : '';

// Requête SQL pour récupérer les disponibilités du médecin sélectionné
$sql = "SELECT md.idDisponibilite, md.MD_idMedecin, m.Medecin_idClinique, md.MD_idPlageHoraire, ph.jourSemaines, ph.heureDebut, 
       ph.heureFin, md.statutDispo, md.MD_idServices FROM medecin_disponibilite AS md 
        INNER JOIN medecin AS m ON md.MD_idMedecin = m.idMedecin 
        INNER JOIN plagehoraire AS ph ON md.MD_idPlageHoraire = ph.idPlageHoraire 
        INNER JOIN clinique AS cl ON m.Medecin_idClinique = cl.idClinique
        WHERE md.MD_idMedecin = ?";
$stmt = $connexionBD->prepare($sql);

if ($stmt) {
    $stmt->execute(array($medecin));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Renvoi des disponibilités au format JSON
    echo json_encode($result);
} else {
    // Gestion des erreurs
    echo json_encode(array('error' => 'Erreur lors de la préparation de la requête'));
}
?>