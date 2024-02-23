$().ready(function () {
    $("#signupForm").validate({
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            prenomMedecin: {required:true
                //  ,pattern: /^[A-Za-z][A-Za-zéèê- ']+$/
            },

            nomMedecin: {required:true,
                pattern: /^[A-Za-z][A-Za-z\é\è\ê\-']+$/},

            factMedecin:{required:true},

            numTelMedecin:{
                required: true,
                pattern: /^\d{3}-\d{3}-\d{4}$/
            },

            emailMedecin: {
                required: true,
                courrielPatient: true
            }
        },
        // Specify validation error messages
        messages: {
            prenomMedecin: "Veuillez Saisir votre prenom",
            nomMedecin: "Veuillez Saisir votre nom",
            factMedecin: "Veuillez saisir le type de facturation",

            numTelMedecin: {
                required: "Veuillez entrer le numéro de téléphone",
                pattern: "Veuillez entrer un numéro de téléphone valide svp"
            },
            emailMedecin: {
                required: "Veuillez entrer l'adresse courriel",
                email: "Veuillez entrer une adresse courriel valide"
            },

            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            nextStep(1);
        }
    });
});
