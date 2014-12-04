<?php
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


if($motdepasse == $confirmation)
{
// Insertion du formulaire dans la BDD à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO membre(nom, prenom,age) VALUES(?,?,?)');
$dateFormated = split('/', $_POST['age']);
$date = $dateFormated[2].'-'.$dateFormated[1].'-'.$dateFormated[0];
$req->execute(array($_POST['nom'], $_POST['prenom'], $date));


// Redirection du visiteur vers la page du minichat

}
else
{
echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
}

?>
