<?php

session_start();

// si la session existe pas soit si l'on est pas connecté on redirige



$data = $_POST;

require_once 'config.php';

$statement = $bdd->prepare('INSERT INTO ticket (titre, description, priorite) VALUES (:titre, :description, :priorite)');
$statement->execute([
    'titre' => $data['titre'],
    'description' => $data['description'],
    'priorite' => $data['priorite']
]);
header('Location:client.php');

?>