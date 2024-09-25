<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN DASHBOARD</title>
  </head>
  <body>
    <div class="esquerda">
      <h1>eBhaskara</h1>
      <p>Gerenciar</p>
      <p>Gerenciar</p>
      <p>Gerenciar</p>
    </div>
    <main>
      <header>
        <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
      </header>
      <section></section>
    </main>
  </body>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      width: 100vh;
    }
    main {
      justify-content: center;
      align-items: center;
      width: 80%;
    }
    .esquerda {
      padding: 1rem;
      width: 20%;
    }
  </style>
</html>
