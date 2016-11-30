<?php include "../../../routes.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nova Conta</title>
  </head>
  <body>
    <form class="form" action="<?php echo $accounts_path;?>" method="post">
   		<?php include "_form.html"; ?>
    	<input type="submit" name="enviar" value="Enviar">
    </form>
  </body>
</html>
