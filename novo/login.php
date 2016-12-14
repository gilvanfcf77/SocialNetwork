 <html>
  <head>
    <meta charset='UTF-8' lang = "pt-br">
  </head>
  <body>
    <?php session_start() ?>
    <form method="POST" action="authentication.php">
      <center>
        <table>
             <tr> <input type="text" name="username" size="20" autofocus placeholder= "login"></tr><br>
             <tr> <input type="password" name="password" size="20" placeholder="senha"></tr>
        </table>
        <br>
          <table class="captcha">
            <tr>
              <td><center><img src="captcha.php" alt="Você é humano?"></center></td>
              <td><center><input type="text" name="captcha" size="4" maxlength="4"></center></td>
            </tr>
            <tr>
              <td><a href="login.php">Trocar captcha</a></td>
            </tr> 
          </table>
          <br><input class="hovering" type="submit" value="Enviar">
      </form>
      </center>
    </form>
  </body>
</html>