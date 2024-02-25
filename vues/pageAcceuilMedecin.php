<?php

$medecin = $_SESSION['utilisateurConnecte']['medecin'];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha384-GLhlTQ8i04FZ5L5nfsO6AvmokBP4tuKKA8fNEH+9QF2t4E+Em/kisjFQV5trn2x4" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Leckerli One">


    <link rel="stylesheet" href="<?php echo DOSSIER_BASE_LIENS;?>assets/css/styleRetouche.css" />

    <title>Accueil médecin</title>
</head>

<body>
<!-- Barre de menu -->
<!--Couleur initiale de la barre de navigation #a8d1ee-->
<nav class="navbar navbar-expand-lg bg-body-tertiary fs-5 ">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold me-2" href="#">
            <img src="<?= DOSSIER_BASE_LIENS;?>assets/images/Logo4.png" alt="SantéPourTous Logo">
        </a>
        <a class="navbar-brand fw-bold textLogo me-5" href="#">SantéPourTous</a>

        <!-- Déterminer nécessité de ce bouton -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <!--me-5 inclus pour ajouter de l'espace à droite de l'élément-->
            <ul class="navbar-nav me-2">


                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Gestion des disponibilités
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end w-100 ">
                        <li><a class="dropdown-item " href="ajouterDispo.html">Ajouter des disponibilités</a></li>
                        <li><a class="dropdown-item  " href="modifierDispo.html">Modifier des disponibilités</a></li>
                    </ul>
                </li>


                <li class="nav-item">
                    <!--me-5 inclus pour ajouter de l'espace à droite de l'élément-->
                    <a class="nav-link me-2" href="ConsulterRendezVous.html">Consulter mes rendez-vous</a>
                </li>
                <li class="nav-item">
                    <!--me-5 inclus pour ajouter de l'espace à droite de l'élément-->
                    <a class="nav-link me-2" href="ListePatient.html">Liste de mes patients</a>
                </li>

                <li class="nav-item">
                    <!--me-5 inclus pour ajouter de l'espace à droite de l'élément-->
                    <a class="nav-link me-2" href="ListeRV.html">Liste des Rendez-vous</a>
                </li>

            </ul>


            <!--Classe ms-auto ajoutée ici. Elle place l'élément à droite dans une disposition de langue qui va de gauche à droite-->
            <ul class="navbar-nav ml-auto ms-auto">
                <li class="nav-item ">

                    <a class="btn btn-primary ms-4" href="?action=seDeconnecter">Deconnexion</a>
                </li>
            </ul>


        </div>
    </div>
</nav>

<!--<input type="hidden" id="idMedecin" name="idMedecin" value="<?= $medecin->idMedecin?>" />-->

<div class="container-fluid ">


    <div class="grid-container ">
        <div class="row">
            <div class="col-2 p-0 ">

                <!--Classe flex column ajouter pour avoir les boutons dans un seul bloc -->
                <!-- Une classe stylePersoBarreVerticale définie pour couleur du background -->
                <!--disposition flex column appliquée pour aligner verticalement les boutons, nav-pills appliqué pour l'apparence
                sous forme de pill (onglets sous formes arrondies) -->

                <div class="nav flex-column nav-pills me-3 stylePersoBarreVerticale" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">

                    <div class="text-center mt-3">
                        <h5 class="welcome-text  text-white mb-3 ">
                            <?php echo 'Bienvenue Doc. '.$medecin->getNomMedecin() ?></h5>
                    </div>
                    <button class="nav-link  text-start text-white  border" id="v-pills-notification-tab"

                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-notification" type="button" role="tab"
                            aria-controls="v-pills-notification"
                            aria-selected="false">
                        <!--Utilisation du model d'onglet (data-bs-toggle="pill")-->
                        <!--Icones provenant des librairies de font-awesome-->
                        <i class="fa fa-bell me-2"></i>
                        Notifications
                    </button>
                    <button class="nav-link  text-start text-white  border" id="v-pills-messages-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false" disabled><i class="fa fa-envelope me-2"></i>Messages
                    </button>
                    <button class="nav-link  text-start text-white  border" id="v-pills-profile-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#formulaireProfilMedecin" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="true"><i class="fa fa-user me-2"></i>Profil
                    </button>

                    <!-- L'attribut data-bs-target est à définir pour le bouton Envoyer invitation  -->
                    <button class="nav-link  text-start text-white  border" id="v-pills-profil"
                            data-bs-toggle="pill"
                            type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="true"><i class="fa fa-calendar me-2"></i>Envoyer invitation
                    </button>


                    <!-- L'attribut data-bs-target est à définir pour le bouton paramètres -->
                    <button class="nav-link  text-start text-white  border" id="v-pills-autre-tab"
                            data-bs-toggle="pill"
                            type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="true"><i class="fa fa-gear me-2"></i>Paramètres
                    </button>
                </div>
            </div>


            <div class="col-10 mb-3">
                <div class="tab-content" id="v-pills-tabContent">
                    <!--tab pane class utilisée pour les composants d'onglet-->
                    <!--tab panel : Attribut indiquant que l'élément est destiné à recevoir le contenu d'un onglet-->
                    <div class="tab-pane fade" id="v-pills-notification" role="tabpanel"
                         aria-labelledby="v-pills-notification-tab" tabindex="0">
                        <!-- Contenu de l'onglet Notification -->
                        Lorem 2ipsum dolor sit amet consectetur adipisicing elit. In, laborum delectus? Velit cumque
                        quis, exercitationem repellendus pariatur
                        nisi totam in aliquid fugit praesentium doloremque, molestias quo quidem aperiam? Aspernatur,
                        assumenda.
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <!-- Contenu temporaire de l'onglet Notifications -->
                        Lorem 3ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptatum, incidunt tempora
                        rem sapiente fugit autem doloribus quo
                        iusto vel ipsa eaque, repellat tempore minus quae sunt porro numquam id.
                    </div>

                    <div class="tab-pane fade" id="formulaireProfilMedecin" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab" tabindex="0">


                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="personal-tab-pane" role="tabpanel"
                                 aria-labelledby="personal-tab" tabindex="0">

                                <h2 class="text-center pt-2 titreProfilMedecin">Profil médecin </h2>
                                <form class="row g-3 needs-validation" novalidate>
                                    <!--  Début du formulaire profil médecin  -->


                                    <div class="col-md-7">
                                        <label for="nomMedecinProfil" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nomMedecinProfil" value="<?= $medecin->getNomMedecin()?>"
                                               required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class="col-md-7">
                                        <label for="prenomMedecinProfil" class="form-label">Prenom</label>
                                        <input type="text" class="form-control" id="prenomMedecinProfil" value="<?= $medecin->getPrenomMedecin()?>"
                                               required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class="col-md-7">
                                        <label for="professionProfil" class="form-label">Profession
                                        </label>
                                        <input type="text" class="form-control" id="professionProfil" value="<?= $medecin->getSpecMedecin()?>" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class="col-md-7">
                                        <label for="numeroDeProfessionnelProfil" class="form-label">Numéro de
                                            professionnel</label>
                                        <input type="text" class="form-control" id="numeroDeProfessionnelProfil" value="<?= $medecin->getNumProfession()?>"
                                               required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class=" btn-group col-md-7" role="group">
                                        <!--Attribut for du label Mode de facturation à déterminer-->
                                        <label class="form-label">Mode de facturation </label>

                                        <div class="form-check form-check-inline offset-1">
                                            <input class="form-check-input " type="radio" name="inlineRadioOptions"
                                                   id="radioFacturePatient" value="option1" <?php if ($medecin->getTypeFacturation() === 'option1'): ?>checked<?php endif;?>>
                                            <label class="form-check-label" for="radioFacturePatient">Par
                                                patient</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                   id="radioFactureHeure" value="option2" <?php if ($medecin->getTypeFacturation() === 'option2'): ?>checked<?php endif;?>>
                                            <label class="form-check-label" for="radioFactureHeure">À l'heure</label>
                                        </div>
                                    </div>


                                    <div class="col-md-7">
                                        <label for="numTelephoneProfilMedecin" class="form-label">Numéro de
                                            téléphone</label>
                                        <input type="text" class="form-control" id="numTelephoneProfilMedecin" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class="col-md-7">
                                        <label for="courrielProfilMedecin" class="form-label">Courriel</label>
                                        <input type="text" class="form-control" id="courrielProfilMedecin" value="<?= $medecin->getCourrielMedecin()?>" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class="col-md-7">
                                        <label for="cliniqueProfilMedecin" class="form-label">Clinique</label>
                                        <input type="text" class="form-control" id="cliniqueProfilMedecin" value="<?= $medecin->getMedecinIdClinique()?>" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                                    </div>


                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
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

<!--Bootstrap JS-->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
<script  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
         integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
         crossorigin="anonymous"></script>
<script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
         integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
         crossorigin="anonymous"></script>


<script defer>
    //function listePatients(){
   //     var idMedecin = $("#idMedecin").val();
   // }

    //Ecouteur d'événement pour dérouler les sous-menus au survol d'un menu
    document.addEventListener("DOMContentLoaded", function () {
        //Cette variable regroupe l'ensemble des sous menus ayant la classe nav-item.dropdown
        let menuDeroulant = document.querySelectorAll('.nav-item.dropdown');

        menuDeroulant.forEach(function (dropdownMenu) {
            dropdownMenu.addEventListener('mouseover', function () {
                this.querySelector('.dropdown-menu').classList.add('show');
            });

            menuDeroulant.addEventListener('mouseout', function () {
                this.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    });


</script>
</body>

</html>
message.txt
17 Ko