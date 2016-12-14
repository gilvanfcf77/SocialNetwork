<?php

    include "connection.php";
    $name = "Maria";
		$text = "Imposto é roubo!";
    $date = date('Y/m/d H:i:s');
    echo "<br>" . $date . "<br>";

    $sql = "INSERT INTO posts (name, text, date) VALUES ('$name', '$text', '$date')";

    if($link->query($sql)){
	     echo "OK";
		}else
    {
			echo "ERRO AO INSERIR POST";
		}
?>
