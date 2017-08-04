<?php
    include("config.php");

    function EnTete($titre, $css, $js) {
        echo "
            <!DOCTYPE html>\n
            <html lang=\"fr\">\n
              <head>\n
                <meta charset=\"utf-8\">\n
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n
                <meta http-equiv=\"pragma\" content=\"no-cache\" /> \n
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n
                <meta name=\"description\" content=\"Index du site BD-SF\">\n
                <meta name=\"author\" content=\"Denescor\">\n
                <link id=\"icone\" rel=\"icon\" href=\"img/grievous_1.ico\">\n
            
                <title>$titre</title> <!--Le Titre unique-->\n
                
                <!-- On charge le CSS permettant de faire un caroussel-->\n
                <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"/>\n
                <link rel=\"stylesheet\" type=\"text/css\" href=\"feuillesCSS/general.css\"/>\n   
                <link rel=\"stylesheet\" type=\"text/css\" href=\"feuillesCSS/Fonts.css\"/>\n 
                <link rel=\"stylesheet\" type=\"text/css\" href=\"feuillesCSS/Overlay.css\"/>\n 
                <link rel=\"stylesheet\" type=\"text/css\" href=\"feuillesCSS/$css.css\"/> <!-- CSS exclusif à la page -->\n
            
                <!-- on inclut la bibliothèque depuis les serveurs de Google -->\n
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>\n
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>\n
                <script src=\"scriptJS/mode_sauron.js\"></script>\n
                <script src=\"scriptJS/$js.js\"></script> <!-- Javascript exclusif à la page -->\n
                <style type=\"text/css\" media=\"screen\">\n
                    body {
                      /*Ces deux styles ne sont pas pris en compte dans le CSS... I don't know why :/*/
                      /*background-size: 1366px 769px;*/
                      background-image: url(\"img/bdsf.png\");
                      background-repeat: repeat;
                    } 
                  </style>\n
            
              </head> \n 
        ";
    }

    function Pied(){
       echo "
          <!-- FOOTER, c'est le truc tout en bas de la page -->\n
          <footer>\n
              <p class=\"pull-right\"><a href=\"#\">Pour remonter tout en haut, whiiiiiiiiiii ! -</a></p>\n
              <p>&copy; 2017 Royaume Littéraire de BD-SF &middot; <a href=\"credit.php\">Crédit</a></p>\n
          </footer>\n
        
          </body>\n
          </html>\n     
     "; 
    }
    
    function Navigateur_NonCo(){
        echo "  
            <body>
            <section id=\"navigateur\">\n
              <div class=\"container\">\n
        
                <nav class=\"navbar navbar-inverse navbar-static-top\">\n
                  <div class=\"container\">\n
                    <div class=\"navbar-header\">\n
                      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">\n
                        <span class=\"sr-only\">Baladez-vous dans le Royaume de BD-SF</span>\n
                        <span class=\"icon-bar\"></span>\n
                        <span class=\"icon-bar\"></span>\n
                        <span class=\"icon-bar\"></span>\n
                      </button>
                      <a class=\"dragon navbar-brand\" href=\"index.php\">Le Sublimissime Site de BD-SF</a>\n
                      <p class=\"chevalier navbar-brand\">Ou l'art de passer son temps à remplir des formulaires...</p>\n
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">\n
                      <ul class=\"nav navbar-nav\">\n
                        <li class=\"chevaliersmall active\"><a href=\"inscription.php\">Inscription</a></li>\n
                        <li class=\"oldsmall\"><a href=\"CR/Volume1.pdf\">Découvrez en 5mn comment TeDeum devint le Maître du Monde</a></li>\n
                        <li class=\"oldsmall\"><a href=\"https://www.iiens.net/etudiants/trombi.php?type_req%5Bnom%5D=2&nom=&type_req%5Bprenom%5D=2&prenom=&type_req%5Bsurnom%5D=2&surnom=&type_tel=2&telephone=&sexe%5Bfem%5D=1&sexe%5Bmasc%5D=1&promoAnnee%5B%5D=2019&localisation%5Bevry%5D=1&assocesEtOu=et&assoces%5B%5D=bdsf&tsub=Rechercher\">
                          Contacter les Vassaux des Terres Littéraires</a></li>\n
                        <li class=\"chevaliersmall active\"><a onclick=\"ModeSauron()\" role=\"button\" >Mode Sauron</a></li> \n
                        <li> \n
                          <form action=\"connexion.php\" method=\"POST\">\n
                            <input type=\"text\" name=\"ID\" required=\"required\" placeholder=\"Login : Pseudo\"/> \n
                            <input type=\"password\" name=\"mdp\" required=\"required\" placeholder=\"Mot de Passe (je le vois !)\"/>\n
                            <input type=\"submit\" value=\"Connexion\"/>\n
                          </form>    \n
                        </li>\n
                        <li class=\"oldsmall\"><a href=\"change.php\" role=\"button\">T'es une grosse merde et tu as oublié ton mot de passe ?</a></br></li> \n
                        <li class=\"dragon dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Le Menu qui rend addict <span class=\"caret\"></span></a>\n
                          <ul class=\"starcraft dropdown-menu\">\n
                            <li><a href=\"https://www.youtube.com/watch?v=AmR5LoyZ4jw\">Deviens un Jedi en 3 lecons</a></li>\n
                            <li><a href=\"http://zelda.gamepedia.com/Goron\">SuperGoron passe a l'action</a></li>\n
                            <li role=\"separator\" class=\"divider\"></li>\n
                            <li class=\"dropdown-header\" style=\"color:red\">Ne pas cliquer pendant la presentation</li>\n
                            <li><a href=\"https://www.google.fr/search?q=playboy&rlz=1C1CHBF_frFR730FR730&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjw69erqqTTAhUFWBoKHWzKBgsQ_AUICCgB&biw=1920&bih=950#imgrc=vmj_fXi5Rxd_uM:\">Send nudes</a></li>\n
                            <li><a href=\"http://agrandissementpenisxl.eu/\">Agrandir la taille de votre penis</a></li>\n
                            <li><a href=\"https://www.scientologie.fr/\">Pecho en cliquant ici</a></li>\n
                            <li><a href=\"https://i.ytimg.com/vi/nEDXQLry1EM/hqdefault.jpg\">Yoda va toujours sur ce site</a></li> \n
                          </ul>\n
                        </li>\n
                      </ul>\n
                    </div>\n
                  </div>\n
                </nav>\n
        
              </div>\n
            </section>\n
        ";
    }
    
    function Navigateur_Co(){
        /*Partie commune de la barre de navigation*/
        echo "  
            <body>
            <section id=\"navigateur\">\n
              <div class=\"container\">\n
        
                <nav class=\"navbar navbar-inverse navbar-static-top\">\n
                  <div class=\"container\">\n
                    <div class=\"navbar-header\">\n
                      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">\n
                        <span class=\"sr-only\">Baladez-vous dans le Royaume de BD-SF</span>\n
                        <span class=\"icon-bar\"></span>\n
                        <span class=\"icon-bar\"></span>\n
                        <span class=\"icon-bar\"></span>\n
                      </button>
                      <a class=\"dragon navbar-brand\" href=\"index.php\">Le Sublimissime Site de BD-SF</a>\n
                      <p class=\"chevalier navbar-brand\">Ou l'art de passer son temps à remplir des formulaires...</p>\n
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">\n
                      <ul class=\"nav navbar-nav\">\n
                        <li class=\"chevaliersmall active\"><a href=\"Profil.php\">Mon profil</a></li>\n
                        <li class=\"oldsmall\"><a href=\"CR/Volume1.pdf\">Découvrez en 5mn comment TeDeum devint le Maître du Monde</a></li>\n
                        <li class=\"oldsmall\"><a href=\"https://www.iiens.net/etudiants/trombi.php?type_req%5Bnom%5D=2&nom=&type_req%5Bprenom%5D=2&prenom=&type_req%5Bsurnom%5D=2&surnom=&type_tel=2&telephone=&sexe%5Bfem%5D=1&sexe%5Bmasc%5D=1&promoAnnee%5B%5D=2019&localisation%5Bevry%5D=1&assocesEtOu=et&assoces%5B%5D=bdsf&tsub=Rechercher\">
                          Contacter les Vassaux des Terres Littéraires</a></li>\n
                        <li class=\"chevaliersmall active\"><a href=\"deconnexion.php\" role=\"button\" >Déconnection</a></li>\n
                        <li class=\"chevaliersmall active\"><a onclick=\"ModeSauron()\" role=\"button\" >Mode Sauron</a></li> \n
        ";
        /*Menu pigeon, capitaine ou admin*/
        switch ($_SESSION['grade']){
          case "traitre" : vue_traitre();break;
          case "pigeon" : vue_pigeon();break;
          case "capitaine" : vue_capi();break;
          default : vue_admin();break;
        }
        
        /*fermeture de la barre de navigation*/
        echo "                
                      </ul>\n
                    </div>\n
                  </div>\n
                </nav>\n
        
              </div>\n
            </section>\n
        ";
    }
    
    function affiche_erreur($code) {
        //Code d'erreur : 
          // Erreurs sur la BDD
          // 0 : pas de connection à la BD
          // 1 : échec de la requête SQL
          // 2 : requête SQL vide (pas de tuple trouvé)
          // Erreurs de saisies dans formulaire
          // 3 : mot de passe incorrect (pour connexion.php)
          // 4 : Formulaire reçu erroné
          // Opération interdite (standard)
          // 5 : Opération Interdite
          // Erreurs Emprunts et affichage Livre
          // 6 : Livre Indisponible
          // 7 : Livre En Maintenance
          // 8 : Emprunt Impossible
          // 9 : erreur dans le format de la variable d'état de livre (fonction translate_etat)
          // 10 : erreur dans le format de la variable de statut de livre (fonction translate_statut)
          // Erreurs login
          // 11 : Membre non trouvé
          // pération interdite (HyperAdmin)
          // 12 : Opération sur HyperAdmin (Interdit) -- A éviter ^^'
          // Erreurs de désemprunt
          // 13 : Non validation du retour du livre (désemprunt non validé)
          // Combat HyperAdmin
          // 14 : Combat entre HyperAdmin
          // Erreurs sur l'Upload
          // 15 : erreur d'extension du fichier
          // 16 : taille du fichier excessive
          // 17 : echec du copie/déplacement du fichier (fichier perdu)
          // 18 : echec du renommage du fichier (fichier encore sur le serveur)
          // 19 : echec de la suppression du pdf
          // 20 : echec de la suppression de la couverture
          // 21 : Pas assez de Pts Assos pour emprunter
          // 22 : mail invalide (message Cthulhu)
          // 23 : Hash code du reset incorrect (message Cthulhu)
          // 24 : non correspondance du nouveau mot de passe (message Cthulhu)
          // 25 : tentative de Hack de la BDD par les formulaires (là on cherche vraiment la merde auprès de Sauron)
          // default : code inconnue
        switch ($code) {
          case 0 : $str = "La tour de Sauron vient de s'effondrer, </br> revenez ultérieurement lorsque nous l'auront réparée :/";break;
          case 1 : $str = "La Bouche de Sauron s'est vu décapitée devant de la Porte Noire en posant votre question, </br> Veuillez la réitérer :/";break;
          case 2 : $str = "D'après le Roi-Sorcier d'Angmar, il semblerait que l'objet de vos désir (My Precious !) ne soit pas en Comté... </br> Êtes-vous sûr de votre demande ? Avez-vous demandé à Frodon ?";break;
          case 3 : $str = "T'es une grosse merde et tu connais pas ton mot de passe";break;
          case 4 : $str = "Désolé, mais pour faire accepter votre formulaire vert, il vous faut le laisser-passer A-36 !!!";break;
          case 5 : $str = "Avec ou sans armée, il faut vous rendre à l'évidence : Vous n'êtes pas autorisez à faire ceci ! </br> Partez rapidement avant que Sauron ne vous remarque et ne vous fasse payer votre manque de lucidité !";break;
          case 6 : $str = "Messagerie Numenorange bonjour. Le palantrir que vous avez demandé est indisponible pour le moment. Veuillez rappeller plus tard, ou bien laisser votre message.";break;
          case 7 : $str = "Désolé, il semblerait que Kylo Ren se soit emporté en lisant cet ouvrage dernièrement... </br> ce dernier est en Maintenance, vous ne pouvez pas l'emprunter";break;
          case 8 : $str = "Hum... il semblerait que l'archiviste orc de Bârad-Dûr soit mort sous les décombres de la dernière attaque du Gondor... </br> Votre emprunt a échoué.";break;
          case 9 : $str = "/!ERREUR!\ il ne doit pas s'agir de la variable d'état du livre, Sauron ne va pas être satisfait... /!\ ";break;
          case 10 : $str = "/!ERREUR!\ il ne doit pas s'agir de la variable de statut du livre, Sauron ne va pas être satisfait... /!\ ";break;
          case 11 : $str = "Hum... Le Seigneur Sauron craint ne pas vous reconnaître... </br> Rejoignez donc nos rangs immédiatement ou périssez pour être entré en ce lieu interdit !";break;
          case 12 : $str = "Comment ? Vous osez remettre mon pouvoir en question ! </br> Je ne laisserai pas un pathétiques mortels diriger plus longtemps les affaires de mon Royaume ! </br> Périssez ! Misérable vermine...";break;
          case 13 : $str = "Rends le livre, pas l'argent !!!";break;
          case 14 : $str = "Malgré la destruction du Monde, ce combat n'a pas abouti, chacun étant reparti de son côté </br> Cet opération ne peut pas aboutir";break;
          case 15 : $str = "Désolé, mais votre Maïar est d'extention 'esprits d'Aman' alors qu'il devrait être 'créature d'Angband'";break;
          case 16 : $str = "Crétin de Toucque ! Une carte de la Terre du Milieu n'aura jamais la place de rentrer dans votre pipe !";break;
          case 17 : $str = "La communauté que vous avez envoyé a réussi à perdre l'Anneau Unique... Je sais, c'est difficile à encaisser...";break;
          case 18 : $str = "Comment ça, vous voulez encore appeler Morgoth Melkor ?!";break;
          case 19 : $str = "Malgré moult tentatives, il semblerait qu'un Dragon plutôt corriace est décidé que cet artefact faisait partie de son trésors... </br> Retentez votre action plus tard lorsque nous aurons reconstruits une nouvelle armée pour en venir à bout";break;
          case 20 : $str = "Cette Image s'est incrustée dans la roche et l'acier de la Tour de Bârad-Dûr... Nous appelons le Seigneur Vador pour en venir à bout... En attendant elle restera ici";break;
          case 21 : $str = "En tant que sous merde de ce Royaume et ayant trahis la confiance de Sauron et de Cthulhu, </br> tu n'as pas l'autorisation de l'archiviste et du Haut Conseil Noir des Grands Vassaux du Royaume Littéraire d'emprunter un livre </br></br> Essaie de te repentir et peut-être qu'un Grand Vassal t'autorisera de nouveau à consulter la bibliothèque";break;
          case 22 : $str = "[22]";break;
          case 23 : $str = "[23]";break;
          case 24 : $str = "[24]";break;
          case 25 : $str = "ERREUR, OPERATION ILLEGALE EN COURS. CONNECTION AVEC LE SEIGNEUR NOIR : </br></br> Puisque vous tenter de jeter l'Anneau Unique dans la Montagne du Destin, je vous y jetterai moi-même !! </br> BRÛLEZ VILE TRAÎTRE !!!!";break;
          default : $str = "Cette erreur est inconnue... J'appelle le Seigneur Sauron pour en savoir plus";break;
        };
        echo "</br><p class=\"erreur old\"><strong>".$str."</strong></p></br>";
    }
    
    function affiche_success($code){
      //Code de Succès
        // 0 : succès de l'emprunt
        // 1 : succès de l'ajout du livre
        // 2 : succès de la suppression du livre
        // 3 : succès de la suppression de l'emprunt
        // 4 : succès de la modification du profil
        // 5 : succès de l'upload
        // 6 : succès de modif d'un livre
        // 7 : envoie du formulaire inutile
        // 8 : succès de l'inscription
        // 9 : mail envoyé pour reset mot de passe (message Cthulhu)
        // 10 : succès de reset mot de passe (message Cthulhu)
        // default : code inconnue
      switch ($code){
        case 0 : $str = "Hum... Bien... vous prenons acte de votre emprunt pour ce livre";break;
        case 1 : $str = "Un nouvel exemplaire pris des étagères de nos piètres ennemis est désormais entreposé à la Tour du Noir Seigneur de BD-SF </br></br> Nous vous en remercions et prenons acte de votre buttin...";break;
        case 2 : $str = "Bravo ! Cet Oeuvre a effectivement bien brûlé ! </br></br> Ce n'était pas le Livre de Fer, on a eu de la chance";break;
        case 3 : $str = "Le livre a bien été rendu dans la bibliothèque de Bârad-Dûr... l'archiviste s'en voit ravi";break;
        case 4 : $str = "Nous validons ces nouvelles directives. </br></br> Nous apportons ces nouvelles informations au plus vite au Seigneur Noir de ce Royaume...";break;
        case 5 : $str = "Votre artefact a bien été reçu, nous ésperons qu'il possède quelques propriétés magiques ...";break;
        case 6 : $str = "Nous avons bien modifié les écrits comme vous nous l'avez ordonné maître, nous l'avons remis à sa place sur l'étagère sacrée";break;
        case 7 : $str = "C'est bien, tu as encore rempli un formulaire. </br> Sauron et Satan rigolent bien de toi maintenant";break;
        case 8 : $str = "Bonne Nouvelle : Le Seigneur Sauron vous a accepté dans nos rangs ! Vous voilà désormais notre escla... heu... bref passons... </br> Connectez-vous dès maintenant pour profiter de vos nouvelles fonctions et ajouter votre photo de profil !";break;
        case 9 : $str = "[9]";break;
        case 10 : $str = "[10]";break;
        default : $str = "Je ne sais pas ce que vous avez fait mais visiblement cela a réussi... Je suppose que nous devons vous féliciter...";break;
      }
      echo "</br><p class=\"success dragon\"><strong>".$str."</strong></p></br>";
    }
    
    function form_inscription(){
        echo "
            <section id=\"inscription\"> \n
                <form action=\"inscription.php\" method=\"post\" onsubmit=\"return verifinscription(this)\"> \n
                    <input type=\"text\" size=\"30\" name=\"firstname\" required=\"required\" placeholder=\"Prénom\"/> </br> \n
                    <input type=\"text\" size=\"30\" name=\"name\" required=\"required\" placeholder=\"Nom\"/> </br> \n
                    <input type=\"text\" size=\"30\" name=\"pseudo\" required=\"required\" placeholder=\"Pseudo : login\"/></br> \n
                    <input type=\"text\" size=\"30\" name=\"mail\" required=\"required\" placeholder=\"Adresse mail\"/> --- Cette adresse servira à vous envoyer les mails de rappels</br> \n
                    <input type=\"text\" size=\"30\" name=\"mail_repeat\" required=\"required\" placeholder=\"Confirmer l'adresse mail\"/> </br> \n
                    <input type=\"password\" size=\"30\" name=\"CB\" placeholder=\"Code de votre Carte Bleue\" required=\"required\"/> --- On parle du code à 16 chiffres hein ! </br> \n
                    <input type=\"password\" size=\"30\" name=\"mdp\" required=\"required\" placeholder=\"Mot de passe\"/> </br> \n
                    <input type=\"password\" size=\"30\" name=\"mdp_repeat\" required=\"required\" placeholder=\"Confirmer mot de passe\"/> </br> \n
                    <input type=\"submit\" value=\"Rejoignez Saur... heuuu... TeDeum !\"/> \n
                    <!-- les input correspondant aux entrées sur la base de données --> \n
                </form> \n
            </section> \n       
        ";
    }
    
    function form_recherche(){
      /*Formulaire de recherche d'oeuvres avec possiblement AJAX*/  
      echo "
        <form action=\"recherche.php\" method=\"POST\" onsubmit=\"return verifsearchbook(this)\"> \n
            <h4> Type d'Oeuvre : </h4>
            Livre SF : <input type=\"radio\" name=\"type\" value=\"SF\" required=\"required\"/></br> \n
            BD : <input type=\"radio\" name=\"type\" value=\"BD\" required=\"required\"/></br> \n
            Comics : <input type=\"radio\" name=\"type\" value=\"CO\" required=\"required\"/></br> \n
            Exclusivité BD-SF : <input type=\"radio\" name=\"type\" value=\"XB\" required=\"required\"/></br> \n
            Tout : <input type=\"radio\" name=\"type\" value=\"all\" required=\"required\" checked=\"checked\"/>
            </br> <h4> Recherche par : </h4>
            <select name=\"rubrique\">
                <option value=\"titre\"> Titre </option>\n
                <option value=\"sous_titre\"> Sous-Titre </option>\n
                <option value=\"serie\"> Série </option>\n
                <option value=\"tome\"> Tome </option>\n
                <option value=\"auteur1\"> Auteur </option>\n
                <option value=\"dessinateur\"> Dessinateur </option>\n
                <option value=\"cate\"> Catégorie </option>\n
                <option value=\"edition\"> Edition </option>\n
                <option value=\"annee\"> Année de Parution </option>\n
            </select>
            </br> <h4> Recherche (laisser vide pour tout voir) : </h4>
            <input type=\"text\" name=\"search\" placeholder=\"Ma recherche\"/> </br> \n
            <!--Code de votre Carte Bleue : <input type=\"password\" name=\"CB\" placeholder=\"Celui à 16 chiffres, merci\" required=\"required\"/> </br> \n-->
            <input type=\"submit\" value=\"Rechercher\"/> </br> \n
        </form> \n
      ";
    }
    
    function form_grade($grade,$profil){
      echo "
          <section id=\"ModifProfil\"> \n
              <form action=\"modif_profil.php\" method=\"post\" onsubmit=\"return verifrequired(this)\" enctype=\"multipart/form-data\"> \n
                  <!-- Choix de la personne à modifier (spécial admin) --> \n
                  <fieldset id=\"adminnophoto\" class=\"ModifAdmin ModifCapi\" style=\"display:none\"> \n
                      <label> Qui voulez-vous mettre à jour : </label></br> \n
                      Moi : <input type=\"radio\" name=\"qui\" value=\"$profil\" onclick=\"document.getElementById('other').style.display='none';ShowPerso();\" required=\"required\" checked=\"checked\"/></br> \n
                      Lui : <input type=\"radio\" name=\"qui\" value=\"other\" onclick=\"document.getElementById('other').style.display='block';HidePerso();ClassicChamp();\" required=\"required\"/></br> \n
                      <input id=\"other\" style=\"display:none\" type=\"text\" name=\"modifqui\" placeholder=\"Donnez-nous son pseudo\" /></br> \n
                  </fieldset> \n
                  <!--Choix du paramètre à modifier--> \n
                  <fieldset> \n
                      <label> Que voulez-vous mettre à jour : </label></br> \n
                      <div class=\"ModifAdmin ModifCapi\" style=\"display:block\">Prénom : <input  class=\"PersoInput\"type=\"radio\" name=\"carac\" value=\"prenom\" onclick=\"ClassicChamp();\" required=\"required\"/></br></div> \n
                      <div class=\"ModifAdmin ModifCapi\" style=\"display:block\">Nom : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"nom\" onclick=\"ClassicChamp();\" required=\"required\"/></br></div> \n
                      <div class=\"ModifAdmin ModifCapi\" style=\"display:none\">Grade : <input id=\"ByDefault\" type=\"radio\" name=\"carac\" value=\"grade\" onclick=\"ClassicChamp();\" required=\"required\" checked=\"checked\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Mot de passe : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"mdp\" onclick=\"PasswordChamp();\" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Mail : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"mail\" onclick=\"Mailchamps();\" required=\"required\"/></br></div> \n
                      <div class=\"ModifAdmin\" style=\"display:none\">Point assos : <input type=\"radio\" name=\"carac\" value=\"points\" onclick=\"Showpts();\" required=\"required\"/></br></div> \n
                      <div class=\"ModifAdmin ModifCapi\" style=\"display:block\">Image de profil : <input type=\"radio\" name=\"carac\" value=\"image\" onclick=\"ShowFormImage();\" required=\"required\"/></br></div></br> \n
                      <div id=\"photo\" style=\"display:none\"> \n
                        <!--Formulaire d'Upload-->\n
                        <label> Chargez la nouvelle photo (1 Mo maximum) </label></br> \n
                        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1000000\"/> \n
                        <!--Son remplissage est checké en javascript-->\n
                        Fichier : <input type=\"file\" name=\"avatar\"/> \n
                      </div> \n
                  </fieldset> \n
                  <!--champs de modification--> \n
                  <!--Son remplissage est checké en javascript-->\n
                  <input id=\"champ\" type=\"text\" size=\"65\" name=\"modif\" placeholder=\"Truc à modifier\"/> \n
                  <input id=\"ConfirmInput\" type=\"text\" size=\"65\" name=\"confirm\" placeholder=\"Confirmation ici car nous savons tout deux le niveau de ta tanchitude\" style=\"display:none\"/> \n
                  <!--Champs pour indiquer si on ajoute ou retire les points assos--> \n
                  <fieldset id=\"pts\" style=\"display:none\"> \n
                      </br><label> Voulez ajouter ou retirer des points assos ? :  </label></br> \n
                      Ajouter : <input type=\"radio\" name=\"plus\" value=\"+\" checked='checked'/></br> \n
                      Retirer : <input type=\"radio\" name=\"plus\" value=\"-\"/></br> \n
                  </fieldset> \n
                  <!--bouton de confirmation--> \n
                  </br><input type=\"submit\" name=\"envoyer\" value=\"Confirmer les Modifications\" stle=\"display:block\"/> \n
              </form> \n
          </section> \n       
      ";
      echo "<script src=\"scriptJS/Modif_Profil.js\"></script>";
      switch ($grade) {
        case "pigeon" : "";break;
        case "capitaine" :  echo "<script> ModifCapitaine() </script>";break;
        default :  echo "<script> ModifAdmin() </script>";break;
      }
      
    }

    function vue_user($data){
      $pseudo = $data['pseudo'];
      $firstname = $data['prenom'];
      $name = $data['nom'];
      $grade = $data['grade'];
      $mail = $data['mail'];
      $emprunts = $data['emprunts'];
      $points = $data['points'];
      $nominator = $data['nominator'];
      $profilor = $data['profilor'];
      
      echo "
      <div id=\"profil\"> \n
        <ul> \n
            <li> Pseudo : $pseudo </li> \n
            <li> Prénom : $firstname </li> \n
            <li> Nom : $name </li> \n
            <li> Mail : $mail </li> \n
            <li> <strong>$nominator</strong> vous a gradé $grade </li> \n";
            
      if($profilor==null) {
        echo "
           <li> Vous n'avez pas de photo de profil ! Qu'attendez-vous ? </li> \n";
      }
      else {
        echo "
           <li> <strong>$profilor</strong> a changé votre photo de profil </li> \n";
      }
      echo "
           <li> Points Assos Actuels : $points </li> \n
        </ul> \n
      ";
      
      switch ($grade) {
        case "pigeon" : echo "</br><p> Une groupie facilement manipulable </p></br>";break;
        case "capitaine" : echo "</br><p> Un Vassal des Terres Littéraires de BD-SF </p></br>";break;
        case "Fondateur" : echo "</br><p> Un des 4 Fondateurs ! Le Créateur de ce site... </p></br>";break;
        case "Seigneur des Terres Gelées" : echo "</br><p> Un des 4 Fondateurs ! Le Créateur de ce site... </p></br>";break;
        default : if ($pseudo == "Lord of the Mordor") echo "</br><p> Le Seul, l'Unique, le Magnifique, l'Invincible Seigneur Sauron... </br>Prosternes-toi devant la quintessence du Pouvoir ! </p></br>";
                  else echo "</br><p> Un des Grands Généraux de ce Royaume... Digne du plus grand respect et cotôyant le Seigneur Noir </p></br>";break;
      }
      
      echo "
      <a href=\"modif_profil.php\"><input type=\"button\" name=\"Boutton\" value=\"Modifier mon profil\"/></a> \n";
      echo "
      <p> Vous avez $emprunts emprunts en cours : </p> \n
      </div></br> \n";
      
      echo "
      <div id=\"image-profil\"> \n
        <img class=\"featurette-image img-responsive center-block classique\" width=\"300\" src=\"img/profiles/$pseudo.jpg\" alt=\"profil\"/> \n
        <img class=\"featurette-image img-responsive center-block Mode_Sauron\" width=\"300\" src=\"img/Sauron_folder/Sauron 44.jpg\" alt=\"couverture\" style=\"display:none\"/> \n
      </div> \n";
      
    }

    function vue_users($data,$i){
      $pseudo = $data['pseudo'];
      $firstname = $data['prenom'];
      $name = $data['nom'];
      //définition du texte mis pour le grade (dans 99% des cas l'original)
      if($data['grade'] == "HyperAdmin") {
        //masquage du grade d'HyperAdmin : les utilisateurs ne doivent pas savoir avec facilité quel profil est HyperAdmin 
          //(pour empêcher qu'il l'esquive consciencieusement en cas de tentative de pourrissage du site)
        switch ($pseudo) {
          case "Lord of the Mordor" : $grade = "Sauron";break;
          case "Cthulhu" : $grade = "Grand Ancien";break;
          case "Diablo" : $grade = "Démon Primordial";break;
          default : $grade = "Possesseur";break;
        }
      }
      else {
        $grade = $data['grade'];
      }
      $mail = $data['mail'];
      $emprunts = $data['emprunts'];
      $points = $data['points'];
      $nominator = $data['nominator'];
      $profilor = $data['profilor'];
      $i = $i*400;
      
      
      echo "
      <div class=\"global-profil\" style=\"top:";?><?php echo"$i"; ?><?php
      echo"px\">\n
        <hr class=\"featurette-divider\"> \n 
        <div class=\"profil\"> \n
          <ul> \n
              <li> Pseudo : $pseudo </li> \n
              <li> Prénom : $firstname </li> \n
              <li> Nom : $name </li> \n
              <li> Mail : $mail </li> \n
              <li> Nominé au statut de $grade par <strong>$nominator</strong> </li> \n";
            
      if($profilor==null) {
        echo "
              <li> $pseudo n'a pas de photo de profil, c'est donc un chat </li> \n";
      }
      else {
        echo "
              <li> <strong>$profilor</strong> a changé sa photo de profil </li> \n";
      }
      echo "
              <li> Points Assos Actuels : $points </li> \n
              <li> Nombre d'Emprunts en cours : $emprunts </li> \n
              <li> Mot de passe de son compte : ••••••• </li> \n
              <li> Son code de Carte Bleue : •••••••••••••••• </li> \n
          </ul> \n
      ";
      
      switch ($grade) {
        case "pigeon" : echo "</br><p> Une groupie facilement manipulable </p></br>";break;
        case "capitaine" : echo "</br><p> Un Vassal des Terres Littéraires de BD-SF </p></br>";break;
        case "Fondateur" : echo "</br><p> Un des 4 Fondateurs ! Le Créateur de ce site... </p></br>";break;
        case "Seigneur des Terres Gelées" : echo "</br><p> Un des 4 Fondateurs ! Le Créateur de ce site... </p></br>";break;
        default : if ($pseudo == "Lord of the Mordor") echo "</br><p> Le Seul, l'Unique, le Magnifique, l'Invincible Seigneur Sauron... Prosternes-toi devant la quintessence du Pouvoir ! </p></br>";
                  else echo "</br><p> Un des Grands Généraux de ce Royaume... Digne du plus grand respect et cotôyant le Seigneur Noir </p></br>";break;
      }
      
      echo "
        </div> \n <!-- la précédente balise -->
        <div class=\"profil-image\"> \n";
      
      //Si la photo de profil existe, on l'affiche. Sinon on affiche celle de remplacement (pour éviter les problèmes d'organisation avec le php)
      if(@fopen("./img/profiles/$pseudo.jpg","r"))  {
        echo "<img class=\"featurette-image img-responsive center-block classique\" src=\"img/profiles/$pseudo.jpg\" alt=\"profil\"/> \n";
      } 
      else {
        echo "<img class=\"featurette-image img-responsive center-block classique\" src=\"img/profiles/no-couv.jpeg\" alt=\"profil\"/> \n";
      }
      
      //Image pour le mode Sauron
      echo "
          <img class=\"featurette-image img-responsive center-block Mode_Sauron\" src=\"img/Sauron_folder/Sauron 44.jpg\" alt=\"couverture\" style=\"display:none\"/> \n
        </div>
      </br>
      </div> \n";
    }
    
    function vue_admin(){
      /*Liste des possibilités en tant qu'admin, afficher dans le menu*/ 
      echo "
                        <li class=\"dragon dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Choisissez Quelle Maléfique Action Effectuer<span class=\"caret\"></span></a>\n
                          <ul class=\"starcraft dropdown-menu\">\n
                            <li class=\"dropdown-header\">La base ! Les ouvrages !</li>\n
                            <li><a href=\"recherche.php\" class=\"menu_important\"> Rechercher et emprunter un livre </a></li> \n
                            <li><a href=\"voir_emprunts.php\">Liste des emprunts</a> </li> \n

                            <li role=\"separator\" class=\"divider\"></li>\n
                            <li class=\"dropdown-header\">Gerez votre profil machiavelique</li>\n
                            <li><a href=\"modif_profil.php\">Modifier un profil</a> </li> \n
                            
                            <li role=\"separator\" class=\"divider\"></li>\n
                            <li class=\"dropdown-header\">Imposez voter autorite si durement meritee</li>\n
                            <li><a href=\"addCR.php\">Ajouter un CR</a> </li> \n
                            <li><a href=\"addlivre.php\">Ajouter un livre</a> </li> \n
                            <li><a href=\"updatelivre.php\">Mettre a jour un livre</a> </li> \n
                            <li><a href=\"supplivre.php\">Supprimer un livre</a> </li> \n
                            <li><a href=\"espionnage.php\">Espionner injustement les pigeons (le mieux)</a> </li> \n
                          </ul> \n
                        </li> \n
      ";  /*oui les espaces géants sont obligés, question d'esthétisme final*/
    }
    
    function vue_capi(){
      /*Liste des possibilités en tant qu'admin, afficher dans le menu*/ 
      echo "
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dragon dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Choisissez quelle maléfique action effectuer<span class=\"caret\"></span></a>\n
                          <ul class=\"starcraft dropdown-menu\">\n
                            <li class=\"dropdown-header\">La base ! Les ouvrages !</li>\n
                            <li><a href=\"recherche.php\" class=\"menu_important\"> Rechercher et emprunter un livre </a></li> \n
                            <li><a href=\"voir_emprunts.php\">Liste des emprunts</a> </li> \n
                            
                            <li role=\"separator\" class=\"divider\"></li>\n
                            <li class=\"dropdown-header\">Gérez votre profil machiavélique</li>\n
                            <li><a href=\"modif_profil.php\">Modifier un profil</a> </li> \n
                            
                            <li role=\"separator\" class=\"divider\"></li>\n
                            <li class=\"dropdown-header\">Imposez voter autorité si durement méritée</li>\n
                            <li><a href=\"addCR.php\">Ajouter un CR</a> </li> \n
                            <li><a href=\"addlivre.php\">Ajouter un livre</a> </li> \n
                            <li><a href=\"updatelivre.php\">Mettre a jour un livre</a> </li> \n
                            <li><a href=\"espionnage.php\">Espionner injustement les pigeons (le mieux)</a> </li> \n
                          </ul> \n
                        </li> \n
      ";  /*oui les espaces géants sont obligés, question d'esthétisme final*/
    }

    function vue_pigeon(){
      /*Liste des possibilités en tant que pigeaon*/  
      echo "
                        <li class=\"dragon dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Votre Menu Sur-Mesure<span class=\"caret\"></span></a>\n
                          <ul class=\"starcraft dropdown-menu\">\n
                            <li class=\"dropdown-header\">Les ouvrages</li>\n
                            <li><a href=\"recherche.php\" class=\"menu_important\"> Rechercher et emprunter un livre </a></li> \n
                            
                            <li role=\"separator\" class=\"divider\"></li>\n
                            <li class=\"dropdown-header\">Gérez votre profil</li>\n
                            <li><a href=\"modif_profil.php\">Modifier son profil</a></li> \n
                            <li role=\"separator\" class=\"divider\"></li>\n
                            <li class=\"dropdown-header\">Vos incroyables fonctionnalités</li>\n
                            <li><a href=\"SuperForm.php\">Devenir Plus Puissant</a></li>\n
                            <li><a href=\"Dons.php\">Faire un don au Grand Vizir</a></li> \n
                          </ul> \n
                        </li> \n  
    ";
    }
    
    function vue_traitre(){
      /*Liste des possibilités après avoir tenté de détruire le site (aucune, lol, XD, ptdr, t'a l'seum, jpp, mdr)*/
      echo "
                        <li class=\"dragon dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Sorry, you're dead<span class=\"caret\"></span></a>\n
                          <ul class=\"oldmedium dropdown-menu\">\n
                            <li><a href=\"index.php\">On ne peut revivre deux fois</a></li>\n
                            <li><a href=\"index.php\">La vie est une partie sans seconde chance</a></li>\n
                            <li><a href=\"index.php\">Ce n'est que trop tard que l'homme voit ses erreurs</a></li>\n
                            <li><a href=\"index.php\">Il se laisse alors doucement bercé par ses regrets</a></li>\n
                            <li><a href=\"index.php\">Des regrets qui alimentent l'eau potable du Mordor</a></li>\n
                            <li><a href=\"index.php\">Pendant que lui lentement disparaît</a></li>\n
                            <li><a href=\"index.php\">dans l'oubli des Noirs cachots de Bârad-Dûr...</a></li>\n
                            <li><a href=\"index.php\">Tout ça pour un ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;</a></li>\n
                            <li role=\"separator\" class=\"divider\"></li>\n
                            <li class=\"dropdown-header\" style=\"color:red\">Tu vas souffir !!</li>\n
                            <li><a href=\"index.php\">Bienvenue Prisonnier</a></li>\n
                            <li><a href=\"index.php\">Même dans la Mort Diablo peut encore te tuer</a></li>\n
                            <li><a href=\"index.php\">Sauron viendra lui même se défouler les mercredi de 6h à 23h</a></li>\n
                            <li><a href=\"index.php\">Ta famille est maudite sur 20 générations... mais tu n'en as plus</a></li> \n
                          </ul>\n
                        </li>\n      
      ";
    }
    
    function form_add_cr() {
        echo"
        <form action=\"addCR.php\" method=\"post\" onsubmit=\"return verifaddCR(this)\" enctype=\"multipart/form-data\"> \n
            <fieldset> \n
	                <legend>Nom de votre CR :</legend> \n
                    <input type\"text\" name=\"Name\" placeholder=\"Titre\" required=\"required\"/> </br></br> \n
            </fieldset> \n
                  <!--Formulaire d'Upload-->\n
            <fieldset> \n
                  <legend> Chargez le fichier pdf contenant le récit (1 Go maximum) </legend> \n
                  <!--Son remplissage est checké en javascript-->\n
                  Fichier (format pdf) : <input type=\"file\" name=\"avatar\" placeholder=\"Charger votre CR\"/> \n  
                  <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1000000000\"/> \n
                  </br>
            </fieldset> \n
                <hr class=\"featurette-divider\"> \n
                <input type=\"submit\" value=\"Ajouter\"/>
            </form>
                
        ";
    }
    
    function form_add_livre(){
        echo"
            <!-- permet de charger un pdf si on choisie \"exclusivité BD-SF\" et vérifie la conformité du formulaire avec du JS -->
            <form action=\"addlivre.php\" method=\"post\" onsubmit=\"return verifaddlivre(this)\" enctype=\"multipart/form-data\"> \n
                 <!-- Type d'Oeuvre : Livre ou BD -->
                 <fieldset> \n
	                <legend>Type d'Oeuvre</legend> \n
	                <select name=\"type\" onchange=\"ShowUpload(this.options[this.selectedIndex])\">
                        <option value=\"SF\"/> Livre </option> \n
                        <option value=\"BD\"/> BDs </br> </option> \n
                        <option value=\"XB\"/> Exclusivité BD-SF </br> </option> \n
                        <option value=\"CO\"/> Comics </br> </option> \n
                    </select> </br></br>
                <fieldset> \n
                <!-- Entrées Générales -->
                <fieldset> \n
	                <legend>Statut</legend> \n
	                <select name=\"statut\">
                        <option value=\"0\"/> Disponible </option> \n
                        <option value=\"1\"/> Emprunté </option> \n
                        <option value=\"2\"/> En Maintenance </option> \n
                    </select> </br></br>
                <fieldset> \n
                <fieldset> \n
                    <legend> Etat de l'Oeuvre </legend>
	                <select name=\"etat\">
                        <option value=\"0\"/> A jeter </option> \n
                        <option value=\"1\"/> Détruit </option> \n
                        <option value=\"2\"/> Très abîmé </option> \n
                        <option value=\"3\"/> Abîmé </option> \n
                        <option value=\"4\"/> Négligé </option> \n
                        <option value=\"5\"/> Moyen </option> \n
                        <option value=\"6\"/> Bon état </option> \n
                        <option value=\"7\"/> Très bon état </option> \n
                        <option value=\"8\"/> Quasi-neuf </option> \n
                        <option value=\"9\"/> Neuf </option> \n
                    </select> </br></br>
                </fieldset> \n
                <fieldset> \n
	                <legend>Couvert ?</legend> \n
	                <select name=\"couv\">
                        <option value=\"1\"/> Oui </option> \n
                        <option value=\"0\"/> Non </option> \n
                    </select> </br></br>
                </fieldset> \n
                
                <!-- Entrées Spécifiques -->
                <fieldset> \n
                    <legend>détails</legend> \n
                    <input type\"text\" name=\"titre\" placeholder=\"Titre\" required=\"required\"/> </br> \n
                    <input type\"text\" name=\"sous_titre\" placeholder=\"Sous-titre\"/> </br> \n
                    <input type\"text\" name=\"serie\" placeholder=\"Série\"/> </br> \n
                    <input type\"number\" name=\"tome\" placeholder=\"Tome\"/> </br> \n
                    <input type\"text\" name=\"auteur1\" placeholder=\"Auteur\"/> </br> \n
                    <input type\"text\" name=\"auteur2\" placeholder=\"Auteur 2 ou dessinateur\"/> </br> \n
                    <!-- <input type\"password\" name=\"CB\" placeholder=\"Code de votre Carte Bleue\" required=\"required\"/> </br> \n -->
                    <input type\"text\" name=\"cate\" placeholder=\"Catégorie\"/> </br> \n
                    <input type\"text\" name=\"edition\" placeholder=\"Edition\"/> </br> \n
                    <input type\"number\" name=\"annee\" placeholder=\"Année de parution\"/> </br> \n
                </fieldset></br> \n
                <fieldset id=\"XB\" style=\"display:none\"> \n
                  </br> \n
                  <!--Formulaire d'Upload-->\n
                  <legend> Chargez le fichier pdf contenant le récit (1 Go maximum) </legend> \n
                  <!--Son remplissage est checké en javascript-->\n
                  Fichier (format pdf) : <input type=\"file\" name=\"avatar\" placeholder=\"charger votre exclusivité\"/> \n  
                  <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1000000000\"/> \n
                  </br>
                </fieldset> \n
                <hr class=\"featurette-divider\"> \n
                <input type=\"submit\" value=\"Ajouter\"/>
            </form>
                
        ";
    }
    
    function form_update_livre(){
      
      /* !! NOTE : !!
        Faudra ranger les commandes javascripts dans un fichier .js sinon c'est moche, illisible et peu pratique... 
        Ainsi qu'une vérif du formulaire par javascript pour les champs obligatoires sous conditions (genre la valeur qui sert pas si on charge une image mais qui obligée sinon)
        J'ai fais ça pour le formulaire de profil ça marche bien ^^
         !!       !! */
      
      echo "
          <section id=\"ModifLivre\"> \n
              <form action=\"updatelivre.php\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"return verifrequired(this)\"> \n
                  <!-- Choix de la personne à modifier (spécial admin) --> \n
                      <label> Rentrez l'ID du livre que vous voulez mettre à jour : </label></br> \n
                      <div class=\"Perso\" style=\"display:block\">Id : <input type=\"number\" name=\"qui\" placeholder=\"Remplir l'id\" required=\"required\"/></br></div> \n
                  </fieldset> \n
                  <!--Choix du paramètre à modifier--> \n
                  <fieldset> \n
                      <label> Que voulez-vous mettre à jour : </label></br> \n
                      <div class=\"Perso\" style=\"display:block\">Titre : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"titre\" checked=\"checked\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Sous-titre : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"sous_titre\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <!--<div class=\"Perso\" style=\"display:block\">Type oeuvre : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"type_oeuvre\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='none';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> -->\n
                      <div class=\"Perso\" style=\"display:block\">Statut : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"statut\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='none';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='block';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Couverture : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"couverture\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='none';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='block';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Serie : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"serie\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Tome : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"tome\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Auteur 1 : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"auteur1\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Auteur 2 : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"auteur2\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Catégorie : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"categorie\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Edition : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"edition\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Année : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"annee\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='block';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                      <div class=\"Perso\" style=\"display:block\">Etat : <input class=\"PersoInput\" type=\"radio\" name=\"carac\" value=\"etat\" onclick=\"document.getElementById('photo').style.display='none';
                                                                                                                                                           document.getElementById('champ').style.display='none';
                                                                                                                                                           document.getElementById('etat').style.display='block';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div>
                      <div class=\"Perso\" style=\"display:block\">Image : <input type=\"radio\" name=\"carac\" value=\"image\" onclick=\"document.getElementById('photo').style.display='block';
                                                                                                                                                           document.getElementById('champ').style.display='none';
                                                                                                                                                           document.getElementById('etat').style.display='none';
                                                                                                                                                           document.getElementById('statut').style.display='none';
                                                                                                                                                           document.getElementById('couv').style.display='none';
                                                                                                                                                           \" required=\"required\"/></br></div> \n
                  </fieldset> \n
                  <!--champs de modification--> \n
                  <input id=\"champ\" type=\"text\" name=\"modif\" placeholder=\"Valeur\"/> \n
                  <select name=\"statut\" id=\"statut\" style=\"display:none\">
                      <!--On n'autorise pas à modifier à l'état \"emprunté\" pour évtier les conflits avec le formulaire d'emprunt et de désemprunt-->
                      <option value=\"0\"/> Disponible </option> \n
                      <option value=\"2\"/> En Maintenance </option> \n
                  </select>
                  <select name=\"couv\" id=\"couv\" style=\"display:none\">
                        <option value=\"1\"/> Oui </option> \n
                        <option value=\"0\"/> Non </option> \n
                  </select>
                  <select name=\"etat\" id=\"etat\" style=\"display:none\">
                        <option value=\"0\"/> A jeter </option> \n
                        <option value=\"1\"/> Détruit </option> \n
                        <option value=\"2\"/> Très abîmé </option> \n
                        <option value=\"3\"/> Abîmé </option> \n
                        <option value=\"4\"/> Négligé </option> \n
                        <option value=\"5\"/> Moyen </option> \n
                        <option value=\"6\"/> Bon état </option> \n
                        <option value=\"7\"/> Très bon état </option> \n
                        <option value=\"8\"/> Quasi-neuf </option> \n
                        <option value=\"9\"/> Neuf </option> \n
                  </select>\n
                  <div id=\"photo\" style=\"display:none\">
                     <!--Formulaire d'Upload--> \n
                     </br> \n
                     <label> Chargez la nouvelle photo (1 Mo maximum) </label></br> \n
                     <!-- On limite le fichier à 1Mo --> \n
                     <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1000000\"/> \n
                     Fichier : <input type=\"file\" name=\"avatar\"/> \n
                     </br> \n
                  </div>
                  <input type=\"submit\" name=\"envoyer\" value=\"Confirmer les Modifications\" style=\"display:block\"/> \n
              </form> \n
          </section> \n       
      ";
    }

    function form_supp_livre(){
      echo "
        <form action=\"supplivre.php\" method=\"POST\" onsubmit=\"return verifsupbook(this)\"> \n
            ID du livre à supprimer : <input type=\"text\" name=\"ID\"/></br> \n
            <!--Code de votre Carte Bleue : <input type\"password\" name=\"CB\" placeholder=\"Celui à 4 chiffres, merci\" required=\"required\"/> </br> --> \n
            <input type=\"submit\" value=\"Suppression\"/> </br> \n
        </form> \n
      ";      
    }

    function translate_etat($etat){
        /*Permet de convertir l'int de l'argument "etat" d'une oeuvre en sa signification (10 possibilités)*/
        if(isset($etat)){
            switch ($etat) {
                case 0 : return "à jeter"; break;
                case 1 : return "détruit"; break;
                case 2 : return "très abîmé"; break;
                case 3 : return "abîmé"; break;
                case 4 : return "négligé"; break;
                case 5 : return "moyen"; break;
                case 6 : return "bon état"; break;
                case 7 : return "très bon état"; break;
                case 8 : return "quasi-neuf"; break;
                case 9 : return "neuf"; break;
                default : affiche_erreur(9); return "";
            }
        }
        else {
            affiche_erreur(9);
            return "";
        }
    }

    function translate_statut($statut){
        /*Permet de convertir l'int de l'argument "statut" d'une oeuvre en sa signification (3 possibilités)*/
        if(isset($statut)){
            switch ($statut) {
                case 0 : return "disponible"; break;
                case 1 : return "emprunté"; break;
                case 2 : return "en maintenance"; break;
                default : affiche_erreur(9); return "";
            }
        }
        else {
            affiche_erreur(10);
            return "";
        }
    }

    function vue_oeuvre($book,$num) {
      /*récupération des données*/
      $type = $book['type_oeuvre'];
      //Traduction du type de l'oeuvre
      switch ($type){
          case "SF" : $typetrad = "Livre de Science Fiction";break;
          case "CO" : $typetrad = "Comics";break;
          case "XB" : $typetrad = "Exclusivité BD-SF";break;
          case "BD" : $typetrad = "BD";break;
          default : $typetrad = "Apologie de Sauron";break;
      }
      $titre = $book['titre'];
      $sous_titre = $book['sous_titre'];
      $serie = $book['serie'];
      $auteur1 = $book['auteur1'];
      $auteur2 = $book['auteur2'];
      $ID = $book['id_ouvrage'];
      $tome = $book['tome'];
      $cate = $book['categorie'];
      $edi = $book['edition'];
      $annee = $book['annee'];
      $statut = $book['statut'];
      $etat = $book['etat'];
      $couv = $book['couverture'];
      $image = $book['image'];
      //echo "</br><p> st : $sous_titre </br> auth : $auteur2 </p></br>";

      /*Affichage d'une oeuvre de la base*/ 
      echo "        <hr class=\"featurette-divider\"> \n";
      if($num%2 == 0) {
        echo "
          <div class=\"row featurette\"> \n
            <div class=\"col-md-7\"> \n
              <h2 class=\"featurette-heading\"> $titre";
              
        if($sous_titre != ""){
          echo " <span class=\"text-muted\">\"$sous_titre\"</span>";
        }
        echo "</h2> \n
                <h3 class=\"featurette-heading\"> Tome $tome de la série $serie </h3> \n
                <h4 class=\"featurette-heading\"> Ecrit par $auteur1";
        if($auteur2 != ""){
          echo " et $auteur2";
        }
        echo "</h4> \n
                <h4 class=\"featurette-heading\"> Type : $typetrad </h4> \n
                <p class=\"lead\"> \n";
        if($_SESSION['grade'] != "pigeon") {
            echo "ID de l'oeuvre : $ID </br> \n";
        };
        echo "
                Catégorie : $cate </br> \n
                Edité chez $edi </br> \n
                Paru en $annee </br> \n
                
                Disponibilité : ".translate_statut($statut)."</br> \n
                Etat : ".translate_etat($etat)."</br> \n";
                
        if($couv == 1) {
          echo "
                Livre couvert </br> \n";
        }
        echo "
              </p> \n
            </div> \n
            <div class=\"col-md-5\"> \n
              <img class=\"featurette-image img-responsive center-block classique\" width=\"300\" src=\"img/couverture/$image.jpg\" alt=\"couverture\"/> \n
              <img class=\"featurette-image img-responsive center-block Mode_Sauron\" width=\"300\" src=\"img/Sauron_folder/Sauron 30.jpg\" alt=\"couverture\" style=\"display:none\"/> \n
            </div> \n
          </div> \n
         ";
      }
      
      else {
        echo "
          <div class=\"row featurette\"> \n
            <div class=\"col-md-7 col-md-push-5\"> \n 
              <h2 class=\"featurette-heading\"> $titre";
              
        if($sous_titre != ""){
          echo " <span class=\"text-muted\">\"$sous_titre\"</span>";
        }
        echo "</h2> \n
                <h3 class=\"featurette-heading\"> Tome $tome de la série $serie </h3> \n
                <h4 class=\"featurette-heading\"> Ecrit par $auteur1";
        if($auteur2 != ""){
          echo " et $auteur2";
        }
        echo "</h4> \n
                <h4 class=\"featurette-heading\"> Type : $typetrad </h4> \n
                <p class=\"lead\"> \n";
          if($_SESSION['grade'] != "pigeon") {
              echo "ID de l'oeuvre : $ID </br> \n";
          };
          echo "
                Catégorie : $cate </br> \n
                Edité chez $edition </br> \n
                Paru en $annee </br> \n
                
                Disponibilité : ".translate_statut($statut)."</br> \n
                Etat : ".translate_etat($etat)."</br> \n";
                
        if($couv == 1) {
          echo "
                Livre couvert </br> \n";
        }
        echo "
              </p>
            </div>
            <div class=\"col-md-5 col-md-pull-7\"> \n
              <img class=\"featurette-image img-responsive center-block classique\" width=\"300\" src=\"img/couverture/$image.jpg\" alt=\"couverture\"/> \n
              <img class=\"featurette-image img-responsive center-block Mode_Sauron\" width=\"300\" src=\"img/Sauron_folder/Sauron 30.jpg\" alt=\"couverture\" style=\"display:none\"/> \n
            </div> \n
          </div> \n
         ";
      }

      /*Bouton d'emprunt ou de lecture*/
      if($type == "XB"){
        // /!\ si plusieurs XB portent le même titre, il faudra aviser... 
          // mais par construction (sinon ça rentre pas dans le dossier) $titre.pdf sera unique
        echo "
          <form action=\"XB/$titre.pdf\" method=\"get\" target=\"_blank\">
              <input type=\"submit\" role=\"button\" value=\"Le Lire\"/> </br> \n
          </form> \n
        ";
      }
      else {
        if($statut==0){
          echo "
            <form action=\"emprunt.php\" method=\"POST\"> \n
              <input type=\"hidden\" name=\"oeuvre\" value=\"".$ID."\"/> </br> \n
              <input type=\"hidden\" name=\"statut\" value=\"".$statut."\"/> </br> \n
              <input type=\"hidden\" name=\"etat\" value=\"".$etat."\"/> </br> \n
              <input type=\"submit\" role=\"button\" value=\"L'Emprunter\"/> </br> \n
            </form> \n
        ";
        }
      }
    }
    
    function vue_emprunt($data,$num){
      /*récupération des données*/
      /*data de l'oeuvre emprunté*/
      $type = $data['type_ouvrage'];
      $titre = $data['titre'];
      $sous_titre = $data['sous_titre'];
      $serie = $data['serie'];
      $auteur1 = $data['auteur1'];
      $auteur2 = $data['auteur2'];
      $tome = $data['tome'];
      /*data de l'emprunt*/
      $date_em = $data['date_emprunt'];
      $date_re = $data['date_retour'];
      $etat = $data['etat_emprunte'];
      $image = $data['image'];
      if ($type == 'BD' || $type == 'CO'){
        $dessin = "dessiné par ";
      }
      else{
        $dessin = "";
      }

      /*Affichage d'une oeuvre de la base*/ 
      echo "        <hr class=\"featurette-divider\"> \n";
      if($num%2 == 0) {
        echo "
          <div class=\"row featurette\"> \n
            <div class=\"col-md-7\"> \n
              <h2 class=\"featurette-heading\">$titre, <span class=\"text-muted\">\"$sous_titre\"</span></h2> \n
              <h3 class=\"featurette-heading\"> Tome $tome de la série $serie </span></h3> \n
              <h4 class=\"featurette-heading\"> écrit par $auteur1 et ". $dessin . $auteur2 ."</span></h4> \n
              <p> Emprunté le : $date_em </p>
              <p> A rendre le : $date_re </p>
              <p> Etat du livre à le $date_em :". translate_etat($etat) ."</p>
            </div> \n
            <div class=\"col-md-5\"> \n
              <img class=\"featurette-image img-responsive center-block classique\" width=\"300\" src=\"img/couverture/$image.jpg\" alt=\"couverture\"/> \n
              <img class=\"featurette-image img-responsive center-block Mode_Sauron\" width=\"300\" src=\"img/Sauron_folder/Sauron 30.jpg\" alt=\"couverture\" style=\"display:none\"/> \n
            </div> \n
          </div> \n
         ";
      }
      
      else {
        echo "
          <div class=\"row featurette\"> \n
            <div class=\"col-md-7 col-md-push-5\"> \n 
              <h2 class=\"featurette-heading\"> $titre <span class=\"text-muted\">\"$sous_titre\"</span></h2> \n
              <h3 class=\"featurette-heading\"> Tome $tome de la série $serie </span></h3> \n
              <h4 class=\"featurette-heading\"> écrit par $auteur1 et $auteur2 </span></h4> \n
              <p> Emprunté le : $date_em </p>
              <p> A rendre le : $date_re </p>
              <p> Etat du livre à le $date_em :". translate_etat($etat) ."</p>
            </div> \n
            <div class=\"col-md-5 col-md-pull-7\"> \n
              <img class=\"featurette-image img-responsive center-block classique\" width=\"300\" src=\"img/couverture/$image.jpg\" alt=\"couverture\"/> \n
              <img class=\"featurette-image img-responsive center-block Mode_Sauron\" width=\"300\" src=\"img/Sauron_folder/Sauron 30.jpg\" alt=\"couverture\" style=\"display:none\"/> \n
            </div> \n
          </div> \n
         ";
      }      
    }
    
    function vue_all_emprunt($data,$num){
      /*data de l'oeuvre emprunté*/
      $type = $data['type_ouvrage'];
      $titre = $data['titre'];
      $sous_titre = $data['sous_titre'];
      $serie = $data['serie'];
      $auteur1 = $data['auteur1'];
      $auteur2 = $data['auteur2'];
      $tome = $data['tome'];
      /*data de l'emprunt*/
      $date_em = $data['date_emprunt'];
      $date_re = $data['date_retour'];
      $etat = $data['etat_emprunte'];
      $ID = $data['id_emprunt'];
      $gens = $data['pseudo'];
      $image = $data['image'];
      if ($type == 'BD' || $type == 'CO'){
        $dessin = "dessiné par ";
      }
      else{
        $dessin = "";
      }  
      
      /*Affichage d'une oeuvre de la base*/ 
      echo "        <hr class=\"featurette-divider\"> \n";
      if($num%2 == 0) {
        echo "
          <div class=\"row featurette\"> \n
            <div class=\"col-md-7\"> \n
              <h2 class=\"featurette-heading\">$titre, <span class=\"text-muted\">\"$sous_titre\"</span></h2> \n
              <h3 class=\"featurette-heading\"> Tome $tome de la série $serie </span></h3> \n
              <h4 class=\"featurette-heading\"> écrit par $auteur1 et ". $dessin . $auteur2 ."</span></h4> \n
              <p> Emprunté par : $gens </p>
              <p> Emprunté le : $date_em </p>
              <p> A rendre le : $date_re </p>
              <p> Etat du livre à le $date_em :". translate_etat($etat) ."</p>
            </div> \n
            <div class=\"col-md-5\"> \n
              <img class=\"featurette-image img-responsive center-block classique\" width=\"300\" src=\"img/couverture/$image.jpg\" alt=\"couverture\"/> \n
              <img class=\"featurette-image img-responsive center-block Mode_Sauron\" width=\"300\" src=\"img/Sauron_folder/Sauron 30.jpg\" alt=\"couverture\" style=\"display:none\"/> \n            </div> \n
          </div> \n
         ";
      }
      
      else {
        echo "
          <div class=\"row featurette\"> \n
            <div class=\"col-md-7 col-md-push-5\"> \n 
              <h2 class=\"featurette-heading\"> $titre <span class=\"text-muted\">\"$sous_titre\"</span></h2> \n
              <h3 class=\"featurette-heading\"> Tome $tome de la série $serie </span></h3> \n
              <h4 class=\"featurette-heading\"> écrit par $auteur1 et $auteur2 </span></h4> \n
              <p> Emprunté par : $gens </p>
              <p> Emprunté le : $date_em </p>
              <p> A rendre le : $date_re </p>
              <p> Etat du livre à le $date_em :". translate_etat($etat) ."</p>
            </div> \n
            <div class=\"col-md-5 col-md-pull-7\"> \n
              <img class=\"featurette-image img-responsive center-block classique\" width=\"300\" src=\"img/couverture/$image.jpg\" alt=\"couverture\"/> \n
              <img class=\"featurette-image img-responsive center-block Mode_Sauron\" width=\"300\" src=\"img/Sauron_folder/Sauron 30.jpg\" alt=\"couverture\" style=\"display:none\"/> \n            </div> \n
          </div> \n
         ";
      }     
      
      /*Bouton de désemprunt*/
      echo "
        <form action=\"supp_emprunt.php\" method=\"POST\"> \n
            <input type=\"hidden\" name=\"emprunt\" value=\"".$ID."\"/> </br> \n
            <input type=\"submit\" role=\"button\" value=\"Retirer l'Emprunt\"/> </br> \n
        </form> \n
      "; 
    }
    
    function super_formulaire(){
      //Ce formulaire ne sert à rien mais est accessible pour les pigeons en quête de pouvoir
      echo "
        <form action=\"SuperForm.php\" method=\"get\">
          Sélectionnez ici pour plus de pouvoir : <input type=\"radio\" name=\"lol\" value=\"troll\" required=\"required\"/></br>
          <input type=\"submit\" name=\"LOL-Nope_What_do_you_expect\" value=\"Obtenir plus de Pouvoir\" placeholder=\"lol\"/>
        </form>
      ";
    }
    
    function money_form(){
      echo "
        <form action=\"Dons.php\" method=\"post\" onsubmit=\"return verifmoney(this)\">
          <label> Sélectionnez la somme à offir</label></br>
          1€ : <input type=\"radio\" name=\"money\" value=\"1\" required=\"required\"/></br>
          100€ : <input type=\"radio\" name=\"money\" value=\"100\" required=\"required\"/></br>
          1 000€ : <input type=\"radio\" name=\"money\" value=\"1000\" required=\"required\"/></br>
          1 000 000€ : <input type=\"radio\" name=\"money\" value=\"1M\" required=\"required\"/></br>
          1 000 000 000€ : <input type=\"radio\" name=\"money\" value=\"1Md\" required=\"required\"/></br>
          644 000 000 000 000 000 € : <input type=\"radio\" name=\"money\" value=\"Etoile Noire\" required=\"required\"/></br>
          1 080 000 000 000 000 000€ : <input type=\"radio\" name=\"money\" value=\"Etoile de la Mort\" required=\"required\"/></br>
          <input type=\"password\" name=\"CB\" placeholder=\"Votre Code de Carte Bleue (16 chiffres) - svp\" size=\"40\" required\></br>
          <input type=\"submit\" name=\"LOL-Nope_What_do_you_expect\" value=\"Obtenir plus de Pouvoir\" placeholder=\"lol\"/>
        </form>        
      ";
    }
    
    function affiche_CR(){
      echo "
       <div class=\"row featurette\">
        <div class=\"col-md-7\">
          <h2 class=\"old featurette-heading\">Les chroniques de BDSF <span class=\"text-muted\">\"Vous aussi rejoingnez l'aventure\"</span></h2>
          <p class=\"starcraft lead\">
            \"Choisi ton tome camarade !\" </br>
            <div id='telechargement'>";
            $tab=scandir ('CR/') ;
            foreach ($tab as $cr){
              if ($cr!='.' && $cr!='..')  {
                $fichier = basename($cr,'.pdf');
                echo "<h3 class=\"dragon\"><a href='CR/$cr' target='_blank' title='$fichier'>- $fichier</a></h3>";
              }
            }
      echo"
            </div>
          </p>
        </div>
        <div class=\"col-md-5\">
        <iframe src=\"CR/$cr\" width=\"450\" height=\"600\" align=\"middle\"></iframe>
        </div>
      </div>
      
    <hr class=\"featurette-divider\">";
    
}

    function form_change() {
      echo "
        <form action=\"change.php\" method=\"POST\"> \n
          Votre E-mail (celle de votre profil) : <input type=\"text\" name=\"email\" size=\"20\" /> </br> \n
          <input type=\"submit\" name=\"ForgotPassword\" value=\"Récupérer un nouveau Mot de Passe\" /> </br> \n
        </form> \n
      ";
    }

    function form_reset() {
      echo "
        <form action=\"Reset.php\" method=\"POST\"> \n 
          E-mail Address: <input type=\text\" name=\"email\" size=\"20\"/></br> \n
          New Password: <input type=\"password\" name=\"password\" size=\"20\"/></br> \n
          Confirm Password: <input type=\"password\" name=\"confirmpassword\" size=\"20\"/></br> \n
        <input type=\"hidden\" name=\"q\" value='
      ";
      if (isset($_GET['q'])) {
      	echo $_GET['q'];
      }
      else {
        return false;
      }
      echo "
        ' /> </br> \n
        <input type=\"submit\" name=\"ResetMdp\" value=\"Réinitialiser Votre Mot de Passe\"/> \n
      </form>
      ";
    }

?>