<?php
  if(isset($_SESSION['logged'])){
    header("Location: /". $_SESSION['logged']['tipo'] . "/home");
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

    <title>Login - Bhaskara</title>
    <link rel="icon" href="assets/images/icon.svg" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="lexend" id="login">
  <img class="logo" src="assets\images\index\logo-dark.png">
    <div class="login-esquerda">
        <img src="assets/images/login/mesa.svg" class="girar" alt="mesa">
    </div>

    <section class="form-container">
        <form action="/login/auth" method="post">
            <h2>Seja bem-vindo(a)!</h2>
            <label for="codigo">Nome de Usuário:</label>
            <input type="text" name="codigo" id="codigo" required>
            <label for="senha">Código de acesso:</label>
            <input type="password" name="senha" id="senha" required>
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
<style>
h1 {
    color: white
}

* {
    font-family: "lexend"
}

@import url("global.css");
@import url("style.css");
</style>