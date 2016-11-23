<?php 
	include "connection.php";

	function select($link, $table, $wheres)
	{
		$numargs = func_num_args();
		$query = "SELECT * FROM ".$table." WHERE ";
		echo "Number of arguments: $numargs<br />\n";
		for ($i = 2; $i<$numargs;$i++) {
			$where = func_get_arg($i);
			$query = "$query ".$where;
		}
		echo $query;
		return mysqli_query($link ,$query);
		
	}

	function insert($link, $table, $value)
	{
		$numargs = func_num_args();
		$query = "INSERT INTO ".$table." VALUES ( ".$value;
		echo "Number of arguments: $numargs<br />\n";
		for ($i = 2; $i<$numargs;$i++) {
			$where = func_get_arg($i);
			$query = "$query ".",".$where;
		}
		$query = $query.")";
		echo $query;
		return mysqli_query($link ,$query);
		
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

	// delete($link,"active", "1","OR","4");

 ?>