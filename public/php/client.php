<?php
session_start();
require_once 'config.php'; // ajout connexion bcadd

// si la session existe pas soit si l'on est pas connecté on redirige

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tickets</title>
    <link rel="stylesheet" href="../libs/bootstrap-5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body class="mb-4">
<nav class="navbar" style="background-color: #292965;">
    <div class="container-fluid">
        <div class="d-flex flex-column mb-3">
            <a href="#" class="logo" style="color: #f05c4e;">Timancket</a>
            <h3 style="color: #c9c2e1; font-size: 25px;"> Bienvenue sur Timancket, le service de gestion de Ticket !</h3>
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn-deconnexion mt-5 btn-sm" href="deconnexion.php">Deconnexion</a>
        </div>
    </div>
</nav>


<div class="container">
    <h2 class="mt-4 mb-3">Formulaire de création de ticket</h2>
    <form action="ajout.php" method="post" class="pt-4 ps-4 pe-4 pb-4 rounded" style="background-color: hsl(254deg 34% 82% / 64%);">
        <div class="mb-3 fw-bold">
            <label for="formGroupExampleInput" class="form-label" style="color: #292965;">Titre</label>
            <input type="text" class="form-control bg-light text-dark" id="formGroupExampleInput" name="titre">
        </div>
        <div class="mb-3 fw-bold">
            <label for="exampleFormControlTextarea1" class="form-label" style="color: #292965;">Description</label>
            <textarea class="form-control bg-light text-dark" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>
        <label for="cars" class="fw-bold" style="color: #292965;">Selectionner une priorite</label>
        <select class="form-select" aria-label="Default select example" name="priorite" required>
            <option selected value="faible">Faible</option>
            <option value="moyen">Moyen</option>
            <option value="eleve">Eleve</option>
            <option value="critique">Critique</option>
        </select>
        <div class="text-center">
            <button type="submit" class="btn-deconnexion btn-ajouter mt-5 btn-sm">Ajouter</button>
        </div>
    </form>
</div>
</body>

</html>