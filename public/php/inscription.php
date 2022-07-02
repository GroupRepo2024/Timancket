<!DOCTYPE html>
  <html lang="en">
      <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styleInscript.css">
        <title>Inscription</title>
      </head>
      <body>
        <div class="container">
          <nav>
            <a href="index.php" class="logo">Timancket</a>
            <ul>
              <li><a href="index.php">Acceuil</a></li>
            </ul>
          </nav>
          <div class="sec-container">
            <?php
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
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
