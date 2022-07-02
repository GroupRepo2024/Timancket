<?php
  session_start();
  require_once 'config.php'; // ajout connexion bcadd
  // si la session existe pas soit si l'on est pas connecté on redirige
  if(!isset($_SESSION['user'])){
    header('Location:index.php');
    die();
  }

  // On récupère les données de l'utilisateur
  $req = $bdd->prepare('SELECT pseudo, token FROM UserAccount WHERE token = ?');
  $req->execute(array($_SESSION['user']));
  $data = $req->fetch();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Espace cliente</title>
    <link rel="stylesheet" href="../css/styleUserClient.css"/>
  </head>
  <body>
    <div class="container">
      <h2> Bienvenue sur l'espace cliente <?php if(is_array($data))echo $data['pseudo']; ?> !</h2>
      <a href="deconnexion.php" class="btn"> Déconnexion </a>
    </div>
  </body>
</html>
