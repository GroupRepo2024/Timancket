<?php

$host = "localhost";
$user = "root";
$database = "web_incident_ticket";
$password = "";

    try {
      $bdd = new PDO("mysql:host=$host; dbname=$database", $user, $password);
    }catch(Exception $e){
      die('Erreur'.$e->getMessage());
    }

    /*$database = "timancket";
    $servername = 'localhost';
    $username = 'root';
    $password = '';
  
    //On établit la connexion
    $conn = new mysqli($servername, $username, $password, $database);
  
    //On vérifie la connexion
    if ($conn->connect_error) {
      die('Erreur : ' . $conn->connect_error);
    }
    echo 'Connexion réussie';*/
?>