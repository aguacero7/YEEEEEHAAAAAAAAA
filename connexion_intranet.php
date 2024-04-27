<?php 
session_start();
//lien boostrap + balise html et body
echo "
<!DOCTYPE html>
<html>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</head>
<body class='d-flex flex-column min-vh-10 0'>
<div class='jumbotron bg-info'>";
//barre de navigation 
echo "
<nav class='navbar navbar-expand-sm'>
  <ul class='navbar-nav'>
    <li class='nav-item'>
      <a class='nav-link' href='#'>Retour</a>
    </li>
    </ul>
</nav></div>"; 
// Affichage du titre de l'Intanet et message de bienvenue 
echo "
<div class='text-center'>
    <h1> <strong>Intranet</strong></h1>
    <br>
    <p> Bienvenu sur L'intranet d'Equarris ! </p>
</div>
";

// formulaire 
echo "
<div class='text-center'>
    <form action='#' method='POST'>
        <label for='identifiant'> Entrez votre identifiant :</label>
        <br>
        <input type='text' id='identifiant' name='identifiant'>
        <br>
        <label for='mdp'> Entrez votre mot de passe :</label>
        <br>
        <input type='password' id='mdp' name='mdp'>
        <br>
        <br>
        <input type='submit' class='btn btn-info' name='submit' value='Se connecter'>
    </form>
</div>";   


echo "</body></html>";

?>
      