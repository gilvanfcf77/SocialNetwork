<?php 
  include "queries/connection.php";
  session_start();
  if (isset($_SESSION["username"])) 
  {
    $username = $_SESSION["username"];
  }
echo $_SESSION["username"];
  if (isset($_SESSION["password"]))
  {
    $password = $_SESSION["password"];
  }
  if (!(empty($username) OR empty($password)))
  {
    $query = "SELECT * FROM users WHERE login = '$username'";
    $resultado = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($resultado);

    if(mysqli_num_rows($resultado)==1)
    {
      if ($password != md5($row["password"])) // confere senha
      {
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        // unset($_SESSION["perfil_usuario"]);
        echo "Você não Efetuou o Login <br/>";
        echo "<p align =\" center \"><a href =\" index . html \"> Voltar </a ></p>";
        exit ;
      }
      // else
      //  echo "VocÊ efetuou o login";
    }

  }
  else
  {
      echo "Você não Efetuou o Login <br/>";
      echo "<p align =\" center \"><a href =\" login.php \"> Voltar </a ></p>";
  }
 ?>