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
    <a href="/docente/home?tab=gerenciamento">Gerenciar</a>
    <a href="/docente/home?tab=alunos">Alunos</a>
    <a href="/docente/home?tab=professores">Professores</a>
  </div>
  <main>
    <header>
      <h1>Olá,
        <?php echo $_SESSION['logged']['nome']; ?>
      </h1>
    </header>
    <section>
      <?php
        $this->renderView($this->page->view, $this->page->viewDirectory)
      ?>
    </section>
  </main>
</body>
<style>
  h1 {
    font-size: 100%;
  }

  body {
    margin: 0;
    padding: 0;
    display: flex;
    width: 100vw;
    height: 100%;
  }

  main {
    justify-content: center;
    align-items: center;
    width: 80%;
    background-color: gray;
  }

  header {
    background-color: azure;
  }

  section {
    
  }

  .esquerda {
    background-color: aquamarine;
    font-size: large;
    max-width: fit-content;
    padding: 1rem;
    width: 10%;
    height: 100%;
  }
</style>

</html>