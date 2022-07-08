<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/styleInscript.css">
	<title>Inscription</title>
</head>

<body>

    <nav class="navbar" style="background-color: #292965; padding-top: 11px; padding-bottom: 11px; padding-left: 12px;">
        <div class="container-fluid">
            <div class="d-flex flex-column mb-3">
                <a href="index.php" class="logo" style="color: #f05c4e;">Timancket</a>
                <h3 style="color: #c9c2e1; font-size: 25px;"> Bienvenue sur Timancket, le service de gestion de Ticket !</h3>
            </div>
            <div class="d-flex justify-content-end">
                <a class="btn-deconnexion btn-sm accueilbtn" href="index.php">Accueil</a>
            </div>
        </div>
    </nav>

	<div class="container mt-5">
		<div class="container">
			<?php
			if (isset($_GET['reg_err'])) {
				$err = htmlspecialchars($_GET['reg_err']);

				switch ($err) {
					case 'matchPassword':
						?>
						<div class="alert alert-success">
							<strong>Erreur</strong> mot de passe différent
						</div>
						<?php
						break;

					case 'success':
						?>
						<div class="alert alert-success">
							<strong>Succès</strong> inscription réussie !
						</div>
						<?php
						break;

					case 'password':
						?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> mot de passe invalide
						</div>
						<?php
						break;

					case 'email':
						?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> email invalide
						</div>
						<?php
						break;

					case 'email_length':
						?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> email trop long
						</div>
						<?php
						break;

					case 'pseudo_length':
						?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> pseudo trop long
						</div>
						<?php
					case 'already':
						?>
						<div class="alert alert-danger">
							<strong>Erreur</strong> compte déjà existant
						</div>
						<?php
				}
			}
			?>
			<div class="form-wrapper">
				<div class="card">
					<div class="card-header">
						<h2>Inscription</h2>
					</div>
					<div id="formContainer" class="card-body">
						<form action="inscription_traitement.php" method="post">
							<input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
							<input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
							<input type="password" id='password' name="password" class="form-control" placeholder="Password" required="required" autocomplete="off">
							<input type="password" id='password_retype' name="password_retype" class="form-control" placeholder="Re-tap your password" required="required" autocomplete="off">
							<div id="divcomp"></div>
							<button type="submit" class="formButton">Inscription</button>
						</form>
					</div>

				</div>
			</div>

		</div>
	</div>
	<script src="../js/testPassword.js"></script>
</body>

</html>