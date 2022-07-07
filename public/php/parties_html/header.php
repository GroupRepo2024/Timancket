<!DOCTYPE html>
<html lang=fr>

<head>
	<title>Timancket</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css%22%3E">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar" style="background-color: #e3f2fd;">
		<div class="container-fluid">
			<a href="#" class="logo">Timancket</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Accueil</a></li>
					<li class="active"><a href="createTicket.php"><span class="glyphicon glyphicon-list"></span>Créer un ticker</a></li>
					<li class="active"><a href="projet.php"><span class="glyphicon glyphicon-tree-conifer"></span>Projets</a></li>
				</ul>
				<form class="d-flex">
					<li>
						<a href="inscription.php">S'inscrire</a>
					</li>
					<li>
						<button class="btn" id="displayForm">Se connecter</button>
					</li>
				</form>
			</div>
		</div>
	</nav>

	<section>
		<div class="sec-container">
			<?php
			if (isset($_GET['login_err'])) {
				$err = htmlspecialchars($_GET['login_err']);

				switch ($err) {
					case 'accountPro':
			?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> compte Pro inexistant
						</div>
					<?php
						break;

					case 'accountClient':
					?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> compte client inexistant
						</div>
					<?php
						break;

					case 'passwordClient':
					?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> mot de passe Client incorrect
						</div>
					<?php
						break;

					case 'passwordPro':
					?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> mot de passe Pro incorrect
						</div>
					<?php
						break;

					case 'userClient':
					?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> login user Client incorrect
						</div>
					<?php
						break;

					case 'userPro':
					?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> login user Pro incorrect
						</div>
					<?php
						break;

					case 'already':
					?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> compte non existant
						</div>
			<?php
						break;
				}
			}
			?>
			<div class="form-wrapper">
				<div class="card">
					<div class="card-header">
						<div id="forClient" class="form-header active">Espace client</div>
						<div id="forPro" class="form-header">Espace pro</div>
					</div>
					<div id="formContainer" class="card-body">
						<form id="formEclient" action="connexion.php" method="post">
							<input type="text" name="userClient" class="form-control" placeholder="Utilisateur" required="required" autocomplete="off" />
							<input type="password" name="passwordClient" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off" />
							<button type="submit" class="formButton">Connexion</button>
						</form>
						<form id="formEprofessionnel" action="connexion.php" method="post" class="toggleForm">
							<input type="text" name="userPro" class="form-control" placeholder="Utilisateur" required="required" autocomplete="off" />
							<input type="password" name="passwordPro" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off" />
							<button type="submit" class="formButton">Connexion</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="../js/Connexion.js"></script>
</body>
