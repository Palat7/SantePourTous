<!DOCTYPE html>
<!------------------------------------------------------------------>
<!---- labo #3 partie A                                          --->
<!---- Fichier de test unitaire pour la classe InfoAccessoireDAO ---> 
<!---- Auteurs :                                     --->
<!------------------------------------------------------------------>
<html lang="fr">
<head>
	<title>Labo5 test</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/labo3.css" />
</head>
<body >

	<!---- Création d'un accessoire ---->
	<h1>Fichier de test pour la classe InfoAccessoireDAO</h1>
	<?php
		// ****** INLCUSIONS *******
		// Importe l'interface DAO et la classe infoAccessoireDAO (qui importe déjà la classe infoAccessoire)
		include_once "../DAO/infoAccessoireDAO.class.php"; 
	?>

	<!---- Utilisation et affichage des méthodes -->
	<table>
		<thead>
			<tr>
				<th>Méthode</th>
				<th>Résultat</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>chercher(51) ... trouvé <br/>chercher(11) ... pas trouvé</td>
				<td>
					<?php 
						$uneInfo=InfoAccessoireDAO::chercher(51);
						echo $uneInfo?$uneInfo:"Pas trouvé";
						echo "<br/>";
						$uneInfo=InfoAccessoireDAO::chercher(11);
						echo $uneInfo?$uneInfo:"Pas trouvé";
					?>
				</td>
			</tr>
			<tr>
				<td>chercherTous()</td>
				<td>
					<?php
						$tableau=InfoAccessoireDAO::chercherTous();
						foreach($tableau as $uneInfo) {
							echo $uneInfo."<br/>";
						}
					?>
				</td>
			</tr>
			<tr>
				<td>chercherAvecFiltre("WHERE prix_unitaire_suggere < 300")</td>
				<td>
					<?php
						$tableau=InfoAccessoireDAO::chercherAvecFiltre("WHERE prix_unitaire_suggere  < 300");
						foreach($tableau as $uneInfo) {
							echo $uneInfo."<br/>";
						}
					?>
				</td>
			</tr>
			<tr>
				<td>inserer(...)</td>
				<td>
					<?php
						$uneInfo=new InfoAccessoire(99,'À effacer',999.99);
						InfoAccessoireDAO::inserer($uneInfo);
						$uneInfo=InfoAccessoireDAO::chercher(99);
						echo $uneInfo?$uneInfo:"Pas trouvé";
					?>
				</td>
			</tr>
			<tr>
				<td>modifier(...)</td>
				<td>
					<?php
						$uneInfo->setPrixUnitaireSuggere(789.01);
						InfoAccessoireDAO::modifier($uneInfo);
						$uneInfo=InfoAccessoireDAO::chercher(99);
						echo $uneInfo?$uneInfo:"Pas trouvé";
					?>
				</td>
			</tr>
			<tr>
				<td>supprimer(...)</td>
				<td>
					<?php
						InfoAccessoireDAO::supprimer($uneInfo);
						$uneInfo=InfoAccessoireDAO::chercher(99);
						echo $uneInfo?$uneInfo:"Pas trouvé";
					?>
				</td>
			</tr>
		</tbody>
	</table>
	<br/>
	<br/>
	<img alt="Diagramme de classes" src="../../images/DiagrammeDeClasses.png" height="400" />

	<!---- Retour au fichier d'accueil -->
	<h2><a href="../../index.php">Retour à la page d'accueil</a></h2>
</body>
</html>
