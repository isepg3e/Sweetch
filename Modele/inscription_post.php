<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$pseudo=$_POST['pseudo'];
$mdp=$_POST['mdp'];
$con=$_POST['cmdp'];
$email = $_POST['email'];
$point = strpos($email,".");
$aroba = strpos($email,"@");
$checkbox=$_POST['checkbox'];
// D'abord, je me connecte à la base de données!!!
try
{
$bdd = new PDO('mysql:host=localhost;dbname=sweetch', 'root', 'kilo');
}

// Vérifier la connexion.
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

if($mdp != $con)
{
		echo'<p id="erreur">Les deux mots de passe que vous avez rentrés ne correspondent pas</p>';
}

elseif(empty($checkbox))
{
	echo 'coche les CGU';
}
elseif(empty($nom) OR empty($prenom) OR empty($email) OR empty($mdp) OR empty($pseudo) OR empty($con) OR empty($_POST['age']))
{
	echo 'remplisez toutes les cases !';
}
if($point=='' OR $aroba=='')
{
echo "Votre email n'est pas valide";
}

else
{
	// Insertion du formulaire dans la BDD à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO membre(nom, prenom,age,email,mdp,CGU,pseudo) VALUES(?,?,?,?,?,?,?)');
$dateFormated = split('/', $_POST['age']);
$date = $dateFormated[2].'-'.$dateFormated[1].'-'.$dateFormated[0];
$req->execute(array($nom, $prenom, $date, $email, $mdp, $checkbox, $pseudo));
}

?>

