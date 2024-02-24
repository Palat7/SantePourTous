<?php
/******************************************************************
 	Labo 4 #2-3 : Fonctions d'affichage pour le menu et pour 
	              une Automobile
	Nom         :                                    
*******************************************************************/

// #2 : Utilisez le tableau reçu en paramètre pour afficher les options 
//      du menu dans des éléments li d'une liste ul. 
//      Ajoutez la classe css 'option_active' pour l'élément li correspondant 
//      à l'indice reçu en paramètre.  
//      Voir l'énoncé pdf pour voir ce à quoi doit ressemble le format final.     
function afficherMenu($tableau,$indiceOptionActive) {
	echo "<ul>";
	$i=0;
	foreach ($tableau as $itemMenu => $lien) {
		$classe="";
		if ($indiceOptionActive==$i) {
			$classe=" class='option_active'";
		}
		echo "<li $classe><a href='$lien'>$itemMenu</a></li>";
		$i++;
	}
	echo "</ul>";
}


// #3 : Utilisez les méthodes de la classe Automobile 
//       pour afficher le modèle, la couleur et le prix final dans un liste umask    
function afficherUneAuto($uneAuto) {
	echo "<ul>";
	echo "<li>Modèle :".$uneAuto->getModele()."</li>";
	echo "<li>Couleur :".$uneAuto->getCouleur()."</li>";
	echo "<li>Prix Final :".$uneAuto->calculerPrixFinal()." $</li>";
	echo "</ul>";
}

// #4 : Utilisez les méthodes de la classe Accessoire 
//       pour afficher le code, la quanite, et le nom 
//       de chaque accessoire du tableau reçu dans une table html_entity_decode    
function afficherTableInfosAccessoires($unTableau) {
	// ... Début de la table
	echo "<table>";
	// ... Entête de la table 
	echo "<thead>";
	echo "<tr>";
	echo "<th>code</th>";
	echo "<th>nom</th>";
	echo "<th>prix unitaire</br>suggéré</th>";
	echo "</tr>";
	echo "</thead>";
	// ... Body de table 
	// ******************** à compléter : doit afficher les éléments de $unTableau 
	echo "<tbody>";
	foreach ($unTableau as $uneInfo) {
		echo "<tr>";
		echo "<td>".$uneInfo->getCode()."</td>";	
		echo "<td>".$uneInfo->getNom()."</td>";	
		echo "<td>".$uneInfo->getPrixUnitaireSuggere()."</td>";	
		echo "</tr>";	
	}
	echo "</body>";
	// *******************
	// ... Fin de la table
 	echo "</table>";
}




function afficherErreurs($tabMessages) {
    if (count($tabMessages) > 0) {
        echo "<div class='erreur'>";
        echo "<ul>";
        foreach ($tabMessages as $message) {
            echo "<li>$message</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
}


?>