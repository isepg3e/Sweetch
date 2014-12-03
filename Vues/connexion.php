<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Se connecter | Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="../CSS/connexion.css"/>
		<link rel="shortcut icon" href="../Images/icon-sweetch.png"/>
	</head>

	<body>
		
		<?php include("header.php"); ?>

		<section>
			
				<form method="POST" action="">			
					<table>
						<tr>
							<td id="title" colspan=2>Se connecter</td>
						</tr>

						<tr>
							<td class="content"><label for="pseudo" class="label">Votre pseudo :</label></td>
							<td class="content"><input class="saisie" type="text" name="pseudo" placeholder="Ex: pseudo94"/></td>
						</tr>

						<tr>
							<td class="content"><label for="pass" class="label">Votre mot de passe :</label></td>
							<td class="content"><input class="saisie" type="password" name="pass" placeholder="*******"/></td>
						</tr>

						<tr>
							<td class="forgot"><a href="#">Mot de passe oublié?</a></td>
							<td class="inscription">Pas encore inscrit? - <a href="inscription.html">S'inscrire</a></td>
						</tr>

						<tr>
							<td class="content" colspan=2><a href="#" class="button">Connexion</a></td>
						</tr>
					</table>
				</form>
			

		</section>

		<?php include("footer.php"); ?>
		
	</body>
</html>



