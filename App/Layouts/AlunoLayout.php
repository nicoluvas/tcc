<!DOCTYPE html>
<html lang="pt-br">
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
    <link rel="stylesheet" href="/assets/css/docente-aux.css">
</head>
<body>
    <header>
        Bem vindo <?= $_SESSION['logged']['nome'] ?>!
    </header>
    <?php
        if ($_SERVER['REQUEST_URI'] != '/aluno/home') {
            ?>
                <a href="/aluno/home">«</a>
            <?php
        }
    ?>
    <main>
        <?php
            $this->renderView($this->page->view, $this->page->viewDirectory);
        ?>
    </main>
</body>
</html>