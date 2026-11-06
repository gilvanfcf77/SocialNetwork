<?php

	// A senha real foi removida do repositório. Para voltar a funcionar:
	// 1. Crie o banco de dados socialnetwork e importe os arquivos da pasta sql/.
	// 2. Preencha $server_host, $database, $user_name e $password com os dados do seu MySQL.
	// 3. Não faça commit da senha real. Use uma senha nova, diferente da que estava aqui.
	$server_host = "localhost";
	$database = "socialnetwork";
	$user_name = "root";
	$password = "SUA_SENHA_DO_BANCO";

	// $link = mysqli_connect($server_host,$user_name,$password,$database) or print (mysql_error());
	// if(!$link)
	// {
	// 	echo "Error: Unable to connect to database";
	// }
	// else
	// 	echo "Connection was sucess";
	// // mysqli_close($link);


	$link = new mysqli(	$server_host,$user_name,	$password,	$database);
		if ($link->connect_errno)
			die("Falha na conexão:(".$conexao->connect_errno.") ".$conexao->connect_error);
		else
			echo "Conexão estabelecida";

 ?>
