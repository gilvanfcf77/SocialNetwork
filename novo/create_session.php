<?php 

      /*if(isset($_POST["captcha"]))
        if($_SESSION["captcha"]==$_POST["captcha"])
        {
          /*session_start();
          /*header ("Location:login.php");*/
          /*echo "captcha correto";
        }
        else
        {
          echo "desculpa, captcha errado";
          echo "<p align =\" center \"><a href =\" index.html \"> Voltar </a ></p>";

        }*/
  //Obtém os dados
  session_start(); 
  $username = $_POST["username"];
  // md5 - evitar que a senha do usuario seja armazenada limpa no banco .
  $senha = md5($_POST["password"]);
  // echo "Seu nome de usuario é: $username e sua senha é $senha";
  // acesso ao banco de dados
  include "queries/connection.php";

  $query = "SELECT * FROM users where login = '$username'";
  echo $query;
  $resultado = mysqli_query($link, $query);
  $linhas = mysqli_num_rows($resultado);

  if( $linhas == 0) // testa se a consulta retornou algum registro
  {
    echo "<html ><body >";
    echo "<p align =\" center \">Desculpe, não escontramos seu nome de Usuário!</p>";
    echo "<p align =\" center \"><a href =\" login.php \"> Voltar </a ></p>";
    echo " </body ></ html >";
  }
  else
  {
    $row = mysqli_fetch_assoc($resultado);
    if ( $senha != md5($row["password"])) // confere senha
    {
      echo "<html ><body >";
      echo "<p align =\" center \">Desculpe, sua senha está incorreta!</p>";
      echo "<p align =\" center \"><a href =\" login.php \"> Voltar </a ></p>";
      echo " </body ></ html >";
    }
    else
        if($_SESSION["captcha"]!=$_POST["captcha"])
        {
          echo "<html ><body >";
          echo "<p align =\" center \">Desculpe, digite corretamente o captcha!</p>";
          echo "<p align =\" center \"><a href =\" login.php \"> Voltar </a ></p>";
          echo " </body ></ html >";
          session_destroy();
        }
    else // ´ausurio e senha corretos . Vamos gravar as ¸c~oinformaes na ~asesso .
    {
      echo "Login com sucesso";
      $id = $row["cad_usuario"]; // id do usuario .
      $perfil = $row["perfil"]; // perfil do usuario .
      // Iniciar ~aSesso .
      session_start ();
      $_SESSION ["nome_usuario"] = $username ;
      $_SESSION ["senha_usuario"] = $senha ;
      $_SESSION ["perfil_usuario"] = $perfil ;
      $_SESSION ["id_usuario"] = $id;
      // direciona para a ´apgina inicial do sistema .
      header ("Location:login.php");
    }
  }
  // Encerrar ~aconexo com o banco de dados .
  mysqli_close ($link);
 ?> 