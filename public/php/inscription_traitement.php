<?php
  require once 'config.php';

  if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $bdd->prepare('SELECT pseudo_client, email_client, password_client, pseudo_particulier, email_particulier, password_particulier FROM Caccount, Paccount WHERE email_client = ? OR email_particulier = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
      if(strlen($pseudo) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 13];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                            // On stock l'adresse IP
                            $ip = $_SERVER['REMOTE_ADDR'];

                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO Caccount(pseudo_client, email_client, password_client, ip_client, token_client) VALUES(:pseudo_client, :email_client, :password_client, :ip_client, :token_client)');
                            $insert->execute(array(
                                'pseudo_client' => $pseudo,
                                'email_client' => $email,
                                'password_client' => $password,
                                'ip_client' => $ip,
                                'token_client' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));

                            $insert = $bdd->prepare('INSERT INTO Paccount(pseudo_particulier, email_particulier, password_particulier, ip_particulier, token_particulier) VALUES(:pseudo_particulier, :email_particulier, :password_particulier, :ip_particulier, :token_particulier)');
                            $insert->execute(array(
                                'pseudo_particulier' => $pseudo,
                                'email_particulier' => $email,
                                'password_particulier' => $password,
                                'ip_particulier' => $ip,
                                'token_particulier' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));
                            // On redirige avec le message de succès
                            header('Location:../../inscription.html?reg_err=success');
                            die();
                        }else{ header('Location: ../../inscription.html?reg_err=password'); die();}
                    }else{ header('Location: ../../inscription.html?reg_err=email'); die();}
                }else{ header('Location: ../../inscription.html?reg_err=email_length'); die();}
            }else{ header('Location: ../../inscription.html?reg_err=pseudo_length'); die();}
    }else header('Location: ../../inscription.html?reg_err=already');
  }
