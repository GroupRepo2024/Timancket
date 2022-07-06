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
    <link rel="stylesheet" href="../libs/bootstrap-5.0.2/dist/css/bootstrap.css"/>
  </head>
  <body>

    <div class="container">
      <nav>
        <div class="row">
          <div class="col">
            <a href="#" class="logo">Timancket</a>
          </div>
          <div class="col">
            <h2> Bienvenue sur l'espace cliente !</h2>
          </div>
          <div class="col">
            <a href="deconnexion.php" class="btn"> Déconnexion </a>
          </div>
        </div>
      </nav>

      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-ticket-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ticket" type="button" role="tab" aria-controls="v-pills-ticket" aria-selected="true">Create a ticket</button>
          <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-ticket-tab" role="tabpannel" aria-labelledby="v-pills-ticket" tabindex="0">


          </div>
          <div class="tab-pane fade show active" id="v-pills-profile-tab" role="tabpannel" aria-labelledby="v-pills-profile" tabindex="0">


          </div>
        </div>
    </div>
  </body>
</html>
