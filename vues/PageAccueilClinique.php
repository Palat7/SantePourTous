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
    <link rel="stylesheet" href="../CSS/styleRetouche.css">


    <title>Accueil Clinique</title>
</head>

<body>
<!-- Barre de menu -->
<!--Couleur initiale de la barre de navigation #a8d1ee-->
<nav class="navbar navbar-expand-lg bg-body-tertiary fs-5 ">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="#">
            <img src="../../Logo/Logo4.png" alt="SantéPourTous Logo"> </a>
        <a class="navbar-brand fw-bold textLogo me-5" href="#">SantéPourTous</a>

        <!-- Déterminer nécessité de ce bouton -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse " id="navbarNavDropdown">

            <!--ms-auto ajouté pour mieux répartir les éléments le long de la barre de navigation-->
            <ul class="navbar-nav ms-auto">



                <!--
                <li class="nav-item me-2 ">

                    <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                </li>
-->


                <!--me-5 inclus pour ajouter de l'espace à droite de l'élément-->
                <li class="nav-item me-5">
                    <a class="nav-link " href="" role="button"
                       aria-expanded="false"> Liste des services
                    </a>

                </li>

                <!--me-5 inclus pour ajouter de l'espace à droite de l'élément-->
                <li class="nav-item me-5">

                    <a class="nav-link " href="ListeMedecin.html">Liste des médecins</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="ListePatientClinique.html">Liste des patients</a>
                </li>
            </ul>

            <!--Classe ms-auto ajoutée ici. Elle place l'élément à droite dans une disposition de langue qui va de gauche à droite -->
            <ul class="navbar-nav ml-auto ms-auto ">
                <li class="nav-item ">

                    <button class="btn btn-primary ms-5 btn-lg" type="submit">Deconnexion</button>
                </li>


            </ul>


        </div>
    </div>


</nav>


<div class="container-fluid ">

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-2 p-0 ">

                <!--Classe flex column ajouter pour avoir les boutons dans un seul bloc -->
                <!-- Une classe stylePersoBarreVerticale définie au niveau du CSS pour personnaliser ce bloc-->
                <!--disposition flex column appliquée pour aligner verticalement les boutons, nav-pills appliqué pour l'apparence
                sous forme de pill (onglets sous formes arrondies) -->

                <div class="nav flex-column nav-pills me-3 stylePersoBarreVerticale" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">


                    <!--  onglet notification et message enlevés au niveau de la page d'accueil de la clinique -->

                    <button class="nav-link  text-start text-white  border" id="v-pills-profile-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#formulaireProfilClinique" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="true"><i class="fa fa-info-circle me-2"></i> Infos sur la clinique
                    </button>

                    <!-- L'attribut data-bs-target est à définir pour le bouton paramètres -->
                    <button class="nav-link  text-start text-white  border" id="v-pills-autre-tab"
                            data-bs-toggle="pill"
                           type="button" role="tab" aria-controls="v-pills-profile"
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
                    <div class="tab-pane fade" id="formulaireProfilClinique" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab" tabindex="0">

                        <h2 class="text-center pt-2 InfoGeneraleClinique">Informations générales</h2>


                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="personal-tab-pane" role="tabpanel"
                                 aria-labelledby="personal-tab" tabindex="0">
                                <form class="row g-3 needs-validation" novalidate>
                                    <!--  Début du formulaire personnel  -->
                                    <!--Les ids sont à changer-->

                                    <div class="col-md-7">
                                        <label for="validationCustom01" class="form-label fw-bold">Nom de la
                                            clinique</label>
                                        <input type="text" class="form-control" id="validationCustom01"
                                               value="Clinique Belle vue"
                                               required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="validationCustom02" class="form-label fw-bold">Numéro de rue</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="15"
                                               required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class="col-md-7">
                                        <label for="validationCustom03" class="form-label fw-bold">Nom de rue </label>
                                        <input type="text" class="form-control" id="validationCustom03"
                                               value="Durocher" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>


                                    <div class="col-md-7">
                                        <label for="validationCustom04" class="form-label fw-bold">Nom de la ville </label>
                                        <input type="text" class="form-control" id="validationCustom04"
                                               value="Ville quelconque" required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>




                                    <div class="col-md-7">
                                        <label for="validationCustom05" class="form-label fw-bold">Code postal</label>
                                        <input type="text" class="form-control" id="validationCustom05" value="H7E 9C3"
                                               required>
                                        <div class="valid-feedback">
                                            Bon!
                                        </div>
                                    </div>
                                    <div class="md-form md-outline input-with-post-icon datepicker col-md-7">
                                        <label for="validationCustom06" class="form-label">Numéro de téléphone</label>
                                        <input type="text" id="example" id="validationCustom06" class="form-control" value="819-345-6363">

                                    </div>

                                    <div class="col-md-7">
                                        <label for="validationCustom07" class="form-label fw-bold">Courriel</label>

                                        <input type="email" class="form-control" id="validationCustom07"
                                               value="Bellevue@hotmail.com" required>
                                        <div class="valid-feedback">
                                            Bon!
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


<script defer>


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