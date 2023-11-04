<?php
session_start();
 include('conectalog.php');
 
    if(empty($_POST['email']) || empty($_POST['password'])) {
        header("location: login.php");
        exit();
  }
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['password']);


$query = "SELECT id_pessoa, email from cadastro WHERE email = '{$email}' and senha = '{$senha}'";

// echo $query;exit;

  $result = mysqli_query($conn, $query);

  $row = mysqli_num_rows($result);

  if($row == 1){
        $_SESSION['email'] = $email;
        header('location: sobre.php');
        exit();
  }else{
        header('location: login.php');
        exit();
  }