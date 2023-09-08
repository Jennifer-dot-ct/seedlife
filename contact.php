<?php
include('formulaire.php');
?>


<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planter des graines ou protéger la nature ? Seedlife vous répond</title>
    <meta name="description" content="L'avenir alimentaire vous tient à coeur ? Vous voulez apprendre à cultiver des graines ou vous investir dans une association ? Contactez Seedlife, ensembles nous trouvons des solutions.">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="icon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <script src="java.js"></script>
</head>

<body>

<!-- section reseaux sociaux fixe -->
<?php
    include('reseaux_sociaux.php');
?>
    

<!-- Menu -->
<?php
    include('menu.php');
?>


<!-- formulaire de contact -->
<section class="container" id="contact">
        
    <h1>Contact</h1>       
    <p>Vous voulez planter votre première graine ou vous avez une question ?</p>
    <p class="bas">Tous les messages sont les bienvenus !</p>

<div id="retour_message">
    <?php    
        echo $retourjavascript;
        echo $retourmail;
    ?>
</div>

<div class="row">

    <div class="col-lg-6">
        <ul>
            <li>SEEDLIFE</li>
            <li>Grand Place 28</li>
            <li>7070 Le Roeulx</li>
        </ul>
        <form action="contact.php" method="post" onsubmit="return recup_donnee();">
            <label for="nom">Votre nom et prénom</label><div id="erreurnom"></div>
            <input type="text" name="nom" id="nom" class="col-lg-12">

            <label for="email">Votre adresse-mail</label><div id="erreuremail"></div>
            <input type="email" name="email" id="email" class="col-lg-12">

            <label for="sujet">Votre message concerne</label><div id="erreursujet"></div>
            <input type="text" name="sujet" id="sujet" class="col-lg-12">

            <label for="message">Votre message</label><div id="erreurmessage"></div>
            <textarea name="message" id="message" class="col-lg-12"></textarea>

            <input type="submit" value="Envoyer" id="envoyer">
        </form>
    </div>

    <figure class="col-lg-6">
        <img src="img/tournesol.jpg" alt="Un tournesol">
    </figure>

</div>

</section>

<!-- section nous suivre -->
<?php
    include('nous_suivre.php');
?>


<!-- section footer -->
<?php
    include('footer.php');
?>

    
</body>
</html>