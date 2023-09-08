var regNomPrenom = new RegExp('^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ \'-]{1,50}$');
var regEmail = new RegExp('^[a-z0-9._-]+@{1}[a-z0-9._-]{2,}[.]{1}[a-z]{2,}$');
var regSujet = new RegExp('^(.){1,50}$');
var regMessage = new RegExp('^(.){10,750}$');

function recup_donnee () {
    var vnom = document.getElementById('nom').value;
    var vemail = document.getElementById('email').value;
    var vsujet = document.getElementById('sujet').value;
    var vmessage = document.getElementById('message').value;
    var erreur = 'ok';
    
    
    if(vnom.match(regNomPrenom)) {
        document.getElementById('erreurnom').innerHTML='<img src="img/checked.png">';
    } else {
        document.getElementById('erreurnom').innerHTML='<img src="img/error.png">';
        var erreur = 'pasok';
    }
    
    if(vemail.match(regEmail)) {
        document.getElementById('erreuremail').innerHTML='<img src="img/checked.png">';
    } else {
        document.getElementById('erreuremail').innerHTML='<img src="img/error.png">';
        var erreur = 'pasok';
    }
    
    if(vsujet.match(regSujet)) {
        document.getElementById('erreursujet').innerHTML='<img src="img/checked.png">';
    } else {
        document.getElementById('erreursujet').innerHTML='<img src="img/error.png">';
        var erreur = 'pasok';
    }
    
    if(vmessage.match(regMessage)) {
        document.getElementById('erreurmessage').innerHTML='<img src="img/checked.png">';
    } else {
        document.getElementById('erreurmessage').innerHTML='<img src="img/error.png">';
        var erreur = 'pasok';
    }
    
    
    if(erreur=='ok') {
        return true;
    } else {
        return false;
    }
        
    
}