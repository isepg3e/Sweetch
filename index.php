<?php 
    session_start();
    
    if (isset($_GET['page'])
    {
        if ($_GET['page'] == "accueil")
            {
                include("Vues/accueil.php");
            }
        else if ($_GET['page'] == "inscription")
            {
                include("Vues/inscription.php");
            }
        else if ($_GET['page'] == "connexion")
            {
                include("Vues/connexion.php");
            }
        else if ($_GET['page'] == "publication")
            {
                include("Vues/publication.php");
            }
        else if ($_GET['page'] == "aide")
            {
                include("Vues/aide.php");
            }
        else if ($_GET['page'] == "recherche-avancee")
            {
                include("Vues/rechercheavancee.php");
            }
        else if ($_GET['page'] == "forum")
            {
                include("Vues/forum.php");
            }
    }
    else 
    {
        include("Vues/accueil.php");
    }

?>  
