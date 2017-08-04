function verifaddlivre(form){
    //On vérifie que le pdf est bien chargé si on ajoute une exclu BD-SF
    //On vérifie que les champs "tome" et "année" sont bien des nombres (normalement vérifié en amont dans l'input du formulaire)
    var tome = parseInt(form.tome.value,10);
    var annee = parseInt(form.annee.value,10);
    if (isNaN(tome) || isNaN(annee)){
        alert('le tome et l\'année sont forcément des nombres');
        return false;
    }
    if (form.carac.type.value == "XB" && form.avatar.name.value.length == 0){
        alert('Et mon Histoire ? :\'(');
        return false;
    }
    /*else {
        if(form.carac.type.value != "XB"){
            
        }
    }*/
    return true;
}

function ShowUpload(option){
    //permet d'afficher ou non l'input d'upload si nécessaire
    if(option.value == "XB"){
        document.getElementById('XB').style.display='block';
    }
    else {
        document.getElementById('XB').style.display='none';
    }
}