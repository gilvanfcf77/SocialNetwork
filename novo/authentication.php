<?php 
  session_start(); 
  $username = $_POST["username"];
  // md5 - evitar que a senha do usuario seja armazenada limpa no banco .
  $senha = md5($_POST["password"]);
  // echo "Seu nome de usuario é: $username e sua senha é $senha";
  // acesso ao banco de dados
  include "queries\connection.sql";
?>

<?php 

  include "conecta_mysql.sql";

  session_start();

  if (isset($_SESSION["nome_usuario"])) 
  {
    $username = $_SESSION["nome_usuario"];
  }
  if (isset($_SESSION["senha_usuario"]))
  {
    $password = $_SESSION["senha_usuario"];
  }
  if (!(empty($nome_usuario) OR empty($senha_usuario)))
  {

    $query = "SELECT * FROM usuarios WHERE login = '$nome_usuario'";
    $resultado = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($resultado);

    if(mysqli_num_rows($resultado)==1)
    {
      if ($senha_usuario != md5($row["senha"])) // confere senha
      {
        unset($_SESSION["nome_usuario"]);
        unset($_SESSION["senha_usuario"]);
        unset($_SESSION["perfil_usuario"]);
        echo "Você não Efetuou o Login <br/>";
        echo "<p align =\" center \"><a href =\" index . html \"> Voltar </a ></p>";
        exit ;
      }
      // else
      //  echo "VocÊ efetuou o login";
    }
  }
 ?>