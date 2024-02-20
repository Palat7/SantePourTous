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
		<link rel="stylesheet" href="<?php echo DOSSIER_BASE_LIENS;?>../css/labo6.css" />
	</head>
	<body >
		<?php
			// ==================== Inclusion de l'entête ===================== 
			// .. insérez le fichier contenant la bannière de l'entête
			include_once DOSSIER_BASE_INCLUDE."vues/inclusions/entete.inc.php";
		?>
		<div class="conteneur_principal">
			<div class="zone_gauche">
				<h2>Autos G16</h2> 
				<!---------------- MENU ---------------------> 
				<ul>
					<li>
						<a href='?action=voirPageAccueil'>Accueil</a>
					</li>
					<li>
						<a href='?action=voirInfosAccessoires'>Voir infos accessoires</a>
					</li>
					<li >
						<a href='?action=chercherInfosAccessoires'>Chercher infos accessoires</a>
					</li>
					<?php 
						$typeActeur=$controleur->getActeur(); // ------------- À remplacer par l'attribut du controleur
						if ($typeActeur=="visiteur") {
							echo "<li class='option_active'><a href='?action=seConnecter'>Se connecter</a></li>";
						} else {
							echo "<li><a href='?action=chercherAuto'>Chercher une Auto</a></li>";
							echo "<li><a href='?action=seDeconnecter'>Se deconnecter</a></li>";
						}
					?>
					<li>
						<a href='https://www.crosemont.qc.ca' target='_blank'>Collège Rosemont</a>
					</li>
				</ul>
				<!--------------- FIN DU MENU --------------->
			</div>
			<div class="zone_centre">
				<?php 
					include_once DOSSIER_BASE_INCLUDE."vues/inclusions/fonctions.inc.php";
					afficherErreurs($controleur->getMessagesErreur()); 
				?>	
				<div class="contenu_centre_petit">
					<h2>Connexion</h2>

					<!-- ************************************Contenu#1********************************************** -->
					<div class="contenu">
						<h2>Connection</h2>
						<div>
							<!-- .... Connexion ..... -->
							<form method="post" action="?action=seConnecter">
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
			<div class="zone_droite">	
				Fait pour le cours 420-G16-RO			
			</div>
		</div>
	</body>
</html>
