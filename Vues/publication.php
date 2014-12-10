<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="../CSS/publication.css"/>
		<link rel="stylesheet" href="../CSS/general.css"/>
		<link rel="stylesheet" href="../CSS/header.css"/>
		<link rel="stylesheet" href="../CSS/footer.css"/>
		<title>Publication d'une annonce</title>
	</head>
	<body>

		<?php include("header.php"); ?>

		<form method="POST" action="">
			
			<section>
					
<!-- patie photo -->

					<table id="table1">
						<tr>
							<td class="titre" colspan=4>
								Ajouter des photos (1/4)
							</td>
						</tr>

						<tr>
							<td class="case_photo">  <div class="espace_photo"><a href="" title="Ajouterze"></a> </div> 
							</td>

							<td class="case_photo"> <a href="" title="Ajouterze"><div class="espace_photo"></div></a>
							</td>

							<td class="case_photo"> <a href="" title="Ajouterze"><div class="espace_photo"></div></a>
							</td>

							<td class="case_photo"> <a href="" title="Ajouterze"><div class="espace_photo"></div></a>
							</td>
						</tr>

						<tr>
							<td class="case_photo"> <div class="espace_photo"></div>
							</td>

							<td class="case_photo"> <div class="espace_photo"></div>
							</td>

							<td class="case_photo"> <div class="espace_photo"></div>
							</td>

							<td class="case_photo"> <div class="espace_photo"></div>
							</td>
						</tr>

						<tr>
							<td class="case_photo"> <div class="espace_photo"></div>
							</td>

							<td class="case_photo"> <div class="espace_photo"></div>
							</td>

						</tr>

						<tr>
							<td class=""></td>
							<td class=""></td>
							<td class=""></td>
							<td class="case_suivant"><a href="#table2" class="suivant">
												<p>Suivant</p>
											 </a>
							</td>
						</tr>

					</table>
<!-- fin de la partie photo -->
					




<!-- partie Description -->
				<table id="table2">
						<tr>
							<td class="titre" colspan=4>
								Desccription (2/4)
							</td>
						</tr>

						<tr>
							<td class="case text">
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

							<td class="text_autre">
							 	Autre :
							</td>

							<td class="case">
								<input  placeholder="type de logement" class="input" type="text" name="autre"/>
							</td>

						</tr>
						
						<tr>
							
							<td class="case text">
								Region :
							</td>

							<td class="select" colspan=3>
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
							<td class="case text">
								Ville :
							</td>
							
							<td class="case" colspan=3 >
								<input type="text" id="ville" placeholder="Indiquez votre ville"/>
							</td>
						</tr>
						
						<tr>
							<td class="case text">
								Code postal :
							</td>

							<td colspan=2>
								<input  placeholder="Code postal" id="codePostal" type="text" name="codePostal"/>
							</td>
						</tr>
						
						<tr>
							<td class="case text">
								Surface :
							</td>
							
							<td class="case" colspan="2">
								<input type="text" id="surface" placeholder="Indiquez la surface"/>m*m
							</td>
						</tr>
						<tr>
							<td class="case text">
								Capacité d'accueil :
							</td>

							<td class="case">
								<input type="number" id="capacite" min="0"/>
							</td>
						</tr>
						
						<tr>
							<td class=""></td>
							<td class=""></td>
							<td class="case_precedent"><a href="#table1" class="precedent">
												<p>Précedent</p>
											 </a>
							</td>
							<td class="case_suivant"><a href="#table3" class="suivant">
												<p>Suivant</p>
											 </a>
							</td>
						</tr>

					</table>
				</form>
<!-- fin de la prtie Description -->			



<!-- partie Règle de vie -->
					<table id="table3">
						<tr>
							<td class="titre" colspan=4 >
								Règle de vie (3/4)
							</td>
						</tr>

						<tr>
							<td class="titre_choix">
								Contraintes
							</td>
						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Fumeurs bienvenus</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Animaux de compagnie bienvenus</label>
							</td>
						
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Enfants bienvenus</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for=""></label>
							</td>

						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for=""></label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for=""></label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for=""></label>
							</td>

						</tr>

						<tr>
							<td class="titre_choix">
								Services
							</td>
						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Garder les animaux domestiques</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Arroser les plantes</label>
							</td>
						
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Fermer la porte a double tour avant de sortir</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Nettoyer régulièrement</label>
							</td>

						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for=""></label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for=""></label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for=""></label>
							</td>


							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for=""></label>
							</td>

						</tr>
						
						<tr>
							<td class=""></td>
							<td class=""></td>
							<td class="case_precedent"><a href="#table2" class="precedent">
												<p>Précedent</p>
											 </a>
							</td>
							<td class="case_suivant"><a href="#table4" class="suivant">
												<p>Suivant</p>
											 </a>
							</td>
						</tr>
					</table>
<!-- fin de la partie Règle de vie -->




<!-- partie confort -->
					<table id="table4">
						<tr>
							<td class="titre" colspan=4 >
								Confort (4/4)
							</td>
						</tr>

						<tr>
							<td class="titre_choix">
								Equipement
							</td>
						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Jardin</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Piscine</label>
							</td>
						
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Barbecue</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Aire de jeux</label>
							</td>

						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Cours de tennis</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Table de ping-pong</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">balcon/terrasse</label>
							</td>

						</tr>

						<tr>
							<td class="titre_choix">
								Multimedia
							</td>
						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">TV</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Ordinateur</label>
							</td>
						
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Internet</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">WiFi</label>
							</td>

						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Home cinema</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Satellite/câble</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Téléphone</label>
							</td>


							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Console de jeu</label>
							</td>

						</tr>

						<tr>
							<td class="titre_choix">
								Exterieur
							</td>
						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Accés handicapés</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Equipement bébé</label>
							</td>
						
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Lave vaisselle</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Lave linge</label>
							</td>

						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Sèche linge</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Four micro onde</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Congélateur</label>
							</td>


							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Four</label>
							</td>

						</tr>
						
						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Réfrigerateur</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Baignore</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Chauffage</label>
							</td>

						</tr>
						
						

						<tr>
							<td class="titre_choix">
								Divers
							</td>
						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Air conditionné</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Ascenseur</label>
							</td>
						
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Parking</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Piano</label>
							</td>

						</tr>

						
						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Jacuzzi</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Sauna</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Cheminée</label>
							</td>


							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Salle de sport</label>
							</td>

						</tr>

						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Gardien</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Service de ménage</label>
							</td>
							
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Baby-sitter</label>
							</td>


							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Cuisinier</label>
							</td>

						</tr>
						
						<tr>
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Voiture</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Moto</label>
							</td>
						
							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Scooter</label>
							</td>

							<td class="choix">
								<input type="checkbox" name="" id=""/> <label for="">Bicyclette</label>
							</td>

						</tr>

						<tr>
							<td class=""></td>
							<td class=""></td>
							<td class="case_precedent"><a href="#table3" class="precedent">
												<p>Précedent</p>
											 </a>
							</td>
							<td></td>
						</tr>
					</table>
					
<!-- fin de la partie confort -->			
				<input type="submit" value="Publier" class="publier"/>	

			</section>
		</form>
		<?php include("footer.php");?>
	</body>
</html>