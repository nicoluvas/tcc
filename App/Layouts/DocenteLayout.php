<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ADMIN DASHBOARD</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="esquerda">
    <h1>eBhaskara</h1>
    <a href="/docente/home?tab=gerenciamento">Gerenciar</a>
    <a href="/docente/home?tab=alunos">Alunos</a>
    <a href="/docente/home?tab=professores">Professores</a>
</div>
  <header>
    <h1>Olá,
      <?php echo $_SESSION['logged']['nome']; ?>
      <br>
      <hr>
    </h1>
  </header>
  <main>
    <?php
      $this->renderView($this->page->view, $this->page->viewDirectory)
    ?>
  </main>
</body>
<style>
  @import url('/assets/css/global.css');

  * {
    color: var(--text);
  }

  h1 {
    font-size: 100%;
  }

  body {
    background-color: var(--background);
    margin: 0;
    padding: 0;
    display: flex;
    width: 100svw;
    height: 100svh;
    overflow: hidden;

    display: grid;
    grid-template-rows: 50px 1fr;
  grid-template-columns: 170px 1fr;
  grid-template-areas: 'aside header' 'aside main';
  }

header > hr {
  width: 85%;
}

  .esquerda > a {
    text-decoration: none;
    color: var(--text);
  }

  main {
    grid-area: main;

    justify-content: center;
    align-items: center;
    width: 100%;

    overflow-x: hidden;
    overflow-y: scroll;
    padding-left: 1rem;
  }

  header {
    grid-area: header;
    display:flex;
    justify-content: center;
  }

  .esquerda {
    grid-area: aside;
    font-size: large;
    max-width: fit-content;
    padding: 1rem;
    height: 100%;
    background-color: var(--primary);
  }
</style>

</html>