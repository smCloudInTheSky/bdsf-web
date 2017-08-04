function verifrequired(form){
    //Si on ne demande pas de changer l'image de profil, le "champ" est obligatoire
    //On vérifie que les doubles champs correspondent
    //on checked si une image a bien été chargé (sinon ça va être difficile de la charger)
    if (form.carac.value != "image"){
        var que = form.carac.value;
        //On vérifie que l'id du livre est bien un nombre (sécurité js)
        var id = parseInt(form.carac.qui,10);
        if (isNaN(id)){
            alert('Tu n\'essairais pas de m\'entourlouper au passage, non ?');
            form.qui.style.backgroundColor = "#fba";
            //form.qui.placeholder = "l'id est forcément un nombre écris en chiffres arabes majuscules sans la mention \"Sauron Approve\"";
            return false;
        }
        //On vérifie que le champ rempli, si nécessaire, n'est pas vide
        if(que != "statut" && que != "couverture" && que != "etat" && que.length == 0){
            alert('Terminez ce formulaire ! Maintenant !');
            form.modif.style.backgroundColor = "#fba";
            form.modif.placeholder = "Apprends à remplir entièrement un formulaire avant de l'envoyer !!!";
            return false;
        }
        if( (que == "tome" || que == "annee") && isNaN(parseInt(form.modif.value,10)) ){
            alert('le tome et l\'année sont forcément des nombres');
            return false;
        }
        return true;
    }
    else {
        if(form.avatar.value.length == 0){
            alert('Mais où est la photo ?!!');
            return false;
        }
        return true;
    }
}

function verifsupbook(form){
    //On vérifie que l'id du livre est bien un nombre (sécurité js)
    //On vérifie que le CB est bien un nombre à 16 chiffre ^^
    var id = parseInt(form.ID.value,10);
    var CB = parseInt(form.CB.value,10);
    if (isNaN(id)){
        alert('Tu n\'essairais pas de m\'entourlouper au passage, non ?');
        form.ID.style.backgroundColor = "#fba";
        //form.qui.placeholder = "l'id est forcément un nombre écris en chiffres arabes majuscules sans la mention \"Sauron Approve\"";
        return false;
    }
    else 
        if (isNaN(CB) || form.CB.value.length < 16 || form.CB.value.length > 16){
            alert('hep hep hep... deux secondes... Ce code est visiblement faux... (tu ne m\'auras pas ainsi)');
            form.CB.style.backgroundColor = "#fba";
            form.CB.placeholder = "Le Grand Vizir prendra les impôts qu'il décide et à la source !";
            return false;
        }
        else
            return true;
    
}

function verifsearchbook(form){
    //On vérifie que le tome et l'année sont bien des nombres (si on applique une recherche précise)
    var type = form.rubrique.value;
    var search = form.search.value;
    if ( (type == "tome" || type == "annee") && (search != null && isNaN(parseInt(search))) ){
        alert('Tu n\'essairais pas de m\'entourlouper au passage, non ?');
        form.ID.style.backgroundColor = "#fba";
        //form.qui.placeholder = "l'id est forcément un nombre écris en chiffres arabes majuscules sans la mention \"Sauron Approve\"";
        return false;
    }
    return true;
}