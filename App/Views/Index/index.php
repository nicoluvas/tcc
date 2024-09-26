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
        <div>
            <a href="/login" class="restrito point">Área Restrita</a>
        </div>
    </header>
    <main class="">
        <!-- SEÇÃO 1 -->
        <section class="pagina1">
            <div class="esquerdo">
                <div class="letreiro">
                    <div class="linha" id="linha1"></div>
                    <div class="linha" id="linha2"></div>
                    <p>Resolva o seu <br>
                        <span>futuro</span> com <br>
                        <span>Bhaskara!</span>
                    </p>
                </div>
            </div>
            </div>
            <div class="imgs">
                <img src="assets\images\index\fddddtgryredr.png" class="pessoa" id="a" alt="wein">
                <img src="" alt="">
            </div>
        </section>
        <!-- SEÇÃO 2 -->
        <section class="pagina2">
            <div id="pessoa2">
                <img src="assets\images\index\taylorswift.png" alt="wein">
            </div>
            <div id="esquerda">

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
            <img src="assets\images\index\ze.svg" alt="">
            <img class="muies" src="assets\images\index\muies.svg" alt="venha ser bhaskara!!">
            <p class="shadow">Contando com uma abordagem intensiva e estratégica, focada na preparação dos estudantes
                para os exames de ingresso ao ensino superior, Bhaskara propõe: <span class="shadow"> Currículo
                    Estratégico, Simulados e Treinamento Intensivo, Estratégias de Estudo, Apoio Psicológico, Parcerias
                    com Cursinhos e Universidades.</span></p>
            <img src="assets\images\index\fundo3.png" alt="">
        </section>
        <!-- SEÇÃO 4 -->
        <section class="pagina4">

            <body>
                <div class="desktop-4">
                    <img class="img4-icon" alt="" src="assets\images\index\img4@2x.png" />

                    <div class="rectangle-parent">
                        <div class="frame-child"></div>
                        <div class="message">
                            <div class="message-info">
                                <div class="informaes-do-responsvel-parent">
                                    <b class="informaes-do-responsvel">Informações do responsável</b>
                                    <div class="aps-a-solicitao">
                                        Após a solicitação, entraremos em contato...
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                        </div>
                        <div class="name-field">
                            <div class="name-input">
                                <div class="nome-do-responsvel">Nome do responsável</div>
                                <div class="contact-details">
                                    <div class="contact-details-child"></div>
                                    <div class="insira-o-nome">Insira o nome completo</div>
                                </div>
                            </div>
                        </div>
                        <div class="name-field1">
                            <div class="nmero-de-telefone-parent">
                                <div class="nmero-de-telefone">Número de Telefone</div>
                                <div class="rectangle-group">
                                    <div class="frame-item"></div>
                                    <div class="xx-9-9999-9999">(XX) 9 9999-9999</div>
                                </div>
                            </div>
                        </div>
                        <div class="name-field2">
                            <div class="e-mail-parent">
                                <div class="e-mail">E-mail</div>
                                <div class="rectangle-container">
                                    <div class="frame-inner"></div>
                                    <div class="informe-um-email">Informe um email válido</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <main class="content">
                        <img class="prancheta-1-1" alt="" src="assets\images\index\prancheta-1-1@2x.png" />

                        <div class="background"></div>
                        <section class="logo-area">
                            <div class="logo-background"></div>
                            <div class="frame-div">
                                <div class="rectangle-div"></div>
                                <h1 class="bhaskara">BHASKARA</h1>
                                <h1 class="bhaskara1">BHASKARA</h1>
                                <h1 class="bhaskara2">BHASKARA</h1>
                            </div>
                            <img class="design-sem-nome-2024-03-22t1" loading="lazy" alt=""
                                src="assets\images\index\design-sem-nome--20240322t135815-1@2x.png" />
                        </section>
                    </main>
                </div>
            </body>
        </section>
        <!-- SEÇÃO 5 -->
        <section class="pagina5">

            <body>
                <div class="desktop-7">
                    <img class="img4-icon1" alt="" src="assets\images\index\img4@2x.png" />
                    <div class="desktop-7-child"></div>
                    <footer class="content1"></footer>
                    <img class="metdo-para-o-seu-1-1" alt="" src="assets\images\index\metdo-para-o-seu-1-1@2x.png" />
                </div>
        </section>
    </main>
</body>

</html>