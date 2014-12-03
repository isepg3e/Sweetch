<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="../CSS/publication.css"/>
		<link rel="shortcut icon" href="../Images/icon-sweetch.png"/>
	</head>

	<body>

			<?php include("header.php"); ?>

			<section>
				<form method="POST" action="">
					<table>
						<tr>
							<td colspan=4 >
								Publication d'une annonce
							<td>
						</tr>

						<tr>
							<td colspan=4 >
								Informations générales :
							<td>
						<tr>

						<tr>
							<td>
								Type de logement :
							</td>
							<td class="select">
								<select class="select" name="logement" id="logement">
									<option value="maison">Maison</option>
									<option value="appartement">Appartement</option>
									<option value="loft">Loft</option>
									<option value="autre">Autre</option>
								</select>
							</td>
							<td>
								autre :
							</td>
							<td class="case">
								<input  placeholder="type de logement" class="input" type="text" name="autre"/>
							</td>
						</tr>

						<tr>
							<td>
								Capacité d'accueil :
							</td>
							<td class="case" colspan=3 >
								<input type="number" class="capacite" placeholder="Nombre de personne"/>
							</td>
						</tr>

						<tr>
							<td>
								Région :
							</td>
							<td class="select">
								<select class="select" name="region" id="region">
									<option value="Alsace">Alsace</option>
									<option value="Aquitaine">Aquitaine</option>
									<option value="Auvergne">Auvergne</option>
									<option value="Basse-Normandie">Basse-Normandie</option>
									<option value="Bourgogne">Bourgogne</option>
									<option value="Bretagne">Bretagne</option>
									<option value="Centre">Centre</option>
									<option value="Champagne-Ardenne">Champagne-Ardenne</option>
									<option value="Corse">Corse</option>
									<option value="Franche-Comté">Franche-Comté</option>
									<option value="Haute-Normandie">Haute-Normandie</option>
									<option value="Ile-de-France">Ile-de-France</option>
									<option value="Languedoc-Roussillon">Languedoc-Roussillon</option>
									<option value="Limousin">Limousin</option>
									<option value="Lorraine">Lorraine</option>
									<option value="Midi-Pyrénées">Midi-Pyrénées</option>
									<option value="Nord-Pas-de-Calais">Nord-Pas-de-Calais</option>
									<option value="Pays-de-la-Loire">Pays-de-la-Loire</option>
									<option value="Picardie">Picardie</option>
									<option value="Poitou-Charentes">Poitou-Charentes</option>
									<option value="Provences-Alpes-Côte d'Azur">Provences-Alpes-Côte d'Azur</option>
									<option value="Rhône-Alpes">Rhône-Alpes</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								Ville :
							</td>
							<td colspan=3 class="case">
								<input type="text" id="ville" placeholder="Indiquez votre ville"/>
							</td>
						</tr>
						
						<tr>
							<td>
								Code postal :
							</td>
							<td colspan=3 >
								<input type="number" class="capacite" placeholder="Ex : 75006"/>
							</td>
						</tr>

						<tr>
						</tr>
						
						<tr>
							<td>
								Description du logement :
							</td>
						</tr>

						<tr>
							<td class="textarea" colspan=4 >
								<textarea>
								</textarea>
							</td>
						</tr>

					</table>
				</form>
			</section>

			<?php include("footer.php"); ?>
			
	</body>
</html>