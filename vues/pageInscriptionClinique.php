<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation de compte Clinique</title>
    <link rel="stylesheet" href="assets/css/PageInscriptionClinique.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!--Librairie inputMask pour le champs du numéro de téléphone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script>

        $().ready(function () {
            $("#signupForm").validate({

                /*Les règles définies pour la validation du formulaire*/
                rules: {
                    nomClinique: "required",
                    nomVilleClinique : "required",
                    numRueClinique:
                        {
                            required: true,
                            digits: true
                        },
                    nomRueClinique: "required",
                    codePostalClinique: {
                        required: true,

                        pattern: /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/
                    },
                    numTelephoneClinique: {
                        required: true,
                        pattern: /^\d{3}-\d{3}-\d{4}$/
                    },
                    courrielClinique: {
                        required: true,
                        email: true
                    }
                },

                /*Messages à afficher en cas de non respect des règles */
                messages: {
                    nomClinique: "Veuillez entrer le nom de la clinique",
                    nomVilleClinique: "Veuillez entrer le nom de la ville",
                    numRueClinique: {
                        required: "Veuillez entrer le numéro de rue",
                        digits: "Veuillez entrer des chiffres svp",
                    },

                    nomRueClinique: {
                        required: "Veuillez entrer le nom de rue",
                    },

                    codePostalClinique: "Veuillez entrer un code postal valide svp",
                    numTelephoneClinique: {
                        required: "Veuillez entrer le numéro de téléphone",
                        pattern: "Veuillez entrer un numéro de téléphone valide svp"
                    },
                    courrielClinique: {
                        required: "Veuillez entrer l'adresse courriel",
                        email: "Veuillez entrer une adresse courriel valide"
                    }
                },


                // La soumission ne se fera que si le formulaire est valide
                /*submitHandler : option du plugin jQuery Validation est associée ici à une fonction
                anonyme qui est à exécuter si le formulaire est soumis avec succès
                */
                submitHandler: function (form) {
                    nextStep(1); // Passer à l'étape suivante après validation
                }

            });

            //Formatage effectué grâce à la librairie javaScript inputMask
            $('#numTelephoneClinique').inputmask('999-999-9999', {placeholder: ' '});
            $('#codePostalClinique').inputmask('A9A 9A9', {placeholder: ' '});
        });

    </script>


    <style>
        .verifierInformation {
            min-height: 75vh; /* 75% de la hauteur de la fenêtre */
        }


        .paraDejaUnCompte {
            text-align: right;
        }

        .container {

            width: 630px;
        }

        /*La classe error est ajoutée automatiquement aux labels générés par la validation de jQuery*/
        label.error {
            color: red;
            font-size: 10px; /* Taille de la police des labels d'erreur */

        }


    </style>
</head>
<body>

<div class="container mt-5 container-stylish">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form id="signupForm">
                <div class="text-center">
                    <a href="?action=pageAcceuil" class="h1">Sant&eacute;PourTous</a>
                </div>
                <div class="step active" id="step1">

                    <h4 class="text-center mb-4">Veuillez renseigner les informations de votre clinique</h4>

                    <div class="form-group">
                        <label for="nomClinique">Nom de la clinique</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="nomClinique" class="form-control" id="nomClinique">
                            </div>
                        </div>


                        <div class="form-group text-center mt-4 mb-0  ">
                            <h6>Coordonnées de la clinique</h6>
                            <!-- ... autres champs du formulaire ... -->
                        </div>

                        <div class="form-group ">

                            <label for="numRueClinique">Numéro de la rue</label>
                            <input type="text" name="numRueClinique" class="form-control" id="numRueClinique">
                        </div>

                        <div class="form-group">
                            <label for="nomRueClinique">Nom de la rue</label>
                            <input type="text" name="nomRueClinique" class="form-control" id="nomRueClinique">
                        </div>

                        <div class="form-group">
                            <label for="nomVilleClinique">Nom de la Ville</label>
                            <input type="text" name="nomVilleClinique" class="form-control" id="nomVilleClinique">
                        </div>


                        <div class="form-group">
                            <label for="codePostalClinique">Code postal</label>
                            <input type="text" name="codePostalClinique" class="form-control" id="codePostalClinique"
                                   placeholder="H2S 2F2">
                        </div>

                        <div class="form-group ">
                            <label for="numTelephoneClinique">Numéro de téléphone</label>
                            <input type="text" name="numTelephoneClinique" class="form-control"
                                   id="numTelephoneClinique" placeholder="450-000-0000"
                            >
                        </div>

                        <div class="form-group">
                            <label for="courrielClinique">Adresse courriel</label>
                            <input type="email" name="courrielClinique" class="form-control" id="courrielClinique"
                                   placeholder="axy@hotmail.com">
                        </div>


                        <div>
                            <p class="paraDejaUnCompte">Déjà un compte? <a
                                    href="?action=connexionClinique">Connectez-vous</a></p>
                        </div>

                        <button type="submit" class="btn btn-primary">Suivant</button>
                        <!-- <input class="submit" type="submit" value="Envoyer">-->

                    </div>


                </div>


                <div class="step verifierInformation" id="step2">
                    <h2>Confirmation</h2>


                    <div class="card confirmation-card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Veuillez verifier vos informations avant de
                                soumettre </h5>
                            <p class="card-text "><strong>Nom de la clinique:</strong> <span
                                    id="confirmNomClinique"></span></p>
                            <p class="card-text"><strong>Numéro de rue:</strong> <span
                                    id="confirmNumeroRueClinique"></span></p>
                            <p class="card-text"><strong>Nom de rue:</strong> <span
                                    id="confirmNomRueClinique"></span></p>
                            <p class="card-text"><strong>Nom de la ville:</strong> <span
                                    id="confirmNomVilleClinique"></span></p>
                            <p class="card-text"><strong>Code postal:</strong> <span
                                    id="confirmCodePostalClinique"></span></p>
                            <p class="card-text"><strong>Numéro de téléphone:</strong> <span
                                    id="confirmNumTelephoneClinique"></span></p>
                            <p class="card-text"><strong>Courriel:</strong> <span
                                    id="confirmCourrielClinique"></span></p>


                        </div>
                    </div>


                    <div class="my-3">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Retour</button>
                        <button type="button" class="btn btn-success" onclick="submitForm()">Soumettre</button>
                    </div>
                </div>


            </form>

        </div>
    </div>
</div>


<div class="modal fade" id="successModal" data-backdrop="static" tabindex="-1" role="dialog"
     aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-body">

                <p>votre demande d"inscription a bien été envoyé. Si elle est acceptée,
                    l'administrateur vous enverra votre identifiant et mot de passe à l'adresse
                    courriel que vous avez fournie </p>
                <p>À présent, vous allez être redirigé à la page d'accueil</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="redirectToHomePage()">
                    Ok
                </button>
            </div>

        </div>
    </div>
</div>


<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/PageInscriptionClinique.js"></script>

</body>
</html>
