<?php
$retourjavascript='';
$retourmail='';

if(isset($_POST['nom'])) {
    $regNom=('#^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ \'-]{1,50}$#');
    $regEmail=('#^[a-z0-9._-]+@{1}[a-z0-9._-]{2,}[.]{1}[a-z]{2,}$#');
    $regSujet=('#^(.){1,50}$#');
    $regMessage=('#^(.){10,750}$#');  
    
if(!preg_match($regNom, $_POST['nom']) || !preg_match($regEmail, $_POST['email']) || !preg_match($regSujet, $_POST['sujet']) || !preg_match($regMessage, $_POST['message'])) {
    $retourjavascript='Veuillez réactiver votre javascript.';
} else {
    $_POST=array_map('trim', $_POST);
    $_POST=array_map('htmlspecialchars', $_POST);
    
    $maildest='carrejennifer@gmail.com';
    $sujetdest='Un message de Seedlife';
    $messagedest='Bonjour Administrateur,<br>Vous avez reçu le message suivant :<br>De : '.$_POST['nom'].'<br>Son adresse-mail : '.$_POST['email'].'<br>Le sujet de son message : '.$_POST['sujet'].'<br>Son message : '.$_POST['message'].'<br>Seedlife vous souhaite une bonne journée !';
    
    $headersdest='From: contact@seedlife.fr' . "\r\n";
    $headersdest.='Reply-To: '.$_POST['email'] . "\r\n";
    $headersdest.='Mime-Version: 1.0 ' . "\r\n";
    $headersdest.='Content-type: text/html; charset="UTF-8"' . "\r\n";
    
    $mailclient=$_POST['email'];
    $sujetclient='Message automatique de SEEDLIFE';
    $messageclient='Bonjour '.$_POST['nom'].'<br>Nous avons bien reçu votre message.<br>Vous allez recevoir une réponse le plus vite possible.<br>Bonne journée<br>Votre équipe de SEEDLIFE';
    
    $headersclient='From: contact@seedlife.fr' . "\r\n";
    $headersclient.='Reply-To: noreply@seedlife.fr' . "\r\n";
    $headersclient.='Mime-Version: 1.0 ' . "\r\n";
    $headersclient.='Content-type: text/html; charset="UTF-8"' . "\r\n";
    
    
    
    
    if(mail($maildest, $sujetdest, $messagedest, $headersdest) && mail($mailclient, $sujetclient, $messageclient, $headersclient)) {
        $retourmail='Votre message a bien été envoyé.';
    } else {
        $retourmail='Nous avons rencontré une erreur. Veuillez réessayer ultérieurement.';
    }   
}   
}

?>