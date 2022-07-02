<?php
  session_start();
  require_once 'config.php';

  if(isset($_POST['userClient']) && isset($_POST['passwordClient'])){
    $userClient =  htmlspecialchars($_POST['userClient']);
    $passwordClient = htmlspecialchars($_POST['passwordClient']);

    $check = $bdd->prepare("SELECT pseudo, email, password, rôle FROM UserAccount WHERE pseudo = ? OR email = ? AND rôle = 'C'");
    $check->execute(array($userClient, $userClient));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row > 0){
      if(filter_var($userClient, FILTER_VALIDATE_EMAIL) || ($userClient == $data['pseudo'])){
        if(password_verify($passwordClient,$data['password'])){
          if($data['rôle'] == 'C' || $data['rôle'] == 'A'){
            $_SESSION['user'] = $data['pseudo'];
            header('Location:userClientSpace.php');
          }else header('Location:index.php?login_err=accountClient');
        }else header('Location:index.php?login_err=passwordClient');
      }else header('Location:index.php?login_err=userClient');
    }else header('Location:index.php?login_err=already');


  }else if(isset($_POST['userPro']) && isset($_POST['passwordPro'])){
    $userPro =  htmlspecialchars($_POST['userPro']);
    $passwordPro = htmlspecialchars($_POST['passwordPro']);

    $check = $bdd->prepare("SELECT pseudo, email, password, rôle FROM UserAccount WHERE pseudo = ? OR email = ? AND rôle = 'P'");
    $check->execute(array($userPro,$userPro));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row > 0){
      if(filter_var($userPro, FILTER_VALIDATE_EMAIL) || ($userPro == $data['pseudo'])){
        if(password_verify($passwordPro, $data['password'])){
          if($data['rôle'] == 'P' || $data['rôle'] == 'A'){
            $_SESSION['user'] = $data['pseudo'];
            header('Location:userProSpace.php');
          }else header('Location:index.php?login_err=accountPro');
        }else header('Location:index.php?login_err=passwordPro');
      }else header('Location:index.php?login_err=userPro');
    }else header('Location:index.php?login_err=already');
  }else header('Location:index.php');
