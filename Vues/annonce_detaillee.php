<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="../CSS/styleA.css"/>
		<link rel="stylesheet" href="../CSS/header.css"/>
		<link rel="stylesheet" href="../CSS/footer.css"/>
		<link rel="stylesheet" href="../CSS/general.css"/>
		<link rel="shortcut icon" href="icon-sweetch.png"/>
	</head>

	<body>

	<?php include("header.php");?>
			
		

		
		<!-- slide des photos de la maison -->

<section class="section_1">
		<div id="slideshow">  
          
			<div class="container">  
				<div class="c_slider"></div>  
					<div class="slider">  
						<figure>  
							<img src="../Images/maison5.jpeg" alt="" width="640" height="310" />  
							<figcaption>salon</figcaption>  
			  
						</figure><!-- 
						--><figure>  
							<img src="../Images/maison6.jpeg" alt="" width="640" height="310" />  
							<figcaption>cuisine</figcaption>  
						</figure><!-- 
						--><figure>  
							<img src="../Images/maison7.jpeg" alt="" width="640" height="310" />  
							<figcaption>chambre</figcaption>  
			  
						</figure><!-- 
						--><figure>  
							<img src="../Images/maison8.jpeg" alt="" width="640" height="310" />  
							<figcaption>jardin</figcaption>  
						</figure>  
					</div>      
			</div>  
			<span id="timeline"></span>
		</div>

</section>



<section class="section_2">
	<div class="bloc_1">
		<div class="description">
			<?php include("description.php");?>		
		</div>
		<div class="service">
			<?php include("service.php");?>
		</div>
		<div class="contrainte">
			<?php include("contrainte.php");?>
		</div>
		<div class="equipement">
			<?php include("equipement.php");?>
		</div>
	</div>

	<div class="bloc_2">
		<div class="carte"></div>
		<div class="disponibilité"></div>
					<form method="get" action="envoi_email.php" > 
					<label for="envoi_email" class="email">me tenir informé pour les prochaines disponibilitées: </label>
					<input type="text" name="envoi_email" placeholder="indiquer votre adresse mail " size="30" maxlength="100"/> 
					<input type="submit" name="submit" class="email" value="Envoyer un email" /> 
					</form>



					<div class="bouton">
						<p>
							Sweetch
						</p>
						
					</div>
	</div>

	<div class="clear"></div>
	
	<div class="commentaire"></div>
</section>
				
				
				
				
				
				
				
				
				<form method="get" action="envoi_email.php" > 
					<label for="envoi_email" class="email">me tenir informé pour les prochaines disponibilitées: </label>
					<input type="text" name="envoi_email" placeholder="indiquer votre adresse mail " size="30" maxlength="100"/> 
					<input type="submit" name="submit" class="email" value="Envoyer un email" /> 
				</form>



<div class="bouton">
	<p>
		Sweetch
	</p>
	
</div>
</br>
</br>



	<div class="content-1"></div>


	<?php include("footer.php");   ?>



	</body>
</html>
