<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8"/>
		<title>Inscription | Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="../CSS/inscription.css"/>
		<link rel="shortcut icon" href="../Images/icon-sweetch.png"/>

	</head>
	
	<body>
		
		<?php include("header.php"); ?>

		<section>

			<div class="leftbox">

				<form method="POST" action="">
					<table>
						<tr>
							<td class="inscription" colspan=2 >S'inscrire</td>
						</tr>

						<tr>
							<td class="content">Nom :</td>
							<td class="content"><input class="input" type="text" name="nom" placeholder="Entrez votre nom."/></td>
						</tr>

						<tr>
							<td class="content">Prénom :</td>
							<td class="content"><input class="input" type="text" name="prenom" placeholder="Entrez votre prénom"/></td>
						</tr>

						<tr>
							<td class="content">Date de naissance :</td>
							<td class="content"><input class="input" type="date" name="age" placeholder="JJ/MM/AAAA"/></td>
						</tr>

						<tr>
							<td class="content">e-mail :</td>
							<td class="content"><input class="input" type="mail" name="mail" placeholder="exemple@hotmail.fr"/></td>
						</tr>

						<tr>
							<td class="content">Pseudo :</td>
							<td class="content"><input class="input" type="text" name="pseudo" placeholder="Créez votre pseudo"/></td>
						</tr>

						<tr>
							<td class="content">Mot de passe :</td>
							<td class="content"><input class="input" type="password" name="motdepasse" placeholder="Créez votre mot de passe"/></td>
						</tr>

						<tr>
							<td class="content">Confirmation du mot de passe :</td>
							<td class="content"><input class="input" type="text" name="confirmation" placeholder="Confirmez votre mot de passe"/></td>
						</tr>

						<tr>
							<td class="conditions"><a href="">Voir les conditions générales d'utilisation</a></td>
						</tr>

						<tr>
							<td class="content">J'accepte les CGU<input class="check" type="checkbox" name="checkbox"/></td>
						</tr>

						<tr>
							<td class="content" colspan=2><a href="#" class="button">S'inscrire</a></td>
						</tr>
					</table> 
			</div>

			<div class="rightbox">
				<center><img src="sweetch-marketing.png" alt="échangez vos logements avec Sweetch"/></center>
			</div>

		</section>

		<?php include("footer.php"); ?>

	</body>
</html>