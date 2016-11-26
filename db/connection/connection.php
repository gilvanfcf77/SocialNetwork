<?php

	$server_host = "localhost";
	$database = "socialnetwork";
	$user_name = "root";
	$password = "";

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
