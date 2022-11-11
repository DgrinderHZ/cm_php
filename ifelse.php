
<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>
	<nav>
		<li>
			<a href="index.php">Accueil</a>
		</li>
	</nav>

	<?php 
	define("RETOUR_A_LA_LIGNE", "<br>");
	// les instuction à structures conditionnelle
	// 1.1
	$un_nombre = 2;

	if($un_nombre > 0){
		echo "le nombre $un_nombre est positif." . RETOUR_A_LA_LIGNE;
	}

	// 1.2
	$un_nombre = -2;

	if($un_nombre > 0){
		echo "le nombre $un_nombre est positif." . RETOUR_A_LA_LIGNE;
	}else{
		echo "le nombre $un_nombre est négatif ou nul." . RETOUR_A_LA_LIGNE;
	}

	// 1.3
	$un_nombre = 0;

	if($un_nombre > 0){
		echo "le nombre $un_nombre est positif." . RETOUR_A_LA_LIGNE;
	}elseif($un_nombre < 0){
		echo "le nombre $un_nombre est négatif." . RETOUR_A_LA_LIGNE;
	}else{
		echo "le nombre $un_nombre est nul." . RETOUR_A_LA_LIGNE;
	}

	// switch, jours de la semaine
	$jour = 6;
	switch ($jour) {
		case 1:
			echo "Lundi" . RETOUR_A_LA_LIGNE;
			break;
		case 2:
			echo "Mardi" . RETOUR_A_LA_LIGNE;
			break;
		case 3:
			echo "Mercredi" . RETOUR_A_LA_LIGNE;
			break;
		case 4:
			echo "Jeudi" . RETOUR_A_LA_LIGNE;
			break;
		case 5:
			echo "Vendredi" . RETOUR_A_LA_LIGNE;
			break;
		case 6:
			echo "Samedi" . RETOUR_A_LA_LIGNE;
			break;
		case 7:
			echo "Dimanche" . RETOUR_A_LA_LIGNE;
			break;
		
		default:
			echo "Numero invalide.". RETOUR_A_LA_LIGNE;
	}
	?>

</body>
</html>