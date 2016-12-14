<?php include "../../../routes.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuários</title>
    <link href="<?php echo $stylesheets_path?>style.css" rel="stylesheet">
  </head>
  <body>
    <form class="form" action="<?php echo $accounts_path;?>" method="post">
    	<input type="text" name="search" placeholder="Pesquisar Usuário">
      <input type="image" src="<?php echo $images_path?>icons/search.png" onClick="this.form.submit()" width="20 px" height="20px">
      <div>
        <?php include "_users_show" ?>
      </div>
    </form>
  </body>
</html>
