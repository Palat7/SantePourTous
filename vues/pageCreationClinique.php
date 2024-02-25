<?php if(!ISSET($controleur)) header("Location: ..\index.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>document</title>
<?php    include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php"); ?>

</head>
<body>

<form action="?TraitementCreationClinique" method="post">
    <!-- Champs utilisateur -->
    <label for="nomUtilisateur">Nom utilisateur</label>
    <input type="text" id="nomUtilisateur" name="nomUtilisateur" placeholder="Nom d'utilisateur" required>


    <label for="motDePasse">Mot de passe</label>
    <input type="password" name="motDePasse" placeholder="Mot de passe" required>

    <!-- Champs adresse -->
    <label for="numRue">Numero de Rue</label>
    <input type="text" id="numRue" name="numRue" placeholder="Numéro de rue" required>

    <label for="nomRue">Nom de rue </label>
    <input type="text" id="nomRue" name="nomRue" placeholder="Nom de rue" required>

    <label for="nomVille">Nom de ville</label>
    <input type="text" id="nomVille" name="nomVille" placeholder="Nom de ville" required>

    <label for="codePostal">Code postal</label>
    <input type="text" id="codePostal" name="codePostal" placeholder="Le code postal" required>

    <label for="nomProvince">Nom de la province</label>
    <input type="text" id="nomProvince" name="nomProvince" placeholder="Nom de la province" required>


    <!-- Champs clinique -->
    <label for="nomClinique">Nom de la clinique</label>
    <input type="text" id="nomClinique" name="nomClinique" placeholder="Nom de la clinique" required>

    <label for="courrielClinique">Courriel de la clinique</label>
    <input type="email" id="courrielClinique" name="courrielClinique" placeholder="Courriel de la clinique" required>

    <label for="telephoneClinique">Telephone la clinique</label>
    <input type="tel" id="telephoneClinique" name="telephoneClinique" placeholder="Téléphone de la clinique" required>

    <button type="submit">Créer ma clinique</button>
<!--
   <a href="?action=TraitementCreationClinique"> Soumission</a>-->


</form>-->
</body>
</html>
