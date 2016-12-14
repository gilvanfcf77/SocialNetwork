<?php
	include_once "connection.php";
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
		<meta charset=UTF-8>
		<title>Mini Twitter</title>
		<link href='//fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css' />
		<link href="css/style2.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div id="wrapper">
		<section id="content_wrapper">
			<?php
				$url = (isset($_GET['url'])) ? $_GET['url'] : 'user_home';
				$explode = explode('/', $url);

				if(file_exists($explode[0].'.php')){
					include_once $explode[0].'.php';
				}else{
					echo 'Pagina não existente';
				}
			?>
		</section>
	</div>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	</body>
</html>
