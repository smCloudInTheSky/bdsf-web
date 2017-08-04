<?php
session_start();
include("config.php");
include("db.php");

function verif_authent(){
    //global $AUTHENT;
    if(!isset($_SESSION['nomuser'])) {
        header('Location: index.php');
        //printf("accès interdit");
        affiche_erreur(5); //rt si toi aussi t'es triste que ça s'affiche pas :'(
        //die();
    }
}

function verif_authent_capitaine(){
    //global $AUTHENT;
    if(!isset($_SESSION['grade']) || ($_SESSION['grade'] == "pigeon")) {
        header('Location: index.php');
        //die();
    }
}

function verif_authent_admin(){
    //global $AUTHENT;
    if(!isset($_SESSION['grade']) || ($_SESSION['grade'] == "pigeon") || ($_SESSION['grade'] == "capitaine")) {
        header('Location: index.php');
        //die();
    }
}

function verif_Sauron(){
    /*Lance automatiquement le Mode Sauron si Sauron est connecté
      A effectuer une fois la page entièrement chargé (donc après le FOOTER)*/
    if($_SESSION['profil'] == "Lord of the Mordor" || $_SESSION['grade'] == "Sauron") {
        echo "<script>ModeSauron();</script>";
    }
}

function check_hack($data){
    /** prend le POST renvoyé et teste tous les champs. Si un champ possède un ";", 
        on renvoit une erreur et on n'applique pas les modifs et recherches dans la BDD.
        
        Tous les "\" sont supprimés pour éviter d'en passer en argument.
        
        Les doubles quotes sont ensuite précédées de "\" pour qu'elles soient 
        prisent en compte comme caractère et non fin de chaîne.
        
        On renvoit ensuite les nouvelles data nettoyées et sécurisées ;)
        
        C'est à peu près tout ^^' 
        (si d'autres moyens de hacker la BDD par les formulaires est trouvés, 
        les correctifs se feront ici
    **/
    $i = 0;
    foreach($data as $field){
        //strpbrk renvoit false s'il ne trouve pas d'occurence de la chaîne donnée en argument (ici un ";")
        if(strpbrk($field,";") != false){
            /* *le tonnerre gronde, la Montagne se réveille, le Seigneur des 
                Ténèbres jusque là enfermé dans sa tour sort pour la première fois, 
                vétu de son armure et de sa lourde masse d'arme. Visiblement il est
                très mécontent et cherche quelqu'un du regard, hurlant son nom dans
                un cri terrifiant venu du fond des Enfers, faisant fuir orcs, lumières
                et démons. Personne ne souhaiterait rester à moins d'1km du Noir Seigneur
                de la tour en ce moment, tous creusent déjà la tombe de l'appelé, tous
                savent qu'il n'a aucune chance... Si seulement il n'avait pas essayé de
                jouer au plus fort... Si seulement il avait respecté l'unique interdiction,
                celle d'oublier, comme tous ici, le point virgule, maudit et chassé de ce monde
                par toutes les grandes puissances de l'Univers...*
                Là c'est vraiment la merde ^^"
            */
            //On affiche le fait qu'on a repéré la tentative de hack
            affiche_erreur(25);
            //On annhile tout droit accordé à l'user, On réduit son compte à néant... 
            //(obtient le grade "" qui l'envoie aux Enfers immédiatement et lui interdit tout (le compte est mort)
            $by = $_SESSION['profil'];
            if($db = db_connect()){
                if(!copy("img/pigeon.jpg","img/profiles/$by.jpg")){
                    db_close($db);
                    affiche_erreur(18);
                    return false;
                }
                else{
                    $req = "UPDATE eleves SET profilor = 'La Mort' WHERE pseudo = '$by';";
                    $req .= "UPDATE eleves SET grade = 'traitre' WHERE pseudo = '$by';";
                    $req .= "UPDATE eleves SET nominator = 'La Mort' WHERE pseudo = '$by';";
                    $res = db_query($db,$req);
                    db_close($db);
                    if($res == 0){
                        affiche_erreur(1);
                        return false;
                    }
                    $message = "
                        le tonnerre gronde, la Montagne se réveille, le Seigneur des 
                        Ténèbres jusque là enfermé dans sa tour sort pour la première fois, 
                        vétu de son armure et de sa lourde masse d'arme. Visiblement il est
                        très mécontent et cherche quelqu'un du regard, hurlant son nom dans
                        un cri terrifiant venu du fond des Enfers, faisant fuir orcs, lumières
                        et démons. Personne ne souhaiterait rester à moins d'1km du Noir Seigneur
                        de la tour en ce moment, tous creusent déjà la tombe de l'appelé, tous
                        savent qu'il n'a aucune chance... Si seulement il n'avait pas essayé de
                        jouer au plus fort... Si seulement il avait respecté l'unique interdiction,
                        celle d'oublier, comme tous ici, le point-virgule, maudit et chassé de ce monde
                        par toutes les grandes puissances de l'Univers...
                    ";
                    $_SESSION['grade'] = "traitre";
                    echo "<script> ModeSauron();document.getElementById('MSMP').style.display='none';alert("+ $message +"); </script>";
                }
            }
            else {
                affiche_erreur(0);
                return false;
            }
            return false;
        }
        else{
            //pas de destruction d'user, on agit sur les "\" et doubles quotes
            $field = stripslashes($field);
            //antislashages des doubles quotes
            //TODO
            //On remplace les data par les nouveaux corrigées
            $data[i] = $field;
        }
        $i++;
    }
    return true;
}

function config($pseudo,$grade,$pts) {
    global $CO, $nom_hote, $nom_user, $nom_base,$mdp;
    printf("configuration lancée");
    $_SESSION['nomhote'] = $nom_hote;
    $_SESSION['nombase'] = $nom_base;
    $_SESSION['nomuser'] = $nom_user;
    $_SESSION['profil'] = $pseudo;
    $_SESSION['grade'] = $grade; /*pigeon pour les autres, autre pour les admins*/
    $_SESSION['mdp'] = $mdp;
    $_SESSION['pts'] = $pts;
    $_SESSION['co'] = 1;
}

function rechercher_livre($data) {
    //On check le hack
    if(!check_hack($data)){
        //la punition est effectuée dans le check_hack
        return false;
    } 
    if ( $db = db_connect()) {
        /*Cas d'une recherche sans spécificité*/
        if (empty($data['search'])){
            /*Recherche dans tout type d'Oeuvre*/
            if ($data['type'] == "all"){
                $req = "SELECT * FROM bibliotheque ORDER BY statut, titre;";
            }
            else{
                /*Recherche dans les Livres*/
                if($data['type'] == "livres"){
                    $req = "SELECT * FROM bibliotheque WHERE type_oeuvre = 'SF' ORDER BY statut, titre;";
                }
                else {
                /*Recherche dans les BDs*/
                    if ($data['type'] == "BD") {
                        $req = "SELECT * FROM bibliotheque WHERE type_oeuvre = 'BD'ORDER BY statut, titre;";
                    }  
                    else{
                        if ($data['type'] == "comics"){
                            $req = "SELECT * FROM bibliotheque WHERE type_oeuvre = 'CO'ORDER BY statut, titre;";
                        }
                        else {
                            $req = "SELECT * FROM bibliotheque WHERE type_oeuvre = 'XB' ORDER BY statut, titre;";
                        }
                    }
                }
            }
        }
        /*Cas d'une recherche avec spécificité*/
        else{
            /*Recherche dans tout type d'Oeuvre*/
            $rub = $data['rubrique'];
            $search = $data['search'];
            if ($data['type'] == "all"){
                $req = "SELECT * FROM bibliotheque WHERE $rub = '$search' ORDER BY statut, titre;";
            }
            else{
                /*Recherche dans les Livres*/
                if($data['type'] == "livres"){
                    $req = "SELECT * FROM bibliotheque WHERE $rub = '$search' and type_oeuvre = 'SF'ORDER BY statut, titre;";
                }
                else{
                    /*Recherche dans les BDs*/
                    if($data['type'] == "BD") {
                        $req = "SELECT * FROM bibliotheque WHERE $rub = '$search' and type_oeuvre = 'BD' ORDER BY statut, titre;";
                    }   
                    else{
                        if($data['type'] == "CO") {
                            $req = "SELECT * FROM bibliotheque WHERE $rub = '$search' and type_oeuvre = 'CO' ORDER BY statut, titre;";
                        }
                        else {
                            $req = "SELECT * FROM bibliotheque WHERE $rub = '$search' and type_oeuvre = 'XB' ORDER BY statut, titre;";
                        }
                    }
                }
            }
        }
        
        $res = db_query($db,$req);
        //echo "<p> avant : ".$res."</p>";
        db_close($db);
        if ($res == 0) {
          affiche_erreur(1);
          return null;
        }
        return $res;
    }
    else{
        affiche_erreur(0);
        return null;
    }
}

function get_users() {
    //Pas besoin de check, on envoie aucun varibale à la BDD
    if ( $db = db_connect()){
        $req = "SELECT pseudo,prenom,nom,grade,emprunts,points,mail,nominator,profilor FROM eleves ORDER BY pseudo";
        $res = db_query($db,$req);
        db_close($db);
        if(!$res){
            affiche_erreur(1);
            return null;
        }
        return $res;
    }
    else{
        affiche_erreur(0);
        return null;
    }
}

function get_user($pk_user) {
    //On check le hack
    if(!check_hack([$pk_user])){
        //la punition est effectuée dans le check_hack
        return false;
    } 
    if ( $db = db_connect()){
        $req = "SELECT pseudo,prenom,nom,grade,emprunts,points,mail,nominator,profilor FROM eleves WHERE pseudo = '$pk_user'";
        $res = db_query($db,$req);
        db_close($db);
        if(!$res){
            affiche_erreur(1);
            return null;
        }
        return $res;
    }
    else{
        affiche_erreur(0);
        return null;
    }
}

function grade_other($db,$user){
    //on récupère le grade de quelqu'un
    //La BDD doit avoir été ouverte avant (varibale $db) et devra être refermé après
    $req_check = "SELECT grade FROM eleves WHERE pseudo = '$user'";
    $res_check = db_query($db,$req_check);
    if($res_check == 0){
        affiche_erreur(1);
        return false;
    }
    if(db_count($res)==0){
        db_close($db);
        affiche_erreur(2);
        return false;
    }
    $res_net = db_fetch($res_check)['grade']; 
    return $res_net;
}

function update_profil($file,$post){
    //On check le hack
    if(!check_hack($post)){
        //la punition est effectuée dans le check_hack
        return false;
    }
    //différencie si on vient du formulaire de modif de BDD ou d'upload d'image et appelle la bonne fonction en conséquence
    if(isset($file['avatar']['name']) && !empty($file['avatar']['name'])) {
        //On vérifie qui doit être modifier
        if(empty($post['modifqui'])){
            $by = $_SESSION['profil'];
            $qui = $_SESSION['profil'];
            //Cas non litigieux où on se modifie soit-même
            if($db = db_connect()){
                $req = "UPDATE eleves SET profilor = '$by' WHERE pseudo = '$qui'";
                $res = db_query($db,$req);
                db_close($db);
                if($res == 0){
                    affiche_erreur(1);
                    return false;
                }
                else {
                    return upload_img($file,"img/profiles/",$qui);
                }
            }
            else{
                affiche_erreur(0);
                return false;
            }
        }
        else {
            $by = $_SESSION['profil'];
            $qui = $post['modifqui'];
            //On vérifie le grade
            if($_SESSION['grade'] == "capitaine"){
                //on vérifie le grade de la personne voulu
                if($db = db_connect()){
                    if($grade_qui = grade_other($db,$qui) == false)
                        return false;
                    if($grade_qui != "pigeon" && $grade_qui != "capitaine"){
                        db_close($db);
                        affiche_erreur(5);
                        return false;
                    }    
                    else {
                        $req = "UPDATE eleves SET profilor = '$by' WHERE pseudo = '$qui'";
                        $res = db_query($db,$req);
                        db_close($db);
                        if($res == 0){
                            affiche_erreur(1);
                            return false;
                        }
                        return upload_img($file,"img/profiles/",$qui);
                    }
                    
                }
                else{
                    affiche_erreur(0);
                    return false;
                }                
                //si sa modification est interdite (admin) alors on renvoit l'erreur 5
                //Sinon on accepte la modification (et on le rajoute dans la BDD)
            }
            else {
                //on vérifie si on essaie de modifier un HyperAdmin
                if($qui == "Lord of the Mordor" || $qui == "Cthulhu" || $qui == "Diablo") {
                    //Les HyperAdmins ne peuvent pas s'altérer
                    if($_SESSION['grade'] == "HyperAdmin") {
                        //les combats entre HyperAdmins n'aboutissent pas
                        affiche_erreur(14);
                        echo "<script>alert('Désolé, cet opération a échoué... Mais réjouissez-vous, vous avez réussi à détruire le Monde !!!!'); </script>";
                        return false;
                    }
                    //Si c'est le cas, on applique l'algo : "L'HyperAdmin modifie l'admin et le rétrograde (en le rajoutant dans la BDD)"
                    if($db = db_connect()){
                        if(!copy("img/pigeon.jpg","img/profiles/$by.jpg")){
                            db_close($db);
                            affiche_erreur(18);
                            return false;
                        }
                        else{
                            $req = "UPDATE eleves SET profilor = '$qui' WHERE pseudo = '$by';";
                            $req .= "UPDATE eleves SET grade = 'pigeon' WHERE pseudo = '$by';";
                            $req .= "UPDATE eleves SET nominator = '$qui' WHERE pseudo = '$by';";
                            $res = db_query($db,$req);
                            db_close($db);
                            if($res == 0){
                                affiche_erreur(1);
                                return false;
                            }
                            $_SESSION['grade'] = "pigeon";
                            echo "<script> ModeSauron();document.getElementById('MSMP').style.display='none';alert('En essayant de vous battre contre Sauron, vous avez échoué et été rétrogradé au statut de pigeon... dommage'); </script>";
                        }
                    }
                    else{
                        affiche_erreur(0);
                        return false;
                    }
                    affiche_erreur(12);
                    affiche_erreur(5);
                    $_SESSION['grade'] = "pigeon";
                    echo "<script> ModeSauron();document.getElementById('MSMP').style.display='none';alert('En essayant de vous battre contre Sauron, vous avez échoué et été rétrogradé au statut de pigeon... dommage'); </script>";
                    return true;
                }
                else {
                    //Sinon on accepte la modification (et on le rajoute dans la BDD)
                    if($db = db_connect()){
                        $req = "UPDATE eleves SET profilor = '$by' WHERE pseudo = '$qui'";
                        $res = db_query($db,$req);
                        db_close($db);
                        if($res == 0){
                            affiche_erreur(1);
                            return false;
                        }
                        else {
                            return upload_img($file,"img/profiles/",$qui);
                        }
                    }
                    else{
                        affiche_erreur(0);
                        return false;
                    }                   
                }
            }
            
        }
    }
    //si on n'a pas de file c'est qu'on a un post (sinon le post renverra une exception)
    else {
        return update_profil_data($post);
    }
}

function update_profil_data($data) {
    //Pas besoin de checké le hack, il a été fait avant
    //modifie la BDD du profil
    //On regarde qui doit être modifié
    if($data['qui'] == "other"){
        $qui = $data['modifqui'];
    }
    else {
        $qui = $data['qui'];
    }
    //Info supplémentaire donné par le formulaire
    $admin = $_SESSION['profil'];
    $quoi = $data['carac'];
    $que = $data['modif'];
    $add = $data['plus']; //par défault vaut +, rarement utilisé
    //vérification de la conformité du formulaire (s'il manque un champ, on ne pas accéder à la requête)
    if(empty($qui) || empty($quoi) || empty($que)){
        affiche_erreur(4);
        return false;
    }
    if($db = db_connect()){    
    //Listes des check anti-putsh ("Sauron veille au maintient de son Empire")
        //Les traitres n'existe plus, on ne peut donc pas les modifier ^^
        $test_traitre = grade_other($db,$qui);
        if($test_traitre == "traitre"){
            affiche_erreur(26);
            db_close($db);
            return true;
        }
        if($test_traitre == false){
            return false;
        }
        //Un capitaine a des droits réduits, on les vérifie donc
        if($_SESSION['grade'] == "capitaine") {
            //Si on se modifie pas soi, on doit trouver si l'utilisateur modifié a un grade plus élevé que le capitaine
            if($qui != $_SESSION['profil']){
                //On vérifie qu'on agit pas sur un Super-Admin en tant que Capitaine
                if($res_net = grade_other($db,$qui) == false)
                    return false;
                if( $res_net != "pigeon" && $res_net != "capitaine") {
                    affiche_erreur(5);
                    return false;
                }
            }
            //On vérifie qu'on ne tente pas une modification de grade interdite
            if( $que != "pigeon" && $que != "capitaine" ) {
                affiche_erreur(5);
                return false;
            }
            $req = "UPDATE eleves SET $quoi = '$que' WHERE pseudo='$qui';";
            $req .= "UPDATE eleves SET nominator = '$admin' WHERE pseudo='$qui';";
            $res = db_query($db,$req);
            //Si on a modifié son profil (donc forcément en "pigeon", c'est débile mais pourquoi pas), on met à jour la variable de session
            if ($quoi == "grade" && $qui == $_SESSION['profil']){
                //on adapte la session au changement de grade (en cas de rétrogradatio)
                $_SESSION['grade'] = $que;
            }
            db_close($db);
            return true;
        }
        //Cas où on est Super-Admin (droit plus élevé : moins de contrôle)
        else { 
            //Les comptes de sécurités ne peuvent pas être atteints
            if(($qui == "Lord of the Mordor" || $qui == "Cthulhu" || $qui == "Diablo") && $qui != $_SESSION['profil']) {
                if($_SESSION['grade'] == "HyperAdmin") {
                    //les combats entre HyperAdmin n'aboutissent pas
                    affiche_erreur(14);
                    echo "<script>alert('Désolé, cet opération a échoué... Mais réjouissez-vous, vous avez réussi à détruire le Monde !!!!'); </script>";
                    return false;
                }
                else {
                    //Sauron, Cthulhu et Diablo sont intouchables, si vous vous y risquez, ils vous le feront payer
                    $req = "UPDATE eleves SET grade = 'pigeon' WHERE pseudo = '$admin';";
                    $req .= "UPDATE eleves SET nominator = '$qui' WHERE pseudo = '$admin';";
                    $res = db_query($db,$req);
                    db_close($db);
                    affiche_erreur(12);
                    affiche_erreur(5);
                    $_SESSION['grade'] = "pigeon";
                    echo "<script> ModeSauron();document.getElementById('MSMP').style.display='none';alert('En essayant de vous battre contre Sauron, vous avez échoué et été rétrogradé au statut de pigeon... dommage'); </script>";
                    return true;
                }
            }
            //Si on modifie les points assos, la requête est différentes des autres
            if ($quoi == "points"){
                $req = "UPDATE eleves SET $quoi = $quoi $add $que WHERE pseudo='$qui'";
            }
            //Sinon elle sera de la même forme
            else{
                //personne n'a le droit de nommer des HyperAdmin ! Même pas les HyperAdmin !
                if($quoi == "grade" && $que == "HyperAdmin"){
                    affiche_erreur(5);
                    return false;
                }
                //On essaie pas de mettre le chaos parmis l'anarchie : requête acceptée
                else{
                    $req = "UPDATE eleves SET $quoi = '$que' WHERE pseudo='$qui';";
                    if($quoi == "grade" or $quoi == "nom" or $quoi == "prenom") {
                        //On dit qui a modifier le grade de la personne
                        $req .= "UPDATE eleves SET nominator = '$admin' WHERE pseudo='$qui';";
                        if ($qui == $_SESSION['profil']){
                            //on adapte la session au changement de grade (en cas de rétrogradation)
                            $_SESSION['grade'] = $que;
                        }
                    }
                }
            }
            //Si la requête a été accepté, on la lance ici
            $res = db_query($db,$req);
            db_close($db);
            return true;
        }
    }
    else {
        affiche_erreur(0);
        return false;        
    }
}

function voir_all_emprunts(){
    //Pas besoin de check, on envoit aucune varibale à la BDD :)
    if($db = db_connect()){
        /*récupérer les emprunts de $user avec des infos sur les livres (titre, sous titre, auteurS, série, tome)*/
        $req = "SELECT id_emprunt, pseudo, type_oeuvre, titre, sous_titre, serie, auteur1, auteur2, tome, date_emprunt, date_retour, etat_emprunte, image FROM                                                                                                    
                (eleves JOIN emprunts ON (pseudo = id_eleve)) JOIN bibliotheque ON (id_oeuvre = id_ouvrage) ORDER BY date_retour;";
        $res = db_query($db,$req);
        db_close($db);
        if(!$res){
            affiche_erreur(1);
            return null;
        }
        return $res;        
    }
    else {
        affiche_erreur(0);
        return null;
    }    
}

function voir_emprunts($user){
    //On check le hack
    if(!check_hack([$user])){
        //la punition est effectuée dans le check_hack
        return false;
    } 
    if($db = db_connect()){
        /*récupérer les emprunts de $user avec des infos sur les livres (titre, sous titre, auteurS, série, tome)*/
        $req = "SELECT type_oeuvre, titre, sous_titre, serie, auteur1, auteur2, tome, date_emprunt, date_retour, etat_emprunte, image FROM                                                                                                    
                (eleves JOIN emprunts ON (pseudo = id_eleve)) JOIN bibliotheque ON (id_oeuvre = id_ouvrage)     
                WHERE pseudo = '$user' ORDER BY date_retour";
        $res = db_query($db,$req);
        db_close($db);
        if(!$res){
            affiche_erreur(1);
            return null;
        }
        return $res;        
    }
    else {
        affiche_erreur(0);
        return null;
    }
}

function emprunter($user,$ID,$etat) {
    //On check le hack
    if(!check_hack([$user,$ID,$etat])){
        //la punition est effectuée dans le check_hack
        return false;
    } 
    if ( $db = db_connect()){
        $pk_emprunt = "CONCAT('$user','$ID',DATE(NOW()))"; /*Concaténation de Chaîne en PGSQL*/
        $date = "CURRENT_DATE + INTERVAL '7 days'"; /*Format "aujourd'hui + 7 jours" -- Fonction PQSQL*/
        $req = "INSERT INTO emprunts (id_emprunt, id_eleve, id_oeuvre, date_emprunt, date_retour, etat_emprunte) VALUES ($pk_emprunt,'$user',$ID,DATE(NOW()),$date,$etat);";
        $req .= "UPDATE bibliotheque SET statut = 1 WHERE id_ouvrage = $ID;";
        $req .= "UPDATE eleves SET emprunts=emprunts+1 WHERE pseudo = '$user';";
        $res = db_query($db,$req);
        //printf($req);
        db_close($db);
        //printf($res);
        if(!$res){
            affiche_erreur(1);
            return false;
        }
        //printf("\n$user")>>~/workspace/database/fill_emprunts.csv ;
        return true;
    }
    else{
        affiche_erreur(0);
        return false;
    }    
}

function supp_emprunt($ID) {
    //On check le hack
    if(!check_hack([$ID])){
        //la punition est effectuée dans le check_hack
        return false;
    } 
    if ( $db = db_connect()){
        $req = "SELECT id_eleve, id_oeuvre FROM emprunts WHERE id_emprunt = '$ID'";
        $res = db_query($db,$req);
        if($res==0){
            affiche_erreur(1);
            return false;
        }
        $res_net = db_fetch($res);
        $user = $res_net['id_eleve'];
        $livre = $res_net['id_oeuvre'];
        $req_2 = "UPDATE bibliotheque SET statut = 0 WHERE id_ouvrage = $livre;";
        $req_2 .= "UPDATE eleves SET emprunts=emprunts-1 WHERE pseudo = '$user';";
        $req_2 .= "DELETE FROM emprunts WHERE id_emprunt = '$ID';";
        $res_2 = db_query($db,$req_2);
        db_close($db);
        if($res_2==0){
            affiche_erreur(1);
            return false;
        }
        return true;
    }
    else{
        affiche_erreur(0);
        return false;
    }        
}

function create_user($POST) {
    //On check le hack
    if(!check_hack($POST)){
        //la punition est effectuée dans le check_hack
        return false;
    } 
    $prenomUser = $POST['firstname'];
    $nomUser = $POST['name'];
    $pseudoUser = $POST['pseudo'];
    $mail = $POST['mail'];
    $mdp = $POST['mdp'];
    if ($db = db_connect()) {
		$req = "INSERT INTO eleves (pseudo,nom,prenom,grade,emprunts,mdp,points,mail,nominator) VALUES ('$pseudoUser','$nomUser','$prenomUser','pigeon',0,'$mdp',10,'$mail','Gandalf')";
		$res = db_query($db,$req);
		db_close($db);
		if($res == 0){
		    affiche_erreur(1);
		    return false;
		}
		return true;
	}
	else {
	    affiche_erreur(0);
		return false;
	}
}

function create_book($FILES,$POST) {
    //On check le hack
    if(!check_hack($POST)){
        //la punition est effectuée dans le check_hack
        return false;
    }    
    $Etat = $POST['etat'];
    $Statut = $POST['statut'];
    $Couvert = $POST['couv'];
    $Type = $POST['type'];
    $Titre = $POST['titre'];
    $Stitre = $POST['sous_titre'];
    $Tome = $POST['tome'];
    $Serie = $POST['serie'];
    $Author1 = $POST['auteur1'];
    $Author2 = $POST['auteur2'];
    $Edition = $POST['edition'];
    $Annee = $POST['annee'];
    $Categorie = $POST['cate'];
    $vide='null';
    if ($Type == "XB"){
        //Si on ajoute une exclusivité BD-SF, alors on charge le fichier
        //Cas où il n'y a pas de fichier (normalement le js l'a vérifier avant)
        if (empty($FILES['avatar']['name'])){
            affiche_erreur(100); //code inexistant
            return false;
        }
        else {
            //Si on n'arrive pas à charger le fichier, on échoue sans remplir la BDD
            //le fichier est upload sous "src/XB/$titre.pdf"
            if(!upload_pdf($FILES,"XB/",$Titre)){
                return false;
            }
            //sinon on poursuit en faisant le référencement dans la BDD
        }
    }
    if (empty($Serie)) {
        $Serie=$vide;
    }
    else {
        $Serie="'$Serie'";}
    if (empty($Stitre)) {
        $Stitre=$vide;
    }
    else {
        $Stitre="'$Stitre'";}
    if (empty($Tome)) {
        $Tome=$vide;
    }
    if (empty($Author1)) {
        $Author1=$vide;
    }
    else {
        $Author1="'$Author1'";}
    if (empty($Author2)) {
        $Author2=$vide;
    }
    else {
        $Author2="'$Author2'";}
    if (empty($Edition)) {
        $Edition=$vide;
    }
    else {
        $Edition="'$Edition'";}
    if (empty($Annee)) {
        $Annee=$vide;
    }
    if (empty($Categorie)) {
        $Categorie=$vide;
    }
    else {
        $Categorie="'$Categorie'";}
    if ( $db = db_connect()) {
        $re = "Select MAX(id_ouvrage) as maxi from bibliotheque";
        $maximum = db_query($db,$re);
		if($maximum == 0){
		    affiche_erreur(1);
		    return false;
		}
		$ID= db_fetch($maximum)['maxi'];
		$ID=$ID+1;
		$req = "INSERT INTO bibliotheque 
		        (id_ouvrage, type_oeuvre, statut, etat, couverture, titre, sous_titre, serie, tome, auteur1, auteur2, categorie, edition, annee, image)
		        VALUES 
		        ($ID, '$Type', $Statut, $Etat, $Couvert, '$Titre', $Stitre, $Serie, $Tome, $Author1, $Author2, $Categorie, $Edition, $Annee, 0)";
		$res=db_query($db,$req);
		db_close( $db );
		if($res == 0){
		    echo $req;
		    affiche_erreur(1);
		    return false;
		}
		affiche_success(1);
		echo "<p class=\"starcraft\" style=\"color:#26FC00;\"><strong> Id du livre : $ID (indispensable pour les Mises à Jour)</strong></p>";
		system("echo \" \n$ID, '$Type', $Statut, $Etat, $Couvert, '$Titre', $Stitre, $Serie, $Tome, $Author1, $Author2, $Categorie, $Edition, $Annee, 0)\" >> ~/database/fill_bibliotheque.csv"); 
		return true;
    }
	else {
	    affiche_erreur(0);
		return false;
	}
}

function supp_book($ID){
    //On check le hack (sur $ID, seule variable envoyée en requête)
    if(!check_hack([$ID])){
        //la punition est effectuée dans le check_hack
        return false;
    }
    if ( $db = db_connect()) {
        //On regarde si l'oeuvre est un pdf sur le serveur ou non
        $req_type = "SELECT titre, type_oeuvre FROM bibliotheque WHERE id_ouvrage = $ID";
        $res_type = db_query($db,$req_type);
        if ($res_type == 0){
            affiche_erreur(1);
            //printf("erreur req_emp : $req_emp \n");
            return false;
        }
        $res_net = db_fetch($res_type);
        $type = $res_net['type_oeuvre'];
        $titre = $res_net['titre'];
        //Si c'est une exclusivité BD-SF, il faut supprimé le pdf y menant
        if ($type == "XB"){
            //suppression du pdf
            if (!@unlink("XB/$titre.pdf")){
                affiche_erreur(19);
                return false;
            }
        }
        //Sinon c'est un livre ou BD, il peut donc avoir été emprunté : il faut le vérifier pour supprimer l'emprunt
        else {
            /*requête de suppression de l'oeuvre $ID dans la table $type ET dans dans details_l si $type vaut "livre", details_b sinon*/
            /*vérifier si le livre est emprunté*/
            $req_emp = "SELECT id_eleve FROM emprunts WHERE id_oeuvre = $ID"; /*trouver si le livre est emprunté (dans la table "emprunt"), 
            si c'est le cas on peut en extraire l'id-eleve pour la suite, sinon le résultat sera vide*/ 
            $res_emp = db_query($db,$req_emp);
            if ($res_emp == 0){
                affiche_erreur(1);
                return false;
            }
            /*Si c'est le cas, trouver qui l'a emprunté, le retirer des emmprunts et décrémenter le nombre d'emprunt dans eleves*/
            if (db_count($res_emp) > 0){
                $colum_emp = db_fetch($res_emp); /*Normalement l'élève est seul*/
                $user = $colum_emp['id_eleve'];
                /*Suppression des emprunts et décrémentation*/
                $req_supp_emp = "DELETE FROM emprunts WHERE id_oeuvre = $ID;";   
                $req_supp_emp .= "UPDATE eleves SET emprunts=emprunts -1 WHERE pseudo = '$user';";
                $res_supp_emp = db_query($db,$req_supp_emp); 
                /*erreur de requête sur la suppression*/
                if ($res_supp_emp == 0){
                    db_close($db);
                    affiche_erreur(1);
                    return false;
                }
            }
        }
        /*On retire ensuite le livre de la bibliotheque*/
        $req_supp_livre = "DELETE FROM bibliotheque WHERE id_ouvrage = $ID;";
        $res_supp_livre = db_query($db,$req_supp_livre);
        db_close($db);
        if($res_supp_livre == 0){
            affiche_erreur(1);
            return false;
        }
        affiche_success(2); //Le livre a été supprimé de la BDD 
        //--> on s'attaque maintenant à sa couverture (si ça plante on saura qu'il ne reste plus que ça)
        //On regarde d'abord s'il y a une couverture, puis on essaie de la supprimer (l'opérateur paresseux nous assurant que la suppression ne soit tenter que si le fichier existe)
        if(file_exists("img/couverture/$ID.jpg") && !unlink("img/couverture/$ID.jpg")){
            affiche_erreur(20);
            return false;
        }
        return true;  
    }
	else {
	    affiche_erreur(0);
		return false;
	}
}

function up_book($file, $post){
    //On check le hack
    if(!check_hack($post)){
        //la punition est effectuée dans le check_hack
        return false;
    }
    //différencie si on vient du formulaire de modif de BDD ou d'upload d'image et appelle la bonne fonction en conséquence
    if(!empty($file['avatar']['name'])) {
        $qui = $post['qui'];
        if($db = db_connect()){
            $req = "Select image from bibliotheque where id_ouvrage=$qui;";
            $res = db_query($db, $req);
            if ($res == 0 || db_count($res) == 0) {
                db_close($db);
                affiche_erreur(2);
                return false;
            }
            else {
                $req = "UPDATE bibliotheque SET image = '$qui' WHERE id_ouvrage = '$qui'";
                $res = db_query($db,$req);
                db_close($db);
                return upload_img($file,"img/couverture/",$qui);
            }
        }
        else{
            affiche_erreur(0);
            return false;
        }
    }
    //si on n'a pas de file c'est qu'on a un post (sinon le post renverra une exception)
    else {
        return up_book_data($post);
    }
}

function up_book_data($data){
    //Pas besoin de checké le hack, il a été fait avant
    $qui = $data['qui'];
    $quoi = $data['carac'];
    $que = $data['modif'];
    $statut=$data['statut'];
    $type=$data['type'];
    $couv=$data['couv'];
    $etat=$data['etat'];
    if(empty($qui) || empty($quoi)){
        affiche_erreur(4);
        return false;
    }
    if($db = db_connect()){    
        $req = "Select $quoi from bibliotheque where id_ouvrage=$qui;";
        $res = db_query($db, $req);
        if ($res == 0 || db_count($res) == 0) {
            db_close($db);
            affiche_erreur(2);
            return false;
        }
        else {
            if ($quoi=='statut'){
                $req = "UPDATE bibliotheque SET $quoi = $statut WHERE id_ouvrage=$qui;";
                $res = db_query($db,$req);
                db_close($db);
                return true;
            }
            if ($quoi=='couverture'){
                $req = "UPDATE bibliotheque SET $quoi = $couv WHERE id_ouvrage=$qui;";
                $res = db_query($db,$req);
                db_close($db);
                return true;
            }
            if ($quoi=='etat'){
                $req = "UPDATE bibliotheque SET $quoi = $etat WHERE id_ouvrage=$qui;";
                $res = db_query($db,$req);
                db_close($db);
                return true;
            }
            /*if ($quoi=='type'){
                $req = "UPDATE bibliotheque SET $quoi = '$type' WHERE id_ouvrage=$qui;";
                $res = db_query($db,$req);
                db_close($db);
                return true;
            }*/
            if ($quoi=='tome' || $quoi=='annee'){
                if ($que>0) {
                    $req = "UPDATE bibliotheque SET $quoi = $que WHERE id_ouvrage=$qui;";
                    $res = db_query($db,$req);
                    db_close($db);
                    return true;
                }
                else {
                    affiche_erreur(4);
                    return false;
                }
            }
            else {
                $req = "UPDATE bibliotheque SET $quoi = '$que' WHERE id_ouvrage=$qui;";
                $res = db_query($db,$req);
                db_close($db);
                return true;
            }
        }
    }
    else {
        affiche_erreur(0);
        return false;        
    }
}

function create_CR($FILES,$POST) {
    //On check le hack
    if(!check_hack($POST)){
        //la punition est effectuée dans le check_hack
        return false;
    }
    $Titre = $POST['Name'];
    if (empty($FILES['avatar']['name'])){
        affiche_erreur(100); //code inexistant
        return false;
    }
    else {
        //le fichier est upload sous "src/CR/$titre.pdf"
        if(!upload_pdf($FILES,"CR/",$Titre)){
            return false;
        }
    }
}

//UNUSED FUNCTION (à vérifier)
/*
function set_user($pk_user,$nomMod,$debitMod) {
    if ( $db = db_connect()) {
        $req = 'UPDATE client SET nom_client = \''.test_input($nomMod).'\', debit_client = \''.format_number(test_input($debitMod)).'\' WHERE num_client = '.test_input($pk_user);

        $rep = db_query($db,$req);
        db_close( $db );

        return true;
    }
    else {
        affiche_erreur("La tour de Sauron vient de s'effondrer, revenez ultérieurement lorsque nous l'auront réparée :/");
        return false;
    }

}
*/

function verif_mdp($ID,$mdp) {
    //On check le hack (sur $ID, seule variable envoyée en requête)
    if(!check_hack([$ID])){
        //la punition est effectuée dans le check_hack
        return false;
    }
    if ($db = db_connect()) {
      $req = "SELECT mdp, grade,points FROM eleves WHERE pseudo = '$ID';";
      $res = db_query($db,$req);
      db_close($db);  
      if ($res==0){
          affiche_erreur(1);
          return false;
      }
      if (db_count($res)==0){
          affiche_erreur(11);
          return false;
      }
      $colm = db_fetch($res);
      $pwd = $colm['mdp'];
      $grade = $colm['grade'];
      $pts = $colm['points'];
      if($mdp == $pwd){
        config($ID,$grade,$pts);
        return true;
      }
      else {
        affiche_erreur(3);
        return false;
      }
    }
    else {
      affiche_erreur(0);
      return false;
    }
}

function detruire_session() {
	session_destroy();
}

//UNUSED FUNCTIONS (à vérifier)
/*
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function format_number($str) {
  return str_replace(',','.',$str);
}  
*/

function upload_img($FILES,$dossier,$ID) {
    //Le but est de rangé le $FILE dans $dossier/$ID.jpg (fonctionne pour les couvertures et les photos de profil)
    //$prov = $FILES['avatar']['tmp_name'];
    $fichier = basename($FILES['avatar']['name']); //nom du fichier
    $taille_maxi = 1000000; //taille en octets (on ma mettre 1Mo)
    $taille = filesize($FILES['avatar']['tmp_name']); //emplacement temporaire (supprimé si laissé ici)
    $extensions = array('.png', '.jpg', '.jpeg'); //extensions autorisées pour la couverture (seront renommé en .jpg sans autre forme de questions)
    $extension = strrchr($FILES['avatar']['name'], '.'); //extension du fichier (récupérer à partir du nom de fichier)
    //echo "</br><p>$FILES </br> $dossier </br> $prov </br> $fichier </br> $taille </br> $extension</p> </br>";
    //Début des vérifications de sécurité...
    if(!in_array($extension, $extensions)) {
        //extension interdite
        affiche_erreur(15);
        return false;
    }
    if($taille>$taille_maxi) {
        //taille excessive
        affiche_erreur(16);
        return false;
    }
    else {
         //On formate le nom du fichier ici...
         //$fichier = strtr($fichier,
         //               'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
         //               'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); 
         //$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
         /*move_upload_file : 
            renvoit true si ça marche
            Ecrase le fichier si ce dernier existe déjà (donc c'est ce qu'on veut pour du "remplacement")*/
        if(move_uploaded_file($FILES['avatar']['tmp_name'], $dossier.$fichier)) {
            if(rename($dossier.$fichier,$dossier."$ID.jpg")) {
                //succès de l'upload
                affiche_success(5);
                return true;
            }
            else {
                //echec du renommage (cependant le fichier est tout de même sur le serveur :/)
                affiche_erreur(18);
                return false;
            } 
        }
        else {
            //echec du déplaçage
            affiche_erreur(17);
            return false;
        }
    }
}

function upload_pdf($FILES,$dossier,$name) {
    //Le but est de rangé le $FILE dans $dossier/$ID.jpg (fonctionne pour les couvertures et les photos de profil)
    //$prov = $FILES['avatar']['tmp_name'];
    $fichier = basename($FILES['avatar']['name']); //nom du fichier
    $taille_maxi = 1000000000; //taille en octets (on va mettre 1Go)
    $taille = filesize($FILES['avatar']['tmp_name']); //emplacement temporaire (supprimé si laissé ici)
    $extension = strrchr($FILES['avatar']['name'], '.'); //extension du fichier (récupérer à partir du nom de fichier)
    //echo "</br><p>$FILES </br> $dossier </br> $prov </br> $fichier </br> $taille </br> $extension</p> </br>";
    
    //Début des vérifications de sécurité...
    if($extension != '.pdf') {
        //extension interdite
        affiche_erreur(15);
        return false;
    }
    if($taille>$taille_maxi) {
        //taille excessive
        affiche_erreur(16);
        return false;
    }
    else {
         /*move_upload_file : 
            renvoit true si ça marche
            Ecrase le fichier si ce dernier existe déjà (donc c'est ce qu'on veut pour du "remplacement")*/
        if(move_uploaded_file($FILES['avatar']['tmp_name'], $dossier.$fichier)) {
            if(rename($dossier.$fichier,$dossier."$name.pdf")) {
                //succès de l'upload
                affiche_success(5);
                return true;
            }
            else {
                //echec du renommage (cependant le fichier est tout de même sur le serveur :/)
                affiche_erreur(18);
                return false;
            } 
        }
        else {
            //echec du déplaçage
            affiche_erreur(17);
            return false;
        }
    }    
}


function change($POST){
    //On check le hack
    if(!check_hack($post)){
        //la punition est effectuée dans le check_hack
        return false;
    }
    if($db = db_connect()){
        echo "entrée change()";
    	// Harvest submitted e-mail address
    	if (!filter_var($POST['email'], FILTER_VALIDATE_EMAIL)) {
    	    db_close($db);
    		affiche_erreur(22);
    		return false;
    	}
        $email = $POST['email'];
    	// Check to see if a user exists with this e-mail
    	$req = "SELECT mail FROM eleves WHERE mail = $email";
    	$res = db_query($db,$req);
    	echo "<p> $res </p>";
    	db_close($db);
    	if($res == 0) {
    	    affiche_erreur(1);
    	    return false;
    	}
    	if(db_count($res) == 0) {
    	    affiche_erreur(2);
    	    return false;
    	}
    	
    	$userExists = db_fetch($res);
    	
    	// Create a unique salt. This will never leave PHP unencrypted.
    	$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
    
    	// Create the unique user password reset key
    	$password = hash('sha512', $salt.$userExists['mail']);
    
    	// Create a url which we will direct them to reset their password
    	$pwrurl = "www.yoursitehere.com/Reset.php?q=".$password;
    	echo "<p> envoie du mail </p>";
    	// Mail them their key
    	$mailbody = "Cthulhu vous envoie une page pour changer votre mot de passe : $pwrurl";
    	mail($userExists['mail'], "www.yoursitehere.com - Message de Cthulhu - Password Reset", $mailbody);
    	affiche_success(9);
    	return true;
    }
    else {
        affiche_erreur(0);
        return false;
    }    
}

function reini($POST){
    //On check le hack
    if(!check_hack($post)){
        //la punition est effectuée dans le check_hack
        return false;
    }
	// Gather the post data
	$email = $POST['email'];
	$password = $POST['password'];
	$confirmpassword = $POST['confirmpassword'];
	$hash = $POST['q'];
	if($db = db_connect()){

		// Use the same salt from the forgot_password.php file
		$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
	
		// Generate the reset key
		$resetkey = hash('sha512', $salt.$email);
	
		// Does the new reset key match the old one
		if ($resetkey == $hash) {
			if ($password == $confirmpassword) {
				//has and secure the password
				$password = hash('sha512', $salt.$password);
				$req = "UPDATE eleves SET mdp = $password WHERE mail = $email";
				db_query($db,$res);
				db_close($db);
				affiche_success(10);
				return true;
			}
			else {
				affiche_erreur(24);
				return false;
			}
		}
		else {
			affiche_erreur(23);
			return false;
		}
	}
	else {
		affiche_erreur(0);
		return false;
	}
}


?>