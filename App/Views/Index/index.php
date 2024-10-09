<!DOCTYPE html>
<html lang="pt-br">

<!-- Gsap -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", (event) => {
    gsap.from("#meshbg", {
        delay: 0.5,
        opacity: 0,
        y: 100,
        duration: 2.5,
        ease: "power1.inOut",
    });
    gsap.from(".pessoa#a", {
        delay: 0.3,
        opacity: 0,
        y: 10,
        duration: .5,
        ease: "power1.inOut",
    });
    gsap.from(".letreiro", {
        opacity: 0,
        y: 10,
        duration: .5,
        ease: "power1.inOut",
    });
});
</script>

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bhaskara</title>
    <script src="/assets/js/index/index.js" defer></script>
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body class="lexend" id="home">
    <img id="meshbg" src="assets\images\index\mesh-gradient.png">
    <img class="meshbgdark" id="meshbg" src="assets\images\index\mesh-gradient-dark.png">
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
                <img class="wein" src="assets\images\index\vetor.svg" class="pessoa" style="height:500px" id="a" alt="wein">
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
        <section class="pagina3">
            <p class="shadow">Contando com uma abordagem intensiva e estratégica, focada na preparação dos estudantes
                para os exames de ingresso ao ensino superior, Bhaskara propõe: <span class="shadow"> Currículo
                    Estratégico, Simulados e Treinamento Intensivo, Estratégias de Estudo, Apoio Psicológico, Parcerias
                    com Cursinhos e Universidades.</span></p>

        </section>
        <!-- SEÇÃO 4 -->

    </main>
</body>

</html>