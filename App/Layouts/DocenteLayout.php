<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN DASHBOARD</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="/assets/js/docente/docente.js" defer></script>
    <link rel="stylesheet" href="/assets/css/docente-aux.css">
</head>


<body>

    <div class="esquerda shadow" id="">
        <!-- <a class="logo" href="/"><img class="logo" src="\assets\images\index\logobhas.png"></a> -->
        <a class="logo t-shadow" href="/">Bhaskara</a>
        <a class="hrefs" id="btn1" href="/docente/home?tab=gerenciamento"><i
                class="bi-gear-wide-connected"></i><span>Gerenciar</span></a>
        <a class="hrefs" id="btn2" href="/docente/home?tab=dicentes"><i
                class="bi bi-backpack2-fill"></i><span>Discentes</span></a>
        <a class="hrefs" id="btn3" href="/docente/home?tab=docentes"><i
                class="bi bi-briefcase-fill"></i><span>Docentes</span></a>

        <a href="/logout">
            <i class="bi bi-box-arrow-left"></i>
            Sair
        </a>
    </div>

    <header class="" id="oppacity-appear">
        <h1>Olá,
            <?php echo $_SESSION['logged']['nome']; ?> 👋
            <br>
            <hr id="width-appear">
        </h1>
    </header>

    <main id="oppacity-appear">
        <?php
      $this->renderView($this->page->view, $this->page->viewDirectory)
    ?>
        <img class="meshbg" src="/assets/images/index/mesh-gradient.png" alt="">
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

header {
    box-shadow: 1px 1px 2px var(--shadow);
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
    grid-template-rows: 10vh 1fr;
    grid-template-columns: 15vw 1fr;
    grid-template-areas: 'aside header''aside main';
}

.logo {
    color: var(--background);
    margin-bottom: 1rem;
    font-weight: 600;
}

a>span {
    font-weight: 300;
    color: var(--background);
}

.meshbg {
    position: absolute;
    z-index: -1;
    right: 0;
    oppacity: 0;
    height: 100vh;
    filter: blur(5px);
}

.hrefs {
    display: flex;
    justify-content: space-evenly;
    padding: 0.2rem;
    background-color: var(--primary-d);
    border-radius: 0.3rem;
}

.hrefs>i {
    width: 1rem;
    color: var(--background);
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

.esquerda {
    display: flex;
    flex-direction: column;
    grid-area: aside;
    font-size: 24px;
    height: 100%;
    background-color: var(--primary);
    row-gap: 1rem;
    padding: 1rem;
}

.esquerda>a[href="/logout"] {
    border-radius: 0.3rem;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    background-color: var(--accent);
    padding: .2rem 0 .2rem 0;
}

a[href="/logout"]:hover {
    cursor: pointer;
    transform: translateY(2px);
    transition: ease all 0.2s;
    opacity: 0.8;
}

.esquerda>a[href="/logout"],
.esquerda>a[href="/logout"]>i {
    color: var(--primary-d);
}

.shadow {
    box-shadow: 1px 2px 1px var(--shadow);
}

.t-shadow {
    text-shadow: 1px 2px 1px var(--shadow);
}
</style>

</html>