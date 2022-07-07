<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css" />
	<title>Timancket</title>
</head>

<body>
	<nav class="navbar" style="background-color: #163561;">
		<div class="container-fluid">
			<div class="d-flex flex-column mb-3">
				<a href="#" class="logo text-info">Timancket</a>
				<h3 style="color: #c9c2e1;"> Bienvenue sur Timancket, le service de gestion de Ticket !</h3>
			</div>
		</div>
		<div class="d-flex justify-content-end">
			<button class="btn me-2" id="displayForm">Se connecter</button>
			<a class="btn btn-outline-info" href="inscription.php">S'inscrire</a>
		</div>
	</nav>

	<section>
		<div class="container">
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
	<!-- </div> -->
	<script src="../js/Connexion.js"></script>

</body>

</html>