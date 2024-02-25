<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prise de rendez-vous</title>


    <link rel="stylesheet" href="../assets/css/styleRetouche.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha384-GLhlTQ8i04FZ5L5nfsO6AvmokBP4tuKKA8fNEH+9QF2t4E+Em/kisjFQV5trn2x4" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Leckerli One">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!--Librairie inputMask pour le champs du numéro de téléphone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

    <!--
    <link rel="stylesheet" href="styleRetouche.css">
-->



    <style>


        .professionnelSection {
            /* Masqué par défaut */
            display: none;
        }

        .rechercheSection {
            /* Masqué par défaut */
            display: none;
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

        /*surbrillance des lignes au survol */
        tr:hover {
            background-color: #f5f5f5;
        }



        label.error {
            color: red;
            /* Taille de la police des labels d'erreur */
            font-size: 10px;
            /* Espace supplémentaire au-dessus du message d'erreur */
        }


    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary fs-5 m-0 p-0 ">
    <div class="container-fluid">
        <!--Une div a été rajoutée ici pour mettre ensemble côte à côte le logo et le texte
         légère différence donc par rapport à la page d'accueil de médecin et clinique.
         La classe d-flex offre une disposition flexible et align-items-center permet de centrer
         verticalement les éléments-->
        <div class="d-flex align-items-center">

            <a class="navbar-brand fw-bold" href="PageAccueilMedecin.html">
                <img src="../assets/images/Logo4.png" alt="SantéPourTous Logo">
            </a>



            <a class="navbar-brand fw-bold textLogo me-5" href="vues/pageAcceuil.php">SantéPourTous</a>
        </div>
    </div>
</nav>


<div class="container mt-5 ">


    <h1 class="text-center mb-5">Prise de Rendez-vous</h1>
    <form name="rendezVous" method="post" action="traitement_rendezvous.php">
        <div class="mb-3">

            <!--
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" readonly> -->

            <label for="raisonRV">Veuillez indiquer la raison svp :</label>
            <select id="raisonRV" name="raisonRV">
                <option value="urgenceMineure">urgence mineure</option>
                <option value="consultationPrioritaire">consultation prioritaire</option>
                <option value="suiviPeriodiqueOuPreventif">suivi périodique ou préventif</option>
                <option value="suiviRegulier">suivi régulier</option>
                <option value="suiviDeGrossesse">suivi de grossesse</option>
                <option value="suiviEnfant">suivi d’un enfant 0 à 5 ans</option>
            </select>
        </div>

        <br><br>


        <div class="mb-3" style="display: flex ">
            <label for="descriptionRaisonRV" class="form-label">Description :</label>

            <textarea id="descriptionRaisonRV" name="description" rows="4" cols="50"></textarea>
            <br><br>

        </div>


        <div class="mb-3" style="display: flex; flex-direction: column ">

            <div>
                <input type="radio" id="monProfessionnel" name="choixMedecin">

                <label for="monProfessionnel" class="form-label"> Mon professionnel de santé</label>
            </div>
            <div>
                <input type="radio" id="autreMedecinDeMonGMF" name="choixMedecin">
                <label for="autreMedecinDeMonGMF" class="form-label"> Autre médecin de mon groupe de médecin de
                    famille</label>
            </div>
            <div>
                <input type="radio" id="autreProfessionnelHorsGMF" name="choixMedecin">
                <label for="autreProfessionnelHorsGMF" class="form-label"> Autre professionnel en dehors de mon groupe
                    de
                    médecin de famille</label>
            </div>
        </div>


        <div id="sectionMesProfessionnels" class="professionnelSection">
            <!-- boutons radio pour la section -->
            <input type="radio" id="monMedecinFamille" name="choixParmiMesProfessionnels">
            <label for="monMedecinFamille">Mon médecin de famille</label>

            <input type="radio" id="monInfirmiere" name="choixParmiMesProfessionnels">
            <label for="monInfirmiere">Mon infirmière spécialisée</label>

            <input type="radio" id="monMedecinResident" name="choixParmiMesProfessionnels">
            <label for="monMedecinResident">Mon médecin résident</label>

        </div>


        <div id="sectionRecherche" class="rechercheSection">
            <h4 style="text-align: center">Veuillez spécifier vos critères de recherche</h4>
            <br>

            <label for="choixVille">Choix de la ville </label>


            <select name="ville" size="1" id="choixVille">
                <option value="">Choisir....</option>
                <option value="Laval">Laval</option>
                <option value="Montreal">Montreal</option>

            </select>

            <label for="choixClinique">Choix de la clinique </label>
            <select name="clinique" id="choixClinique" size="1" class="mb-3">
                <option value="">Cliquez sur la ville en premier...</option>
            </select>

            <label for="choixMedecin">Choix du médecin</label>
            <select name="listeMedecins" id="choixMedecin" size="1" class="mb-3">
                <option value="">Cliquez sur la clinique en premier...</option>
            </select>

        </div>


        <div id="tableauDisponibilites" style="display: none;">

            <h4>Disponibilités du médecin</h4>
            <table border="1">
                <thead>
                <tr>
                    <th>ID Disponibilité</th>
                    <th>ID Médecin</th>
                    <th>ID Clinique</th>
                    <th>ID Plage Horaire</th>
                    <th>Jour de la semaine</th>

                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Statut de disponibilité</th>

                    <th>Services du medecin</th>

                    <th>choix</th>


                </tr>
                </thead>
                <tbody id="corpsTableauDisponibilites">
                <!-- disponibilités à ajouter dynamiquement -->
                </tbody>
            </table>
        </div>


        <input type="hidden" name="idDisponibilite" id="idDisponibilite">
        <input type="hidden" name="idMedecin" id="idMedecin">
        <input type="hidden" name="idClinique" id="idClinique">
        <input type="hidden" name="jourSemaine" id="jourSemaine">


        <div class="text-center mt-5 btnPrendreRV">
            <button class="btn btn-primary" type="submit">Prendre le Rendez-vous</button>
        </div>

    </form>
</div>


<footer class="footer ">
    <p>&copy; 2023 SANTÉPOURTOUS. All Rights Reserved.</p>
    <div class="social-icons">
        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
</footer>


<script>
    // Récupération des éléments select
    const choixVilleSelect = document.getElementById('choixVille');
    const choixCliniqueSelect = document.getElementById('choixClinique');
    const choixMedecinSelect = document.getElementById('choixMedecin');


    // Récupération du bouton radio monProessionnel
    const monProfessionelRadio = document.getElementById('monProfessionnel');
    const autreMedeccinGMFRadio = document.getElementById('autreMedecinDeMonGMF');
    const autreProfessionnelHorsGMFRadio = document.getElementById('autreProfessionnelHorsGMF');

    const sectionDeMesProfessionnels = document.getElementById('sectionMesProfessionnels');
    const sectionDeRecherche = document.getElementById('sectionRecherche');


    // écoute de l'événement du clic sur monProfessionnelRadio
    monProfessionelRadio.addEventListener('click', afficherSection);
    autreMedeccinGMFRadio.addEventListener('click', afficherSection);
    autreProfessionnelHorsGMFRadio.addEventListener('click', afficherSection);

    // Affichage de la section de mes professionnels
    function afficherSection() {
        if (monProfessionelRadio.checked) {
            sectionDeMesProfessionnels.style.display = 'block';
            sectionDeRecherche.style.display = 'none';
        }

        /*
        else {
            sectionDeMesProfessionnels.style.display = 'none';
        }*/

        else if (autreMedeccinGMFRadio.checked || autreProfessionnelHorsGMFRadio.checked) {
            sectionDeRecherche.style.display = 'block';
            sectionDeMesProfessionnels.style.display = 'none';
        }


    }


    // Ajout d'un écouteur d'événement sur le changement de la ville
    choixVilleSelect.addEventListener('change', function () {
        const selectedVille = this.value;
        if (selectedVille) {
            // Envoi requête AJAX pour récupérer les cliniques correspondant à la ville sélectionnée
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {

                        choixCliniqueSelect.innerHTML = xhr.responseText;

                    } else {
                        // Gestion des erreurs
                        choixCliniqueSelect.innerHTML = '<option value="">Erreur lors du chargement des cliniques</option>';
                    }
                }
            };
            xhr.open("GET", "get_cliniques.php?ville=" + encodeURIComponent(selectedVille), true);
            xhr.send();
        } else {
            // Si aucune ville sélectionnée, réinitialisation la liste des cliniques
            choixCliniqueSelect.innerHTML = '<option value="">Cliquez sur la ville en premier...</option>';
        }
    });

    // Ajout d'un écouteur d'événement sur le changement de la clinique
    choixCliniqueSelect.addEventListener('change', function () {
        const selectedClinique = this.value;
        if (selectedClinique) {
            // Envoi requête AJAX pour récupérer les médecins correspondant à la clinique sélectionnée
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Mis à jour de la liste des médecins avec les données récupérées
                        choixMedecinSelect.innerHTML = xhr.responseText;
                    } else {
                        // Gestion les erreurs éventuelles
                        choixMedecinSelect.innerHTML = '<option value="">Erreur lors du chargement des médecins</option>';
                    }
                }
            };
            xhr.open("GET", "get_medecins.php?clinique=" + encodeURIComponent(selectedClinique), true);
            xhr.send();
        } else {
            //  Réinitialisation de la liste des médecins Si aucune clinique sélectionnée
            choixMedecinSelect.innerHTML = '<option value="">Cliquez sur la clinique en premier...</option>';
        }
    });


    // Ajout d'un écouteur d'événement sur le changement de la sélection du médecin
    choixMedecinSelect.addEventListener('change', function () {
        const selectedMedecin = this.value;
        if (selectedMedecin) {
            // Envoi requête AJAX pour récupérer les disponibilités du médecin sélectionné
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Mis à jour du tableau des disponibilités avec les données récupérées
                        const disponibilites = JSON.parse(xhr.responseText);
                        afficherDisponibilites(disponibilites);
                    } else {
                        // Gestion des erreurs
                        console.error('Erreur lors du chargement des disponibilités');
                    }
                }
            };
            xhr.open("GET", "get_disponibilites_medecin.php?listeMedecins=" + encodeURIComponent(selectedMedecin), true);
            xhr.send();
        } else {
            // Si aucun médecin sélectionné, masquage du tableau des disponibilités
            document.getElementById('tableauDisponibilites').style.display = 'none';
        }
    });


    // Fonction pour afficher les disponibilités dans le tableau
    function afficherDisponibilites(disponibilites) {
        const corpsTableauDisponibilites = document.getElementById('corpsTableauDisponibilites');
        // Réinitialisation du contenu du tableau
        corpsTableauDisponibilites.innerHTML = '';

        // Vérification de l'existence des disponibilités
        if (disponibilites.length > 0) {
            // Affichage du tableau et ajout de chaque disponibilité
            document.getElementById('tableauDisponibilites').style.display = 'block';
            disponibilites.forEach(function (disponibilite) {
                const newRow = corpsTableauDisponibilites.insertRow();
                newRow.insertCell(0).textContent = disponibilite.idDisponibilite;
                newRow.insertCell(1).textContent = disponibilite.MD_idMedecin;
                newRow.insertCell(2).textContent = disponibilite.Medecin_idClinique;
                newRow.insertCell(3).textContent = disponibilite.MD_idPlageHoraire;
                newRow.insertCell(4).textContent = disponibilite.jourSemaines;
                newRow.insertCell(5).textContent = disponibilite.heureDebut;
                newRow.insertCell(6).textContent = disponibilite.heureFin;
                newRow.insertCell(7).textContent = disponibilite.statutDispo;
                newRow.insertCell(8).textContent = disponibilite.MD_idServices;

                // Ajout d'un bouton radio à l'extrême droite de chaque ligne
                const radioBtnCell = newRow.insertCell(9);
                const radioBtn = document.createElement('input');
                radioBtn.type = 'radio';
                radioBtn.name = 'radioDispo';
                radioBtn.value = JSON.stringify(disponibilite); // Ajout disponibilité en tant que valeur du bouton radio
                if (disponibilite.statutDispo === 'NON') {
                    // désactivation du bouton radio, si le statut est "NON"
                    radioBtn.disabled = true;
                }
                radioBtnCell.appendChild(radioBtn);
            });
        } else {
            //On masque le tableau si aucune disponibilité
            document.getElementById('tableauDisponibilites').style.display = 'none';
        }
    }


    // Récupération du bouton "Prendre le Rendez-vous"
    const prendreRendezVousBtn = document.querySelector('.btnPrendreRV button');

    // Ajout d'un écouteur d'événement sur le clic du bouton "Prendre le Rendez-vous"
    prendreRendezVousBtn.addEventListener('click', function (event) {
        // Empêchement du comportement par défaut du formulaire
        event.preventDefault();

        // Récupération des valeurs de la raison et de la description du rendez-vous
        const raisonRV = document.getElementById('raisonRV').value;
        const descriptionRaisonRV = document.getElementById('descriptionRaisonRV').value;

        // Récupération des boutons radio ayant pour name 'radioDispo'
        const radioButtons = document.querySelectorAll('input[name="radioDispo"]');
        let selectedDispo = null;
        //On parcourt les différents bouttons radio et vérifions celui qui a été coché
        for (const radioButton of radioButtons) {
            if (radioButton.checked) {
                selectedDispo = JSON.parse(radioButton.value);
                break;
            }
        }

        // Vérification de la sélection d'une disponibilité
        if (selectedDispo !== null) {
            // Extraction des données nécessaires de la disponibilité sélectionnée
            const idDisponibilite = selectedDispo.idDisponibilite;
            const idMedecin = selectedDispo.MD_idMedecin;
            const idClinique = selectedDispo.Medecin_idClinique;
            const jourSemaine = selectedDispo.jourSemaines;

            // Requête AJAX pour insérer les données dans la table "RendezVous"
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Affichage d'un message de succès (On peut prévoir une redirection)
                        alert("Rendez-vous pris avec succès !");
                     //   window.location.href = "../vues/pageAcceuil.php"


                    } else {
                        // Gestion des erreurs
                        console.error('Erreur lors de la prise de rendez-vous');
                    }
                }
            };
            // Définition URL pour traitement des données URL à envoyer
            xhr.open("POST", "traitement_rendezvous.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(`raisonRV=${raisonRV}&description=${descriptionRaisonRV}&idDisponibilite=${idDisponibilite}&idMedecin=${idMedecin}&idClinique=${idClinique}&jourSemaine=${jourSemaine}`);
        } else {
            // Affichage d'un message à l'utilisateur pour lui indiquer de sélectionner une disponibilité
            alert("Veuillez sélectionner une disponibilité pour prendre rendez-vous.");
        }
    });







</script>


</body>
</html>