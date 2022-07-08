<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css" />
	<title>Timancket</title>
</head>

<body>
    <nav class="navbar" style="background-color: #292965; padding-top: 14px; padding-bottom: 34px; padding-left: 23px;">
        <div class="container-fluid">
            <div class="d-flex flex-column mb-3">
                <a href="#" class="logo" style="color: #f05c4e;">Timancket</a>
                <h3 style="color: #c9c2e1; font-size: 25px;"> Bienvenue sur Timancket, le service de gestion de Ticket !</h3>
            </div>
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
				<div class="card text-center">
					<div class="card-header">
						<div id="forClient" class="form-header active">Espace rapporteur</div>
						<div id="forPro" class="form-header">Espace développeur</div>
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

                    <p class="text-center">Vous n'avez pas de compte ?<br>Pas de panique, il suffit de vous inscrire juste en cliquant : <a href="inscription.php">ici</a></p>

				</div>

			</div>

		</div>
	</section>
	<!-- </div> -->
	<script src="../js/Connexion.js"></script>

</body>

</html>