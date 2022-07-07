<?php

$host = "localhost";
$user = "root";
$database = "web_incident_ticket";
$password = "";

try {
	$bdd = new PDO("mysql:host=$host; dbname=$database", $user, $password);
} catch (Exception $e) {
	die('Erreur' . $e->getMessage());
}
