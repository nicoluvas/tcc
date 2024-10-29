<!DOCTYPE html>
<style>
@import url('/assets/css/global.css');
@import url('/assets/css/docente-aux.css');

* {
    padding: 0;
    margin: 0;
}

nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: var(--primary);
    padding: .5rem;
}

nav>p {
    color: var(--text-inv);
}

body {
    background-color: var(--background);
    height: 100vh;
}

#sair,
#voltar {
    color: var(--text-inv);
    background-color: var(--primary-d);
    padding: 1rem;
    border-radius: .5rem;
}

main {
    display: flex;
    align-items: center;
    justify-content: space-around;
    height: 90%;
    width: 100%;
}

img {
    max-height: 80vh;
}

.aluno-dir>div {
    row-gap: 1rem;
}

select {
    background-color: var(--accent);
}

.aluno-dir {
    max-width: 40vw;
}

@media screen and (max-width: 1024px) {
    .aluno-esq {
        display: none;
    }
}

.girado {
    transform-style: preserve-3d;
    transform: rotateY(180deg);
}
</style>
<html class="lexend" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/images/icon.ico">
    <title>Bhaskara - Aluno</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header>
        <nav>
            <?php
        if ($_SERVER['REQUEST_URI'] != '/aluno/home') {
            ?>

            <a style="" id="voltar" href="/aluno/home">« Voltar</a>
            <?php
        }
    ?>
            <p>
                Bem vindo(a) <?= $_SESSION['logged']['nome'] ?>! 👋
            </p>

            <a id="sair" href="/logout" onClick="">
                <i class="bi bi-box-arrow-left"></i>
                Sair
            </a>
        </nav>
    </header>



    <main>
        <div class="aluno-esq">
            <img id="liao" class="" src="/assets/images/admin/B.png" alt="">
        </div>
        <div class="aluno-dir">
            <?php
            $this->renderView($this->page->view, $this->page->viewDirectory);
        ?>
        </div>
    </main>
</body>

</html>