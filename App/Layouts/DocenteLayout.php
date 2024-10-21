<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="esquerda">
        <!-- <a class="logo" href="/"><img class="logo" src="\assets\images\index\logobhas.png"></a> -->

        <a class="hrefs" href="/docente/home?tab=gerenciamento"><i
                class="bi-gear-wide-connected"></i><span>Gerenciar</span></a>
        <a class="hrefs" href="/docente/home?tab=dicentes"><i class="bi bi-backpack2-fill"></i><span>Dicentes</span></a>
        <a class="hrefs" href="/docente/home?tab=docentes"><i class="bi bi-briefcase-fill"></i><span>Docentes</span></a>
        <footer>
            <a href="/logout">
                <i class="bi bi-box-arrow-left"></i>
                Sair
            </a>
        </footer>
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
    font-family: lexend;
}

h1 {
    font-size: 100%;
}

hr {
    width: 80%
}

body {
    background-color: var(--background);
    margin: 0;
    padding: 0;
    display: flex;
    width: 100vw;
    height: 100vh;
    overflow: hidden;

    display: grid;
    grid-template-rows: 50px 1fr;
    grid-template-columns: 250px 1fr;
    grid-template-areas: 'aside header''aside main';
}

.logo {
    width: 15rem;
}

.hrefs {
    border: var(--primary) 2px solid;
    border-radius: 1rem;
    display: flex;
    justify-content: space-evenly;
    padding: 0.5rem;
}

.hrefs>i {
    width: 1rem;
}

main {
    grid-area: main;
    overflow-x: hidden;
    overflow-y: scroll;

    justify-content: center;
    align-items: center;
    padding: 1rem;
}

.aluno {
    border: 1px solid var(--shadow);
    border-radius: 1rem;
    padding: 1rem;
}

header {
    grid-area: header;
    display: flex;
    justify-content: center;
}

footer {
    margin: 1rem;
    position: absolute;
    bottom: 0;
}

.esquerda {
    display: flex;
    flex-direction: column;
    grid-area: aside;
    font-size: 24px;
    height: 100%;
    background-color: var(--secondary);
    row-gap: 1rem;
    padding: 1rem;
}
</style>

</html>