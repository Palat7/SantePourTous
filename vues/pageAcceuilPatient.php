<?php

$patient = $_SESSION['utilisateurConnecte']['patient'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Accueil patient</title>

    <link rel="stylesheet" href="assets/CSS/styleRetouche.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!--<script src="form-validation-profil-patient.js"></script > -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>


</head>

<body>
<!-- Barre de menu -->
<nav class="navbar navbar-expand-lg fs-5" style="background-color: #a8d1ee;">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="#">
            <img src="<?= DOSSIER_BASE_LIENS;?>assets/images/Logo4.png" alt="SantéPourTous Logo">
        </a>
        <a class="navbar-brand fw-bold" href="#">SantéPourTous</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!--<li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.html">Accueil</a>
                </li>-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false"> Gestion des rendez-vous
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="prendRdv.html">Prendre un rendez-vous</a></li>
                        <li><a class="dropdown-item" href="modifRdv.html">Modifier un rendez-vous</a></li>
                        <li><a class="dropdown-item" href="annulRdv.html">Annuler un rendez-vous</a></li>
                        <li><a class="dropdown-item" href="consultRdv.html">Consulter vos rendez-vous</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consultDoc.html">Consulter documents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactMed.html">Contacter un medecin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactClin.html">Contacter une clinique</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false"> Mes professionnels
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="monMedecin.html">monMedecin</a></li>
                        <li><a class="dropdown-item" href="monInfirmier.html">monInfirmier</a></li>
                        <li><a class="dropdown-item" href="monInterne.html">monInterne</a></li>
                    </ul>
                </li>


            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                     <a class="btn btn-primary ms-4" href="?action=seDeconnecter">Deconnexion</a>

                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">


    <div class="container-fluid p-0 ">
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
                            <?php echo 'Bienvenue '.$patient->getPrenomPatient() ?></h5>
                    </div>
                    <button class="nav-link  text-start text-white  border" id="v-pills-notification-tab"

                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-notification" type="button" role="tab"
                            aria-controls="v-pills-notification"
                            aria-selected="false">
                        <!--Utilisation du model d'onglet (data-bs-toggle="pill")-->
                        <!--Icones provenant des librairies de font-awesome-->
                        <i class="fa-regular fa-bell"></i>
                        Notifications
                    </button>
                    <button class="nav-link  text-start text-white  border" id="v-pills-messages-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false" disabled><i class="fa fa-envelope me-2"></i>Messages
                    </button>
                    <button class="nav-link  text-start text-white  border" id="v-pills-profile-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="true"><i class="fa fa-user me-2"></i>Profil
                    </button>
                    <button class="nav-link  text-start text-white  border" id="v-pills-autre-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-autre" type="button" role="tab" aria-controls="v-pills-autre"
                            aria-selected="true"><i class="fa fa-gear me-2"></i>Paramètres
                    </button>
                </div>
            </div>


            <div class="col-10">
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
                        <!-- Contenu de l'onglet Message -->
                        Lorem 3ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptatum, incidunt tempora
                        rem sapiente fugit autem doloribus quo
                        iusto vel ipsa eaque, repellat tempore minus quae sunt porro numquam id.
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <!-- Contenu de l'onglet Profil -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="personal-tab" data-bs-toggle="tab"
                                        data-bs-target="#personal-tab-pane" type="button" role="tab"
                                        aria-controls="personal-tab-pane" aria-selected="true">Personnel
                                </button>
                            </li>


                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="medical-tab" data-bs-toggle="tab"
                                        data-bs-target="#medical-tab-pane" type="button" role="tab"
                                        aria-controls="medical-tab-pane" aria-selected="false">Medical
                                </button>
                            </li>


                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="personal-tab-pane" role="tabpanel"
                                 aria-labelledby="personal-tab" tabindex="0" style="padding-bottom: 20px;">
                                <form class="row g-3 needs-validation" name="formPerso" novalidate>

                                    <!--  Début du formulaire personnel  -->

                                    <div class="col-md-7">
                                        <label for="patientPrenom" class="form-label">Prenom</label>
                                        <input type="text" class="form-control" id="patientPrenom" name="patientPrenom" value="<?= $patient->getPrenomPatient()?>"
                                             required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="patientNom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="patientNom" name="patientNom" value="<?= $patient->getNomPatient()?>"
                                               required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <!-- Probleme avec radio bouton a fixer -->
                                    <div class=" btn-group col-md-7" role="group">

                                        <label for="inlineRadio1" class="form-label">Genre </label>
                                        <div class="form-check form-check-inline offset-1">
                                            <input class="form-check-input " type="radio" name="inlineRadioOptions"
                                                   id="inlineRadio1" value="M" <?php if ($patient->getSexePatient() === 'M'): ?>checked<?php endif;?>>
                                            <label class="form-check-label" for="inlineRadio1">M</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                   id="inlineRadio2" value="F" <?php if ($patient->getSexePatient() === 'F'): ?>checked<?php endif;?>>
                                            <label class="form-check-label" for="inlineRadio2">F</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="patientRamq" class="form-label">Numero d'assurance maladie</label>
                                        <input type="text" class="form-control" id="patientRamq" name="patientRamq" value="<?= $patient->getRamqPatient()?>" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="patientSeq" class="form-label">Numero de sequence</label>
                                        <input type="text" class="form-control" id="patientSeq" name="patientSeq" value="<?= $patient->getNumSequence()?>" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="md-form md-outline input-with-post-icon datepicker col-md-7">
                                        <label for="dateNaissPatient" class="form-label">Date de naissance</label>
                                        <input placeholder="Select date" type="date" id="dateNaissPatient" class="form-control" name="dateNaissPatient" value="<?= $patient->getDateNaissance()?>" required>

                                    </div>

                                    <div class="col-md-7">
                                        <label for="numNomRue" class="form-label">Numero et nom de la rue</label>
                                        <input type="text" class="form-control" id="numNomRue" name="numNomRue" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <label for="nomVille" class="form-label">Ville</label>
                                        <input type="text" class="form-control" id="nomVille" name="nomVille" required>
                                        <div class="invalid-feedback">
                                            Veuillez saisir une ville.
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nomProv" class="form-label">Province</label>
                                        <select class="form-select" id="nomProv" name="nomProv" required>
                                            <option disabled value="">Selectionner...</option>
                                            <option selected value="1">Quebec</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Veuillez choisir une province.
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="codePostPatient" class="form-label">Code postal</label>
                                        <input type="text" class="form-control" id="codePostPatient" name="codePostPatient" required>
                                        <div class="invalid-feedback">
                                            Veuillez fournir un code postal valide.
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="telPatient" class="form-label">Numero de telephone</label>
                                        <input type="text" class="form-control" id="telPatient" name="telPatient" required>
                                        <div class="invalid-feedback">
                                            Veuillez saisir votre numero de telephone.
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="courrielPatient" class="form-label">Courriel</label>
                                        <input type="text" class="form-control" id="courrielPatient" name="courrielPatient" value="<?= $patient->getCourrielPatient()?>" required>
                                        <div class="invalid-feedback">
                                            Veuillez saisir votre courriel.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck1" name="invalidCheck1"
                                                   required>
                                            <label class="form-check-label" for="invalidCheck1">
                                                Accepter les termes et conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                Vous devez accepter les termes avant d'enregistrer!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                                    </div>


                                </form>
                            </div>

                            <div class="tab-pane fade" id="medical-tab-pane" role="tabpanel"
                                 aria-labelledby="medical-tab" tabindex="0">
                                <form class="row g-3 needs-validation" name="formMedical" novalidate>
                                    <!-- Début du formulaire medical -->

                                    <div class="col-md-7">
                                        <label for="nomMonMedecin" class="form-label">Mon medecin de
                                            famille</label>
                                        <input type="text" class="form-control" id="nomMonMedecin" name="nomMonMedecin"
                                        >
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nomMonInfirmier" class="form-label">Mon infirmier</label>
                                        <input type="text" class="form-control" id="nomMonInfirmier" name="nomMonInfirmier">
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="nomMedInterne" class="form-label">Mon m&eacute;decin
                                            interne</label>
                                        <input type="text" class="form-control" id="nomMedInterne" name="nomMedInterne">
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="antMedicaux" class="form-label">Mes antecedents m&eacute;dicaux</label>
                                        <input type="text" class="form-control" id="antMedicaux" name="antMedicaux" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="antMedicament" class="form-label">Mes m&eacute;dicaments</label>
                                        <input type="text" class="form-control" id="antMedicament" name="antMedicament" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                        <br>
                                        <!--    <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Accepter les termes et conditions
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        Vous devez accepter les termes avant d'enregistrer!
                                                    </div>
                                                </div>
                                            </div> -->
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                                        </div>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="assets/js/form-validation-profil-patient.js"></script >
</body>

</html>

