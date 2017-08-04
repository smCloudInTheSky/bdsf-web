<?php
    include("vue.php");
    include("modele.php");
    include("config.php");
    
    //verif_authent();
    
    EnTete("Aidez-nous à Financer l'Etoile de la Mort", "", "money");

    Navigateur_Co();
    
    echo "<img class=\"easter_eggs Mode_Sauron\" src=\"img/Sauron_folder/Smaug.gif\" width=\"600\" alt=\"Le Trésors d'Erebor\" style=\"display:none;left:525px;\"/>";
    
    if (!isset($_POST) || empty($_POST)) {
        money_form();
    }
    else {
        switch ($_POST["money"]){
            case "100" : $money = 100;break;
            case "1000" : $money = 1000;break;
            case "1M" : $money = 1000000;break;
            case "1Md" : $money = 1000000000;break;
            case "Etoile Noire" : $money = 644000000000000000;break;
            case "Etoile de la Mort" : $money = 1080000000000000000;break;
            default : $money = 10000000000000000000000000000000000000000000000000000000000;break; //10^58€
        }
        $str = "Le prélèvement de $money € a bien été effectué. merci pour votre don. </br> Nous espérons vous revoir très bientôt (d'ici quelques minutes) pour un nouveau don </br></br> \"Ensemble, construisons le rêve de chacun : Une Station Spatiale de Combat Interplanétaire\"";
        echo "</br><p class=\"success dragon\"><strong>".$str."</strong></p></br>";
    }
    
    Pied();
    //pas de verif Sauron car cette page est réservée aux pigeons (donc les admins ne sont pas censés y arriver... mais ils peuvent s'ils la cherchent)
    
?>    