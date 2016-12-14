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
	$tweets = $pdo->prepare("SELECT * FROM `posts` ORDER BY `id` DESC");
	$tweets->execute();
	while($tweet = $tweets->fetchObject()){
?>
	<article class="tweet">
		<span class="nome"><a href="#"><?php echo $tweet->nome;?></a> disse:</span>
		<p><?php echo $tweet->tweet;?></p>
		<span class="date"><?php echo date('d/m/Y H:i:s', strtotime($tweet->data));?></span>
	</article>
<?php }?>
</section>
