<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    verif_authent();
    
    //header('Location: index.php');
    
    EnTete("Les parchemins de Bârad-Dûr - RUN BITCH !", "", "");
    
    Navigateur_Co();
    
    echo "<h1> Livre en Cours d'Emprunt : </h1></br>";
    //AFFICHAGE DU LIVRE - on commence par aller le chercher dans la BDD (car l'array ne passe pas en POST)
    $data_search['rubrique'] = "id_ouvrage";
    $data_search['search'] = $_POST['oeuvre'];    
    $data_search['type'] = "all";
    $res = rechercher_livre($data_search);
    $book = db_fetch($res);
    
    if($_POST['statut'] == 1){
        affiche_erreur(6);
    }
    else{
        if($_POST['statut'] == 2){
            affiche_erreur(7);
        }
        else{
            if($_SESSION['pts'] > 0){
                if(emprunter($_SESSION['profil'],$_POST['oeuvre'],$_POST['etat'])){
                    affiche_success(0);
                }
                else{
                    affiche_erreur(8);
                }
            }
            else {
                affiche_erreur(21);
            }
        }
    }
    
    //ensuite on l'affiche avec vue_oeuvre
    vue_oeuvre($book,0);
    
    Pied();
    verif_Sauron();
?>    