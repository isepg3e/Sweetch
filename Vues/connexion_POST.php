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

    //on vérifie si le pseudo et mot de passe ne sont pas vide, nulle ou non définie

    if (!empty($_POST['pseudo']) && (!empty($_POST['mdp'])))

{

        //on récupère les valeurs des champs

        $pseudo = ($_POST['pseudo']);

        $mdp = ($_POST['mdp']);

       

$req = $bdd->prepare('SELECT id_membre FROM membre WHERE pseudo = :pseudo AND mdp = :mdp');
$req->execute(array(
    'pseudo' => $pseudo,
    'mdp' => $mdp));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
	session_start();
    $_SESSION['id_membre'] = $resultat['id_membre'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}

}

else

{

        echo "Veuillez remplir tous les champs !!!";

   

}

?>
