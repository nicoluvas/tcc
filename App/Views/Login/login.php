<?php
  if(isset($_SESSION['logged'])){
    header("Location: /{$_SERVER['logged']['tipo']}/home");
    die();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script type="text/javascript" src="assets/js/login/login.js" defer></script>

    <meta charset="UTF-8" />
    <meta name="color-scheme" content="dark light" />

    <title>Login - eBhaskara</title>
    <link rel="icon" href="assets/images/icon.svg" />
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body class="" id="login">
    <h1 class="anta-regualr">eBhasraka</h1>
    <img src="assets/images/login/mesa.svg" alt="mesa">
    <section class="form-container">
      <button><i class="fa-solid fa-moon fa-2xl"></i></button>
      <form action="/login/auth" method="post">
        <h2>Seja bem-vindo(a)!</h2>
        <label for="usuario">Nome de Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        <label for="codigo-acesso">Código de acesso:</label>
        <input type="password" name="codigo-acesso" id="codigo-acesso" required>
        <p>Perdeu o código de acesso? Contate a coordenação!</p>
        <p style="color: #e45">
          <?php
            if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
          ?>
        </p>
        <input type="submit" value="Entrar" name="entrar">
      </form>
    </section>
    <div id="bola-em-baixo"></div>
  </body>
</html>
