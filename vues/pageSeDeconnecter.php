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
		<link rel="stylesheet" href="<?php echo DOSSIER_BASE_LIENS;?>/css/labo6.css" />
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
					<li>
						<a href='?action=chercherInfosAccessoires'>Chercher infos accessoires</a>
					</li>
					<?php 
						$typeActeur=$controleur->getActeur(); // ------------- À remplacer par l'attribut du controleur
						if ($typeActeur=="visiteur") {
							echo "<li><a href='?action=seConnecter'>Se connecter</a></li>";
						} else {
							echo "<li><a href='?action=chercherAuto'>Chercher une Auto</a></li>";
							echo "<li class='option_active'><a href='?action=seDeconnecter'>Se deconnecter</a></li>";
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
					<h2>Recherche</h2>
					<div>
						<!-- .... Connexion ..... -->
						<form method="post" action="?action=seDeconnecter">
							<div class="rangee-formulaire">
								<input type="hidden" name="deconnexion" value="oui" />
								<input class="bouton-formulaire" type="submit" value="Se déconnecter" /><br />
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="zone_droite">	
				Fait pour le cours 420-G16-RO			
			</div>
		</div>
	</body>
</html>
