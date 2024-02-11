<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="inc/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <meta name="description" content="Page d'accueil du portfolio MMI de Alice Derouillon'">
  <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->




</head>

<?php

require('inc/header.php');

?>


<body>
  <div class="container">
    <div class="left">
        <img id="photo_cv" src="assets/img/phto_cv.jpg" alt="Photo CV de Alice">
        <h1> < Alice Derouillon /> </h1>
        <p>Web Developpeuse</p>

        <div class="logos">
        <a href="https://www.linkedin.com/in/alicederouillon/" target="_blank"><img src="assets/picto/linkedin.png" alt="Logo LinkedIn" class="logo"></a>
        <a href="https://github.com/DerouillonAlice/" target="_blank"><img src="assets/picto/github.png" alt="Logo Github" class="logo"></a>
        <!-- <img src="logo3.png" alt="Logo 3" class="logo"> -->
    </div>

    <div class="contact_home">
        <div>
        <button onclick="window.location.href='assets/cv_Alice_Derouillon.pdf';">Download CV <img id="img_button" src="assets/picto/telechargements.png" alt="icone téléchargement"></button>
        </div>
        <div>
        <button onclick="window.location.href='contact.php';">Contact me <img  id="img_button" src="assets/picto/contact.png" alt="icone d'un mail"></button>
        </div>
    </div>
      </div>



    <div class="right">
        <h1>I'm <span>Alice Derouillon</span></h1>
        <p>Étudiante en première année de BUT Métiers du Multimédia et de l'Internet à l'IUT de Troyes, </p>
    </div>
  </div>