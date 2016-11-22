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
		return mysqli_query($link ,$query);
		echo $query;
	}

	select($link,"TESTE ", "1","OR","4");

 ?>