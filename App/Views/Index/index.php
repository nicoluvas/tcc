<!DOCTYPE html>
<html lang="pt-br" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/assets/images/icon.ico">
    <title>Bhaskara</title>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="/assets/js/index/index.js" type="module" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body class="lexend" id="home">
    <img id="meshbg" src="assets\images\index\mesh-gradient.png">

    <header class="cabecalho">
        <img class="logo" src="assets\images\index\logobhas.png">
        <nav>
            <a href="/info" class="quem hover" style="color: var(--text)">Quem somos</a>
            <a href="/metodo" class="metodo hover" style="color: var(--text)">Método de Ensino</a>
            <a href="/contato" class="contato hover" style="color: var(--text)">Fale Conosco</a>
        </nav>
        <a href="/login" class="point restrita lexend" style="">
            Área Restrita
        </a>
    </header>

    <main class="">
        <!-- SEÇÃO 1 -->
        <section class="pagina1" id="pagina1">
            <div class="esquerdo">
                <img class="left-appear" src="assets\images\index\moda.png" alt="aa">
            </div>
            <div class="imgs">
                <img class="wein oppacity-appear" src="assets\images\index\vetor.svg" class="pessoa " style="height:500px" id="a"
                    alt="wein">
            </div>
        </section>
        <!-- SEÇÃO 2 -->
        <section class="pagina2" id="pagina2">
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
        <section class="pagina3" id="pagina3" style="">
            <img src="assets\images\index\pessoa3.svg" class="pessoa3" alt="">

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
        <section class="pagina4" id="pagina4">
            <div class="container">
                <div class="cta-form">
                    <h2>• Solicite contato.</h2>
                    <p style="opacity: 0.8;">Assim podendo receber novidades recentes!</p>
                </div>
                <form action="" class="form" style="border-bottom-left-radius: 1rem;border-bottom-right-radius: 1rem;">
                    <div class="contato-info">
                        <label for="name" class="form__label">Nome</label>
                        <input type="text" placeholder="Nome" class="form__input" id="name" required name="nome"/>
                    </div>

                    <div class="contato-info">
                        <label for="name" class="form__label">Telefone</label>
                        <input type="text" placeholder="Telefone" class="form__input" id="name" required name="telefone"/>
                    </div>

                    <div class="contato-info">
                        <label for="email" class="form__label">Email</label>
                        <input type="email" placeholder="Email" class="form__input" id="email" required name="email"/>
                    </div>

                    <span id="retorno" style="height: 1.5rem; text-align: center;"></span>
                    <input class="lexend" id="inpute" type="submit" value="Enviar">
                </form>
                <script>
                    $('form').on('submit', function (e) {
                        e.preventDefault()

                        $.ajax({
                            'url': '/solicitar-contato',
                            'type': 'post',
                            'data': $(this).serialize(),
                            'dataType': 'json'
                        })
                        .done(data => {
                            $('form span').text(data.msg)
                            $(this).trigger('reset')
                        })
                        .catch(a => console.log(a))
                    })
                </script>
            </div>
        </section>
        <div class="waves">
            <div class="wave"></div>
        </div>
        <footer>
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="#pagina1">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="#pagina2">Introdução</a></li>
                <li class="menu__item"><a class="menu__link" href="#pagina3">Método</a></li>
                <li class="menu__item"><a class="menu__link" href="#pagina4">Contato</a></li>
            </ul>
            <p>&copy;2024 Bhaskara Inc. | Todos Direitos Reservados.</p>
        </footer>
    </main>
</body>

</html>