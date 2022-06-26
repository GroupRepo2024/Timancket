<?php
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=WEB_incident_ticket;charset=utf8', 'root', 'Rx232vb998@');
    }catch(Exception $e){
      die('Erreur'.$e->getMessage());
    }
