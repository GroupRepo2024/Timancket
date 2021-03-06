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
    <title>Espace Admin</title>
    <link rel="stylesheet" href="../css/styleUserPro.css"/>
    <link rel="stylesheet" href="../libs/bootstrap-5.0.2/dist/css/bootstrap.css"/>
  </head>
  <body>
    <div class="container">
      <nav>
        <a href="#" class="logo">Timancket</a>
        <ul>
          <li>
              <a href="deconnexion.php" class="btn"> Déconnexion </a>
          </li>
          <li>
              <h2> Bon retour sur l'espace Admin !</h2>
          </li>
        </ul>
      </nav>

      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-ticket-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ticket" type="button" role="tab" aria-controls="v-pills-ticket" aria-selected="true">Change data</button>
          <button class="nav-link active" id="v-pills-sendid-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sendid" type="button" role="tab" aria-controls="v-pills-sendid" aria-selected="true">Send ID</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-ticket-tab" role="tabpannel" aria-labelledby="v-pills-ticket" tabindex="0">

            

          </div>
          <div class="tab-pane fade show active" id="v-pills-sendid-tab" role="tabpannel" aria-labelledby="v-pills-sendid" tabindex="0">



          </div>
        </div>
      </div>
    </div>
  </body>
</html>
