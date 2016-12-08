<?php
	include "connection/connection.php";

	function select($link, $table, $wheres)
	{
		$numargs = func_num_args();
		$query = "SELECT * FROM ".$table." WHERE ";
		echo "Number of arguments: $numargs<br />\n";
		for ($i = 2; $i<$numargs;$i++) {
			$where = func_get_arg($i);
			$query = "$query ".$where;
		}
		// echo $query;

		if($link->query($query)==true)
					echo  "Dados inseridos com sucesso!<br>";
				else
					echo "Erro: <br>".$query."<br>".$link->error;

		// if($result = mysqli_query($link ,$query))
		// 	echo "All right";
		// 	else {
		// 		echo "error";
		// 	}

	}

	function insert($link, $table, $value)
	{
		$numargs = func_num_args();
		$query = "INSERT INTO ".$table." VALUES ( ".$value;
		echo "Number of arguments: $numargs<br />\n";
		for ($i = 3; $i<$numargs;$i++) {
			$where = func_get_arg($i);
			$query = "$query ".",".$where;
		}
		$query = $query.")";
		echo $query;
		if($link->query($query)==true)
					echo  "Dados inseridos com sucesso!<br>";
				else
					echo "Erro: <br>".$query."<br>".$link->error;

	}

	function delete($link, $table, $wheres)
	{
		$numargs = func_num_args();
		$query = "DELETE * FROM ".$table." WHERE ";
		echo "Number of arguments: $numargs<br />\n";
		for ($i = 2; $i<$numargs;$i++) {
			$where = func_get_arg($i);
			$query = "$query ".$where;
		}
		echo $query;
		return mysqli_query($link ,$query);

	}

	function update($link, $table, $value)
	{
		$numargs = func_num_args();
		$query = "UPDATE ".$table." SET ( ".$value;
		echo "Number of arguments: $numargs<br />\n";
		for ($i = 2; $i<$numargs;$i++) {
			$where = func_get_arg($i);
			$query = "$query ".",".$where;
		}
		$query = $query.")";
		echo $query;
		return mysqli_query($link ,$query);

	}

	// insert($link,"accounts",'NULL' ,"'Lucas'" ,"'Simao'" ,"'lucas64'" ,"'18/03'" ,"'18/03'" ,45,2351451521 ,"'MACHO'" ,"'preto'");

 ?>