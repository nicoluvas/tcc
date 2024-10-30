<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/images/icon.ico">
    <title>Bhaskara - Professor</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/js/index/index.js" defer></script>
    <link rel="stylesheet" href="/assets/css/global.css">
    <style>
    * {
        text-decoration: none;
        font-family:lexend;
    }

    body {
        padding: 0;
        margin: 0;
        background-color: var(--background);
        height: 100vh;
    }

    nav {
        display: flex;
        justify-content: space-around;
        position: absolute;
        width: 100vw;
        z-index: 100;
        padding: 1rem 0 1rem 0;
        background-color: var(--primary);
    }

    nav>.nav-esq {
        display: flex;
        justify-content: space-evenly;
        width: 45%;
    }

    nav>.nav-esq>a {
        color: var(--text-inv);
        background-color: var(--primary-d);
        border-radius: .5rem;
        padding: 1rem 2rem 1rem 2rem;
        font-size: 1rem;
        font-weight: 500;
    }

    nav>.nav-dir {
        display: flex;
        align-items: center;
    }

    main {
        padding-top: 100px;
        flex: 1;

        opacity: 1;
    background-image: radial-gradient(var(--secondary) 1.7000000000000002px, transparent 1.7000000000000002px), radial-gradient(var(--shadow) 1.7000000000000002px, var(--background) 1.7000000000000002px);
    background-size: 68px 68px;
    background-position: 0 0, 34px 34px;
    background-opacity: 0.1;
    }

    #sair {
        background-color: var(--accent);
        font-weight: 500;
        font-size: 1rem;
        padding: 1rem;
        border-radius: .5rem;
    }

    #sair,
    #sair>i {
        color: var(--text);
        font-weight: 600;
    }
    </style>
</head>

<body class="lexend">
    <nav>
        <div class="nav-esq">
            <a href="/professor/chamada">Chamada</a>
            <a href="/professor/situacao/alunos">Situação Alunos</a>
            <a href="/professor/notas/alunos">Notas</a>
        </div>
        <div class="nav-dir">
            <a id="sair" href="/logout">
                <i class="bi bi-box-arrow-left"></i>
                Sair
            </a>
        </div>
    </nav>
    <main class="oppacity-appear">
        <?php
            $this->renderView($this->page->view, $this->page->viewDirectory);
        ?>
    </main>
</body>

</html>