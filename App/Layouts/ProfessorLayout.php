<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav>
        <a href="/professor/chamada">Chamada</a>
        <a href="/professor/situacao/aluno">Situação Aluno</a>
        <a href="/professor/notas/alunos">Notas</a>
    </nav>
    <main>
        <?php
            $this->renderView($this->page->view, $this->page->viewDirectory);
        ?>
    </main>
    <footer>
        <a href="/logout">
            <i class="bi bi-box-arrow-left"></i>
            Sair
        </a>
    </footer>
</body>

</html>