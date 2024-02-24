<!-- On redirige vers l'inde du site si on essaie d'avoir une accès direct -->
<?php if (!isset($controleur)) header("Location: ..\index.php"); ?>

<!DOCTYPE html>


<!-- 	

  Groupe 1
  Labo #6 : Vue pour l'Architecture MVC
  Auteur : 
   
-->
<html lang="fr">
<head>
    <meta charset="UTF-8"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha384-GLhlTQ8i04FZ5L5nfsO6AvmokBP4tuKKA8fNEH+9QF2t4E+Em/kisjFQV5trn2x4" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Leckerli One">
    <title>Liste des médecins</title>
    <link rel="stylesheet" href="<?php echo DOSSIER_BASE_LIENS;?>assets/css/styleRetouche.css" />



    <style>

        footer {

            padding: 20px 0;
           width: 100%;
            position: fixed;
           bottom: 0;
        }


        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            padding: 10px;
            text-align: center;
        }

        /* Bordure */
        th, td {
            border: 1px solid #ddd;
        }

        /* Style entête */
        th {
            background-color: #f2f2f2;
        }

        /* mise en surbrillance des lignes au survol */
        tr:hover {
            background-color: #f5f5f5;
        }


    </style>
</head>
<body>

<!--Adaptation du CSS à faire-->


<nav class="navbar navbar-expand-lg bg-body-tertiary fs-5 m-0 p-0 ">
    <div class="container-fluid">
        <!--Une div a été rajoutée ici pour mettre ensemble côte à côte le logo et le texte
         légère différence donc par rapport à la page d'accueil de médecin et clinique.
         La classe d-flex offre une disposition flexible et align-items-center permet de centrer
         verticalement les éléments-->
        <div class="d-flex align-items-center">
            <a class="navbar-brand fw-bold" href="?action=seConnecterClinique.php">
                <img src="<?php echo DOSSIER_BASE_LIENS;?>assets/images/Logo4.png" alt="SantéPourTous Logo">
            </a>
            <a class="navbar-brand fw-bold textLogo me-5" href="?action=seConnecterClinique.php">SantéPourTous</a>
        </div>
    </div>
</nav>



    <div class="zone_centre">
        <div class="contenu_centre_petit">
            <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center">Liste des Medecins de la clinique <?php echo $_SESSION['utilisateurConnecte'] ; ?></h2>
            <div>
                <?php
                // ==================== Utilisation des fonctions d'affichage =====================
                include DOSSIER_BASE_INCLUDE . "/vues/inclusions/fonctions.inc.php";


                $leTableau = $controleur->getTabMedecins();
                if ($leTableau == null) {

                    echo "Aucun medecin ne figure dans cette clinique";
                } else {
                    afficherTableMedecins($leTableau);
                }
                ?>
            </div>
        </div>
    </div>



<footer>
    <div class="footer">
        <p>&copy; 2023 SANTÉPOURTOUS. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>

    </div>

</footer>

</body>
</html>
