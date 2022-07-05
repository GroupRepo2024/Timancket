<?php
  session_start();
  require_once 'config.php'; // ajout connexion bcadd
  // si la session existe pas soit si l'on est pas connecté on redirige

  if(!isset($_SESSION['user'])){
    header('Location:index.php');
    die();
  }

  // On récupère les données de l'utilisateur

  $req = $bdd->prepare('SELECT pseudo,token FROM UserAccount WHERE token = ?');
  $req->execute(array($_SESSION['user']));
  $data = $req->fetch();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Espace Professionnel</title>
    <link rel="stylesheet" href="../css/styleUserPro.css"/>
    <link rel="stylesheet" href="../libs/bootstrap-5.0.2/dist/css/bootstrap.css"/>
  </head>
  <body>
    <div class="container">
      <nav>
        <a href="#" class="logo">Timancket</a>
        <ul>
          <li>
              <button class="btn" action="Deconnexion.php" id="displayForm"> Déconnexion </button>
          </li>
        </ul>
      </nav>
      <h2> Bienvenue sur l'espace Professionnel !</h2>
    </div>
  </body>
</html>
