<!-- On redirige vers l'inde du site si on essaie d'avoir une accès direct -->
	<?php if(!ISSET($controleur)) header("Location: ..\index.php");?>	

<!DOCTYPE html>
<!-- 	
  
  Groupe 1
  Labo #6 : Vue pour l'Architecture MVC
  Auteur : 
   
-->	
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Labo #06 - MVC</title>
		<link rel="stylesheet" href="<?php echo DOSSIER_BASE_LIENS;?>assets/css/pageConnexion.css" />
<!--
        <style>


            body {
                background-color: black;
                color: #fff;
                font-family: "Muli", sans-serif;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                overflow: hidden;
                margin: 0;
            }

            input::placeholder {
                color: #ffffff;
            }
            .container {
                background-color: lightgray;
                color: #030c06;
                padding: 20px 40px;
                border-radius: 5px;
            }
            .container h1 {
                text-align: center;
                margin-bottom: 30px;
            }
            .container a {
                text-decoration: none;
                color: lightblue;
            }
            .btn {
                cursor: pointer;
                display: inline-block;
                width: 100%;
                background: white;
                padding: 15px;
                font-family: inherit;
                font-size: 16px;
                border: 0;
                border-radius: 5px;
            }
            .btn:focus {
                outline: 0;
            }
            .btn:active {
                transform: scale(0.98);
            }
            .text {
                margin-top: 30px;
                text-decoration: none;
            }
            .form-control {
                color: #030c06;
                position: relative;
                margin: 20px 0 40px;
                width: 300px;
            }
            .form-control input {
                background-color: transparent;

                border: 0;
                border-bottom: 2px #fff solid;
                display: block;
                width: 100%;
                padding: 15px 0;
                font-size: 18px;
                color: #fff;
            }
            .form-control input:focus,
            .form-control input:valid {
                outline: 0;
                border-bottom-color: lightblue;
            }
            .form-control label {
                position: absolute;
                top: 15px;
                left: 0;
                pointer-events: none;
            }
            .form-control label span {
                display: inline-block;
                font-size: 18px;
                min-width: 5px;
                transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }
            .form-control input:focus + label span,
            .form-control input:valid + label span {
                color: lightblue;
                transform: translateY(-30px);
            }

            a{
                text-decoration: none;
                color: white;
            }

            .btn:hover{
                background-color: lightblue;
            }
        </style>-->
	</head>
	<body >

			<div class="zone_centre">
				<?php 
					include_once DOSSIER_BASE_INCLUDE."vues/inclusions/fonctions.inc.php";
					afficherErreurs($controleur->getMessagesErreur()); 
				?>	
				<div class="contenu_centre_petit">
					<h2>Connexion</h2>

					<!-- ************************************Contenu#1********************************************** -->
					<!--<div class="contenu">
						<h2>Connection</h2>
						<div>-->



							<!-- .... Connexion ..... -->
							<form method="post" action="?action=seConnecterClinique">
								<div class="rangee-formulaire">
									<label for="nom">Nom d'utilisateur : </label><br/>
									<input type="text" id="nom" name="nom_utilisateur" required="required" />
								</div>
								
								<div class="rangee-formulaire">
									<label for="mot_passe">Mot de passe: </label><br/>
									<input type="password" id="mot_passe" name="mot_passe" required="required" /><br />
								</div>
								<div class="rangee-formulaire">
									<input class="bouton-formulaire" type="submit" value="Se connecter" /><br />
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
            <!--
			<div class="zone_droite">	
				Fait pour le cours 420-G16-RO			
			</div>-->
		</div>
	</body>
</html>
