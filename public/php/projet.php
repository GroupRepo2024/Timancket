<?php
session_start();
require_once 'config.php'; // ajout connexion bcadd
include 'navbar.php';
// si la session existe pas soit si l'on est pas connecté on redirige




$requete = $bdd->query('SELECT id, nom, description, chef_du_projet, date_debut, date_fin FROM projet;');
$requete->execute();
$resultats = $requete->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Projets</title>
	<link rel="stylesheet" href="../libs/bootstrap-5.0.2/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body class="mb-4">
	<div class="container">
		<h2 class="mb-4 mt-5">Liste des Projets</h2>

		<table class="table table-hover table-bordered">
			<thead class="table-info">
				<tr>
					<th></th>
					<th scope="col">Nom du projet</th>
					<th scope="col">Description</th>
					<th scope="col">Chef du projet</th>
					<th scope="col">Date du début</th>
					<th scope="col">Date de la fin</th>
				</tr>
			</thead>
			<tbody class="table-group-divider">
				<?php
				// On affiche chaque ligne de donnée de la table ticket une à une
				foreach ($resultats as $res) {
					?>
					<tr>
						<th scope="row"><?php echo $res['id']; ?></th>
						<td><?php echo $res['nom']; ?></td>
						<td><?php echo $res['description']; ?></td>
						<td><?php echo $res['chef_du_projet']; ?></td>
						<td><?php echo $res['date_debut']; ?></td>
						<td><?php echo $res['date_fin']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>