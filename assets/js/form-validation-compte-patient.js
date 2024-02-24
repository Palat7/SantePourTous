$(function () {


    $("form[name='signupForm']").validate({

        rules: {

            patientPrenom: {
                required: true
                //  ,pattern: /^[A-Za-z][A-Za-z\é\è\ê\- ']+$/
            },

            patientNom: {
                required: true,
                pattern: /^[A-Za-z][A-Za-z\é\è\ê\- ']+$/
            },

            inlineRadioOptions: {required: true},

            patientRamq: {
                required: true,
                pattern: /^([A-Za-z]{3})([A-Za-z])([0-9][0-9])([0-1][0-9])([0-9][0-9])([0-9][0-9])$/,
                exactlength: 12
            },

            courrielPatient: {
                required: true,
                courrielPatient: true
            },

            patientSeq: {
                required: true,
                pattern: /^([0-9][0-9])$/,
                digits: true,
                exactlength: 2
            },

            dateNaissPatient: {
                required: true
            },

            numNomRue: {
                required: true,
            },

            nomVille: {
                required: true,
            },

            codePostPatient: {
                required: true,
                pattern: /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/
            },

            telPatient: {
                required: true,
                pattern: /^\d{3}-\d{3}-\d{4}$/
            },

            password: {
                required: true,
                minlength: 5
            }
        },
        // Messages d'erreurs
        messages: {
            patientPrenom: "Veuillez Saisir votre prenom",
            patientNom: "Veuillez Saisir votre nom",
            inlineRadioOptions: "Veuillez Saisir votre genre",
            patientRamq: {
                required: "Veuillez saisir votre numero de RAMQ sans espace",
                pattern: "Veuillez saisir votre numero de RAMQ sans espace",
                exactlength: "Verfier votre numero de RAMQ"
            },
            patientSeq: {
                required: "Veuillez saisir votre numero de sequence a deux chiffres",
                pattern: "Veuillez saisir votre numero de sequence a deux chiffres",
                exactlength: "le numero de sequence doit avoir deux chiffres"

            },
            numNomRue: "Veuillez entrer le numero et le nom de rue",
            nomVille: "Veuillez entrer la ville",
            codePostPatient: "Veuillez entrer un code postal valide svp",

            telPatient: {
                required: "Veuillez entrer le numéro de téléphone",
                pattern: "Veuillez entrer un numéro de téléphone valide svp"
            },
            courrielPatient: {
                required: "Veuillez entrer l'adresse courriel",
                email: "Veuillez entrer une adresse courriel valide"
            },

            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            }
        },

        submitHandler: function (form) {
            form.submit();
        }
    });
});