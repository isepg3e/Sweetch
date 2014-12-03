<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="../CSS/style.css"/>
		<link rel="shortcut icon" href="../Images/icon-sweetch.png"/>
	</head>

	<body>

			<?php include("header.php");?>


			<section id="slider-principal">
				

			</section>


			<section id="recherche">

				<div id="recherche-simple">
					<label for="search">Recherche :</label><input type="text" name="search" class="search" placeholder="Recherche par mot-clé"/>
					<input type="submit" value="Rechercher" class="submit"/>
				</div>

				<a href="#" id="recherche-avancee">
					Recherche avancée
				</a>

				<a href="#infos" id="informations">
					Cliquez ici pour plus d'informations
				</a>

			</section>


			<section id="infos">
				<div class="mark1"></div>
				<div class="mark2"></div>
				<div class="mark3"></div>
				<div class="mark4"></div>
			</section>

			<?php include("footer.php"); ?>
			
	</body>
</html>