<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    EnTete("Les parchemins de Bârad-Dûr", "", "upbook");
    
    if($_SESSION['co'] == 0){
        Navigateur_NonCo();
    }
    else {
        Navigateur_Co();
    }
    
    echo "<img class=\"easter_eggs Mode_Sauron\" src=\"img/Sauron_folder/Dragon 1.jpg\" width=\"500\" alt=\"recherche fructueuse\" style=\"display:none;left:550px;\"/>";

    /*seule "form_recherche" appelle "recherche.php" avec une méthode POST, on vérifie donc ici si une recherche vient d'être quémandée*/
    if(!isset($_POST) || empty($_POST)) {
        //printf("demande recherche");
        form_recherche();
    }
    else {
        //printf("retour recherche");
        //printf($_POST['rubrique']);
        form_recherche(); /*Pour taper une nouvelle recherche*/
        $resultat = rechercher_livre($_POST); /*récupération de la recherche demandée*/
        //echo "<p> après : ".$resultat."</p>";
        $i = 0; /*incrémenteur pour afficher un coup sur deux à droite ou à gauche (cf. rubrique index)*/
        $j = db_count($resultat); /*Nombre de tuples retournés par la requête*/
        if($j == 0){
            affiche_erreur(2);
        }
        while ($j > 0){
            $oeuvre = db_fetch($resultat);
            vue_oeuvre($oeuvre,$i); /*Affichage des oeuvres, avec possibilité de les emprunter via un nouveau formulaire*/
            $i = $i +1;
            $j = $j -1;
        }
        unset($_POST);
        unset($resultat);
    }
    Pied();
    verif_Sauron();
?>