<?php

$host = "localhost";
$user = "root";
$database = "WEB_incident_ticket";
$password = "Rx232vb98@";

    try {
      $bdd = new PDO("mysql:host=$host; dbname=$database", $user, $password);
    }catch(Exception $e){
      die('Erreur'.$e->getMessage());
    }
