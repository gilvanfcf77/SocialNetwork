<section id="envio_mensagem">
	<form action="create_post.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="title">Digite uma mensagem</span>
			<textarea name="mensagem" class="msg"></textarea>
			<span class="counter"></span>
			<button class="send_message">Enviar</button>
		</label>
	</form>
</section>

<section id="content">
<?php

$sql = "SELECT * FROM posts ORDER BY `id` DESC";
$result = $link->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
?>
		<article class="tweet">
		<span class="nome"><a href="#"><?php echo $row["name"];?></a> disse:</span>
		<p><?php echo $row["text"];?></p>
		<span class="date"><?php echo date('d/m/Y H:i:s', strtotime($row["date"]));?></span>
		</article>
<?php
	}
} else {
	echo "Nenhum post encontrado!";
}
$link->close();

?>

</section>
