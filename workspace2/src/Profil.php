<?php

    include("vue.php");
    include("modele.php");
    include("config.php");
    
    verif_authent();
    
    EnTete("Miroir, mon Beau Miroir...", "profil", "");

    if($_SESSION['co'] == 1){
        Navigateur_Co();
    }
    else {
        Navigateur_NonCo();
    }
    
    //on récupère l'utilisateur dans la BDD pour l'afficher (et on vérifie que le résultat de la requête n'est pas vide)
    $data = get_user($_SESSION['profil']);
    $profil = db_fetch($data); 
    if(empty($profil['pseudo'])){
        affiche_erreur(2);
    }
    else{
        vue_user($profil);
        //image du Mode Sauron spécifique si l'utilisateur est Sauron ou non
        if($_SESSION['profil'] == "Lord of the Mordor") {
            echo "<div class=\"easter_eggs\" style=\"top:450px\"><img src=\"img/Sauron_folder/concept Sauron.jpg\" height=\"125\" alt=\"inscription\" class=\"Mode_Sauron\" style=\"display:none\"/></div>";
            
        }
        else {
            echo "<div class=\"easter_eggs\" style=\"top:450px\"><img src=\"img/Sauron_folder/balrog ignite.gif\" height=\"125\" alt=\"inscription\" class=\"Mode_Sauron\" style=\"display:none\"/></div>";
           
        }
        //on affiche ensuite ses emprunts s'il en a
        if($profil['emprunts'] > 0){
            $pseudo = $profil['pseudo'];
            $data2 = voir_emprunts($pseudo);
            $i = 0;
            $j = db_count($data2);
            if($j == 0){
                affiche_erreur(2);
            }
            while ($j > 0){
                $oeuvre = db_fetch($data2);
                vue_emprunt($oeuvre,$i); /*Affichage des emprunts*/
                $i = $i +1;
                $j = $j -1;
            }
        }
    }
    
    Pied();
    verif_Sauron();
?>