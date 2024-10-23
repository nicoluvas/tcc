<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bhaskara</title>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="/assets/js/index/index.js" type="module" defer></script>
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body class="lexend" id="home">
    <img id="meshbg" src="assets\images\index\mesh-gradient.png">

    <header class="cabecalho">
        <img class="logo" src="assets\images\index\logobhas.png">
        <nav>
            <a href="/info" class="quem point" style="color: var(--text)">Quem somos</a>
            <a href="/metodo" class="metodo point" style="color: var(--text)">Método de Ensino</a>
            <a href="/contato" class="contato point" style="color: var(--text)">Fale Conosco</a>
        </nav>
        <a href="/login" class="point restrita lexend" style="">
            Área Restrita
        </a>
    </header>

    <main class="">
        <!-- SEÇÃO 1 -->
        <section class="pagina1">
            <div class="esquerdo">
                <img src="assets\images\index\moda.png" alt="aa">
            </div>
            <div class="imgs">
                <img class="wein" src="assets\images\index\vetor.svg" class="pessoa" style="height:500px" id="a"
                    alt="wein">
            </div>
        </section>
        <!-- SEÇÃO 2 -->
        <section class="pagina2">
            <div id="esquerda">
                <div id="pessoa2">
                    <img src="assets\images\index\taylor.svg" alt="wein">
                </div>
            </div>
            <div id="direita">
                <div class="caixadir">
                    <h3>...Abrace a <br><span class="mark">modernidade</span></h3>
                    <p>
                        Uma sala de aula onde os conceitos abstratos ganham vida diante dos olhos dos alunos. Com a
                        realidade virtual (VR), isso é possível. Os estudantes podem mergulhar em moléculas, explorar
                        reações químicas em escala atômica e até mesmo viajar para dentro de células vivas. Aulas
                        interativas e imersivas tornam o aprendizado mais envolvente e compreensível.
                    </p>
                </div>

            </div>
        </section>
        <!-- SEÇÃO 3 -->
        <section class="pagina3" style="">
            <img src="assets\images\index\pessoa3.svg" class="pessoa3" alt="" style="width: 450px;">

            <div class="direita3">
                <div class="twelve">
                    <h1>Nosso Método...</h1>
                </div>
                <p class="shadow">Contando com uma abordagem intensiva e estratégica, focada na preparação dos
                    estudantes
                    para os exames de ingresso ao ensino superior, Bhaskara propõe: <span class="shadow"> Currículo
                        Estratégico, Simulados e Treinamento Intensivo, Estratégias de Estudo, Apoio Psicológico,
                        Parcerias
                        com Cursinhos e Universidades.</span></p>
            </div>
        </section>
        <section class="pagina4">
            <div class="container">
                <div class="cta-form">
                    <h2>• Entre em contato!</h2>
                </div>
                <form action="" class="form">
                    <div class="contato-info">
                        <label for="name" class="form__label">Nome</label>
                        <input type="text" placeholder="nome" class="form__input" id="name" />
                    </div>

                    <div class="contato-info">
                        <label for="name" class="form__label">Telefone</label>
                        <input type="text" placeholder="telefone" class="form__input" id="name" />
                    </div>
                    
                    <div class="contato-info">
                        <label for="email" class="form__label">Email</label>
                        <input type="email" placeholder="Email" class="form__input" id="email" />
                    </div>

                </form>
                <input class="lexend" id="inpute" type="submit" value="Enviar">
                <span class="retorno">Contato solicitado! Aguarde o chamado de Deus!</span>    
            </div>
        </section>
        <div class="waves">
            <div class="wave"></div>
        </div>
        <footer>
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="#">About</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
            </ul>
            <p>&copy;2024 Bhaskara Inc. | Todos Direitos Reservados.</p>
        </footer>
    </main>
</body>

</html>