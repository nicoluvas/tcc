<!DOCTYPE html>
<style>
@import url('/assets/css/global.css');
@import url('/assets/css/docente-aux.css');

* {
    padding: 0;
    margin: 0;
    font-family: lexend;
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
    background-color: #e5e5f7;
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
    height: 100%;
    width: 100%;
    overflow: hidden;

    opacity: 1;
    background-image: radial-gradient(var(--secondary) 1.7000000000000002px, transparent 1.7000000000000002px), radial-gradient(var(--shadow) 1.7000000000000002px, var(--background) 1.7000000000000002px);
    background-size: 68px 68px;
    background-position: 0 0, 34px 34px;
    background-opacity: 0.1;
}

#ano {
    font-size: 1.5rem;
    font-weigth: 600;
    background-color: var(--primary);
    color: var(--text-inv);
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
    <script src="/assets/js/docente/docente.js" defer></script>
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



    <main id="oppacity-appear">
        <div class="aluno-esq">
            <img id="liao" class="" src="/assets/images/admin/B.png" alt="">
        </div>
        <div class="aluno-dir" id="oppacity-appear">
            <?php
            $this->renderView($this->page->view, $this->page->viewDirectory);
        ?>
        </div>
    </main>
</body>

</html>