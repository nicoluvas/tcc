<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem somos? - Bhaskara</title>
</head>
<body>
    <header>
    <img class="logo" src="assets\images\index\logobhas.png">
        <a href="/">
            <i href="" class="bi bi-house-fill"></i>
        </a>
    </header>
    <hr>
    <div class="imagemdotheo"></div>

    <main>
        <h1 class="lexend">Quem somos?</h1>
        <hr>
        <p>Somos uma empresa especializada em <span>soluções para educação</span>, com foco no ensino de
            <span>física</span> e <span>matemática</span>.
        </p>
        
    <img src="https://www.prydwen.gg/static/ab8fdf1564fffa985e2c493ad0e58f97/c9885/7_card.png" alt=""
    </main>

</body>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap");

    :root {
        --text: #26210d;
        --text-inv: #f2edd9;
        --background: #f7f0dc;
        --primary: #234c67;
        --secondary: #b1d4f6;
        --accent: #cfa93f;
        --shadow: #201a0851;
    }

    body {
        overflow: hidden;
        background-color: var(--background);
    }

    * {
        color: var(--text);
    }

    .lexend {
        font-family: "Lexend", sans-serif;
        color: var(--text);
    }

    header {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    main {
        margin: 0 0 0 5rem;
    }

    h1 {
        font-size: 6rem;
        line-height: 5rem;
        max-width: 10rem;
        margin-bottom: 2rem;
    }

    .logo {
        width: 15%;
    }

    .imagemdotheo {
        float: right;
        width: 600px;
        height: 600px;
    }

    span {
        color: var(--primary);
        font-weight: bold;
    }

    i {
        color: var(--text);
    }
</style>

</html>