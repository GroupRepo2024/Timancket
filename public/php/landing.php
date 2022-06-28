<?php
  session_start();
  require_once 'config.php'; // ajout connexion bcadd
  // si la session existe pas soit si l'on est pas connecté on redirige
  if(!isset($_SESSION['user'])){
    header('Location:index.php');
    die();
  }

  // On récupère les données de l'utilisateur
  $req = $bdd->prepare('SELECT * FROM Caccount WHERE token_client = ?');
  $req->execute(array($_SESSION['user']));
  $data = $req->fetch();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
