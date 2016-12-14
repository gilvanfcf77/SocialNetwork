<?php 
  include "queries/connection.php";
  $username = $_POST["username"];
  $password = $_POST["password"];
  $name = $_POST["name"];
  $photo = $_POST["photo"];

  $query = "SELECT * FROM users WHERE username = '$username'";
  echo $query;
  $resultado = mysqli_query($link,$query);
  $row = mysqli_fetch_assoc($resultado);

    if(mysqli_num_rows($resultado)==1)
    { 
        $message = "Usuário já existe";
        header("Location: login.php?message=".$message);
    }
 ?>