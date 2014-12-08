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
			
				<form method="POST" action="connexion_POST.php">			
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
							<td class="content"><input class="saisie" type="password" name="mdp" placeholder="*******"/></td>
						</tr>

						<tr>
							<td class="forgot"><a href="#">Mot de passe oublié?</a></td>
							<td class="inscription">Pas encore inscrit? - <a href="inscription.php">S'inscrire</a></td>
						</tr>

						<tr>
							<td class="content" colspan=2> <input type="submit" value="Se connecter"/></td>
						</tr>
					</table>
				</form>
			

		</section>

<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=sweetch', 'root', 'kilo', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>	


		<?php include("footer.php"); ?>
		
	</body>
</html>



