<?php
  session_start();
  require once 'config.php';

  if(isset($_POST['userClient']) && isset($_POST['passwordClient'])){
    $userClient =  htmlspecialchars($_POST['userClient']);
    $passwordClient = htmlspecialchars($_POST['passwordClient']);

    $check = $bdd->prepare('SELECT pseudo_client, email_client FROM Caccount WHERE pseudo_client = ? OR email_client = ?');
    $check->execute(array($userClient));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1){
      if(filter_var($userClient, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE)){
        $passwordClient = hash('sga256', $passwordClient);
        if($data['password_client'] === $passwordClient){
          $_SESSION['userClient'] = $data['pseudo_client'];
          header('Location:landing.php');
        }else header('Location:../../index.html?login_err=passwordClient');
      }else header('Location:../../index.html?login_err=userClient');
    }else header('Location:../../index.html?login_err=already');


  }else if(isset($_POST['userPro']) && isset($_POST['passwordPro'])){
    $userPro =  htmlspecialchars($_POST['userPro']);
    $passwordPro = htmlspecialchars($_POST['passwordPro']);

    $check = $bdd->prepare('SELECT pseudo_particulier, email_particulier FROM Paccount WHERE pseudo_particulier = ? OR email_particulier = ?');
    $check->execute(array($userPro));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1){
      if(filter_var($userPro, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE)){
        $passwordPro = hash('sga256', $passwordPro);
        if($data['password_particulier'] === $passwordPro){
          $_SESSION['userPro'] = $data['pseudo_particulier'];
          header('Location:landing.php');
        }else header('Location:../../index.html?login_err=passwordPro');
      }else header('Location:../../index.html?login_err=userPro');
    }else header('Location:../../index.html?login_err=already');
  }else header('Location:../../index.html');
