# bdsf-web

    //##################################################################//
    //TODO LIST DU SITE DE LA MORT QUI TUE MEME LES SEIGNEURS DU MAL !!!//
    //##################################################################//

Il faudrait peut-être commencer à ranger mieux les pages php... et dans ce cas remettre à jours les liens qui y mènent ^^'

Note : 
Je ne pense pas que se soit normal que ce soit moi qui est fait 95% des fonctionnalités du site, je vais devoir taper sur des gens là... --" 
    (Denescor)

liste des pages à faire (TODO List) : 
- page d’accueil (index) → “que mettre dans les rubriques ?”--------------------FAIT (BY DENESCOR)
- dépôt de CR-------------------------------------------------------------------FAIT (BY MOUX)
- page lien vers membres Bureau-------------------------------------------------VISIBLEMENT NON ^^' (VERSION ACTUELLE A LA ZUB)
- page d’inscription------------------------------------------------------------FAIT (BY DENESCOR)
- page de recherche d’oeuvres---------------------------------------------------FAIT (BY DENESCOR)
- page d’emprunt de livres -----------------------------------------------------FAIT (BY DENESCOR)
- page de gestion admin (gestion livres, gestion emprunts, gestion inscrits)----FAIT (BY DENESCOR ET MOUX)    
    - ajout livres--------------------------------------------------------------FAIT (BY MOUX)
    - MAJ livres----------------------------------------------------------------FAIT (BY MOUX)
    - supp livres --------------------------------------------------------------FAIT (BY DENESCOR)
    - voir tous les emprunts----------------------------------------------------FAIT (BY DENESCOR)
    - voir les utilisateurs-----------------------------------------------------FAIT (BY DENESCOR)
    - retirer un emprunt--------------------------------------------------------FAIT (BY DENESCOR)
    - modifier un profile (grade)-----------------------------------------------FAIT (BY DENESCOR)
- vue profil--------------------------------------------------------------------FAIT (BY DENESCOR)
- gestion/modification de son profil--------------------------------------------FAIT (BY DENESCOR)
- envoie de mails---------------------------------------------------------------EN PLS (BY CLOUD)
- autres pages random-----------------------------------------------------------FAIT
    - termes & politiques de confidentialité (#LOL)-----------------------------VISIBLEMENT NON ^^'
    - gallerie de BD-SF---------------------------------------------------------EN COURS (DENESCOR)
- Mise en Forme/CSS-------------------------------------------------------------EN COURS (BY DENESCOR ET MOUX)
- autres :----------------------------------------------------------------------FAIT
    - mode Sauron (par Javascript, remplace toutes les images par Sauron)-------FAIT (BY DENESCOR)
    - mode Sauron 2.0 avec CSS--------------------------------------------------FAIT (BY DENESCOR)
    - mode "votre statut"-------------------------------------------------------NON
    - comptage des points assos-------------------------------------------------MANUELLEMENT VIA LA MODIFICATION DE PROFIL
    
- Corrections et Ajouts Finaux (La TODO LIST de Moux)---------------------------FAIT (BY MOUX ET DENESCOR)
    -Préciser qu'il faut 16 chiffres sur la carte bleu à l'inscription----------FAIT (BY MOUX)
    -Vérification de confirmation des mdp et mails pour changer les données-----FAIT (BY DENESCOR) -- J'avais tanché sur le JS ^^'
    -Problème de champs qui disparaissent pas sur modifier mon profil-----------FAIT (BY MOUX)
    -Emprunt de livres à zéro points asso---------------------------------------FAIT (BY DENESCOR)
    -Faire les derniers apports sur la vue pigeon-------------------------------FAIT (BY DENESCOR)
    -Vérifier que la vue capi marche--------------------------------------------FAIT (BY DENESCOR)
    
- Ajout Post-Projet (TODO LIST DE DENESCOR)
    - formulaire de recherche utilisateur---------------------------------------
        - option "par mot de passe"---------------------------------------------
    - faire un compteur de clicks (cf. LastStorage)-----------------------------
    - faire un timer avant fin du monde (cf. web worker)------------------------
    - ajouter l'AJAX pour aléger les recherches---------------------------------
    - combler failles de sécurité, si possible en php (cf. formulaire)----------A TESTER
        - contrôler les champs chiffres (Javascript)----------------------------A TESTER
            - id dans l'upbook--------------------------------------------------FAIT (BY DENESCOR) -- A TESTER
            - id dans supplivre-------------------------------------------------FAIT (BY DENESCOR) -- A TESTER
            - tome et année dans l'upbook---------------------------------------FAIT (BY DENESCOR) -- A TESTER
            - tome et année dans l'addbook--------------------------------------FAIT (BY DENESCOR) -- A TESTER
            - tome et année dans recherche--------------------------------------FAIT (BY DENESCOR) -- A TESTER
        - contrôler les champs textes (interdire ";" et "\")--------------------FAIT (BY DENESCOR) -- A TESTER
            --> tout input text de formulaire-----------------------------------FAIT (BY DENESCOR) -- A VERIFIER
            - voir strpbrk------------------------------------------------------USED
            - voir strstr-------------------------------------------------------
            - voir stripslashes-------------------------------------------------USED
            - voir strpos-------------------------------------------------------
            - Destruction du compte du hacker (Sauron ne golri par bcp)---------FAIT (BY DENESCOR) -- A TESTER
            - rediriger tous les liens des traitre vers l'index (#prison)-------
                - cas test -> pseudo : traitre ; mdp : traitor------------------FAIT (BY DENESCOR)
                - ModeTraitor() -> pour que chaque page le rappelle-------------
    - permettre de modifier prénom/nom entre gradé (guerre ++)------------------FAIT (BY DENESCOR) -- A TESTER

-base de données :--------------------------------------------------------------FAIT (BY TEDEUM)
    - remplir la BDD------------------------------------------------------------EN COURS (BY TEDEUM)
    - notes sur la BDD : 
        - etat : de 0 (à jeter) à 9 (neuf)
        - couvert : 0 (non) oui 1 (oui)
        - statut : 0 pour disponible, 1 pour emprunté, 2 pour en maintenance
        - emprunts : nombre d'emprunts en cours
        - points : on commence à 10

- Je refais les droits entre : pigeon, capitaine (sous-admin), Super-Admin (n'importe quoi d'autre), Hyper-Admin et traître : 
    - les non-inscrits (les hérétiques) ne peuvent que voir la page d'acceuil (bah oui, le menu des hérétiques c'est du troll)
    - les piegons ne peuvent qu'emprunter des livres, gérer leur profil, (donner de l'argent,) et c'est tout ^^
    - les capitaines peuvent en plus ajouter/mettre à jour des livres, voir la listes des emprunts/utilisateurs, 
        modifier le grade des utilisateurs de leur rang ou moins (en "capitaine" ou "pigeon" seulement), utiliser le dépot de CR, 
        gérer les emprunts
    - les Super-Admins peuvent tout faire. En plus des capitaines, ils peuvent supprimer les livres, 
        modifier le grade et les points assos de tout le monde, modifier le site, lancer des croisades contre la Rotonde, invoquer Cthulhu,
        construire l'Etoile Noire, monter une armée d'orcs, etc...
    - l'Hyper-Admin, Grand Possesseur du Site, Incarnation de la Puissance, l'utilisateur inaltérable aka Sauron. Peut tout faire comme un
        Super-Admin mais est totalement invincible. Aucun autre utilisateur ne peut toucher à son compte et, si jamais il s'y risque, se 
        retrouve rétrogradé en "pigeon", car on ne sort pas indemne d'une confrontation contre Sauron (et aussi car ça assure un compte de
        sécurité à BD-SF donc il ne faudra pas dévoiler le nom du compte de sécurité ni dire qu'il existe ;)
        (Sauron est un Hyper-Admin :P)
    - les traîtres, ceux ayant eu l'audace de se dresser contre Sauron et les Hyper-Admin pour s'emparer de leur pouvoirs, sont des bannis
        à jamais. Leur corps détruit par des coups irréversibles est conservé dans les cachots de Bârad-Dûr, les empêchant de renaître sous
        leur nom, les empêchant de se déplacer librement dans le Royaume de BD-SF. Tous savent qu'ils ont trahis, lui ne peut plus rien voir,
        prisonnier de la même page lui rappelant encore et encore que jamais sa faute ne lui sera pardonné (leur pt assos est bien sûr réduit
        à 0). Il vaut mieux être non-inscrit plutôt que de devenir traître.
