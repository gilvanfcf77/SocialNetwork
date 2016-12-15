<?php 
	//configurações do banco de dados
	$servidor = "localhost";
	$usuario_bd = "root";
	$senha_bd = "";
	$banco = "bancofinancas";
	$con = mysqli_connect($servidor, $usuario_bd,$senha_bd,$banco) or die ("Problema ao Conectar ao Banco de Dados");
 ?>