<?php
session_start();
require_once 'config.php'; // ajout connexion bcadd
include 'navbar.php';
// si la session existe pas soit si l'on est pas connecté on redirige




$requete = $bdd->query('SELECT id, titre, description, priorite FROM ticket;');
$requete->execute();
$resultats = $requete->fetchAll();
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
	<div class="container">
		<h2 class="mb-4 mt-5">Liste des Tickets</h2>

		<table class="table table-hover table-bordered">
			<thead class="table-success">
				<tr>
					<th></th>
					<th scope="col">Titre</th>
					<th scope="col">Description</th>
					<th scope="col">Priorité</th>
				</tr>
			</thead>
			<tbody class="table-group-divider">
				<?php
				// On affiche chaque ligne de donnée de la table ticket une à une
				foreach ($resultats as $res) {
					?>
					<tr>
						<th scope="row"><?php echo $res['id']; ?></th>
						<td><?php echo $res['titre']; ?></td>
						<td><?php echo $res['description']; ?></td>
						<td><?php echo $res['priorite']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>