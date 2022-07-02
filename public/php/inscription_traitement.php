<?php
  require_once 'config.php';

if(($_POST['password']) != ($_POST['password_retype'])){
  header('Location:inscription.php?reg_err=matchPassword');
  die();
}else{
  if(isset($_POST['pseudo']) && isset($_POST['email'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $bdd->prepare('SELECT pseudo, email, password FROM UserAccount WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
      if(strlen($pseudo) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 13
                            $cost = ['cost' => 13];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                            // On stock l'adresse IP
                            $ip = $_SERVER['REMOTE_ADDR'];
                            $insert = $bdd->prepare("INSERT INTO UserAccount(pseudo, email, password, ip, token) VALUES(:pseudo, :email, :password, :ip, :token)");
                            //$insert = $bdd->prepare('INSERT INTO Paccount(pseudo_particulier, email_particulier, password_particulier, ip_particulier) VALUES(:pseudo_particulier, :email_particulier, :password_particulier, :ip_particulier)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip,
                                'token' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));
                            // On redirige avec le message de succès
                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location:inscription.php?reg_err=password'); die();}
                    }else{ header('Location:inscription.php?reg_err=email'); die();}
                }else{ header('Location:inscription.php?reg_err=email_length'); die();}
            }else{ header('Location:inscription.php?reg_err=pseudo_length'); die();}
    }else header('Location:inscription.php?reg_err=already');
  }
}
