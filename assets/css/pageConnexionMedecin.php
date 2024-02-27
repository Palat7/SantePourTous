<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>document</title>
    <link rel="stylesheet" href="assets/css/pageConnexion.css">
    <link rel="stylesheet" href="assets/css/pageConnexionMedecin.css">


</head>

<body>
<div class="container">
    <div class="text-center">
        <h1><a href="?action=pageAcceuil">Sant&eacute;PourTous</a></h1>
    </div>
    <h2>Veuillez vous connecter</h2>
    <form action="" method="post">
        <div class="form-control">
            <input type="text" required placeholder="Nom d'utilisateur" name="utilisateur" id="utilisateur">
        </div>
        <div class="form-control">
            <input type="password" required placeholder="Mot de passe" name="password" id="password">

        </div>
        <button class="btn">Connexion</button>
        <p class="text">Pas de compte? <a style="color: royalblue" href="?action=pageInscriptionMedecin">S'inscrire</a> </p>
    </form>
</div>
</body>
</html>