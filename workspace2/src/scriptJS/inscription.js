function verifinscription(form){
    //On vérifie que les doubles champs correspondent
    //on vérifie que le CB est bien un nombre à 16 chiffre ^^
    //Partie de vérification du code de Carte Bleue (un nombre à 16 chiffres)
    var CB = parseInt(form.CB.value,10);
    if (isNaN(CB) || form.CB.value.length < 16 || form.CB.value.length > 16){
        alert('hep hep hep... deux secondes... Ce code est visiblement faux... (tu ne m\'auras pas ainsi)');
        form.CB.style.backgroundColor = "#fba";
        form.CB.placeholder = "Le Grand Vizir prendra les impôts qu'il décide et à la source !";
        return false;
    }
    else {
        if(form.mdp.value != form.mdp_repeat.value){
            alert('Tu vas avoir du mal à te connecter si tu oublies déjà ton mot de passe... #Tanchitude');
            form.mdp.placeholder = "Mot de Passe - #FACEPALM";
            form.mdp_repeat.placeholder = "Confirmation Mot de Passe - #FACEPALM";
            return false;
        }
        if(form.mail.value != form.mail_repeat.value){
            alert('Cthulhu voudra communiquer avec toi, alors essaie de ne pas changer d\'adresse mail plus vite que [X]');
            form.mail.placeholder = "Mail - #FACEPALM";
            form.mail_repeat.placeholder = "Confirmation Mail - #FACEPALM";
            return false;
        }
        else {
            alert('Nous allons voir avec le Seigneur Noir pour vous prendre dans nos rangs...');
            return true;
        }
    }
}