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

        </section>
        <!-- SEÇÃO 4 -->
        <section class="pagina4">
            <style>
            .pagina4 {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100vw;
            }

            .contact-form {
                border-radius: 0;
                box-shadow: 0 3px 4px rgba(0, 0, 0, 0.25);
                max-width: 508px;
                color: #234c67;
                text-align: center;
                font: 200 20px Inter, sans-serif;
            }

            .form-container {
                border-radius: 14px 10px 2px 10px;
                background-color: #f7f0dc;
                width: 100%;
                padding: 68px 40px 172px;
            }

            .form-title {
                font: 600 48px Lexend, sans-serif;
            }

            .form-description {
                align-self: start;
                margin: 34px 0 0 10px;
                font: 300 24px Lexend, sans-serif;
                height: 60px;
                margin-bottom: 1rem;
            }

            .input-wrapper {
                border-radius: 8px;
                display: flex;
                gap: 27px;
                padding: 15px 20px;
                border: 2px solid #234c67;
                margin-bottom: 1rem;
            }

            .input-icon {
                aspect-ratio: 0.89;
                object-fit: contain;
                object-position: center;
                width: 17px;
                align-self: start;
            }

            .input-field {
                flex-grow: 1;
            }

            .submit-button {
                border-radius: 5px;
                background-color: #cfa93f;
                font-size: 24px;
                color: #f7f0dc;
                font-weight: 700;
                margin: 50px 0 -34px;
                padding: 11px 70px 22px;
            }

            @media (max-width: 991px) {
                .form-container {
                    max-width: 100%;
                    padding: 0 20px 100px;
                }

                .form-title {
                    font-size: 40px;
                }

                .input-wrapper {
                    white-space: initial;
                }

                .submit-button {
                    max-width: 100%;
                    white-space: initial;
                    margin: 40px 0 10px;
                    padding: 0 20px;
                }

            }
            </style>

            <section class="contact-form">
                <div class="form-container">
                    <h2 class="form-title">CONTATO</h2>
                    <p class="form-description">Após a solicitação, entraremos em contato.</p>
                    <form>
                        <div class="input-wrapper">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/2dc9a7c166024e648611b6ae2ce99c2880c38fa0ce4fd3ba8e3cee6270e105fd?placeholderIfAbsent=true&apiKey=1331a5b9398d431d8729ff0655b12545"
                                class="input-icon" alt="" />
                            <label for="name" class="visually-hidden">Nome</label>
                            <input type="text" id="name" class="input-field" placeholder="Nome" aria-label="Nome" />
                        </div>
                        <div class="input-wrapper">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/d45b587f6808684f9602f9234e93dbba6c9a559aafb0ae983616039ff4895217?placeholderIfAbsent=true&apiKey=1331a5b9398d431d8729ff0655b12545"
                                class="input-icon" alt="" />
                            <label for="email" class="visually-hidden">E-mail</label>
                            <input type="email" id="email" class="input-field" placeholder="E-mail"
                                aria-label="E-mail" />
                        </div>
                        <div class="input-wrapper">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/b60738d151cd85f10091f5bc23ff22ad58276f5c05409026efcb92bac113bd68?placeholderIfAbsent=true&apiKey=1331a5b9398d431d8729ff0655b12545"
                                class="input-icon" alt="" />
                            <label for="whatsapp" class="visually-hidden">WhatsApp</label>
                            <input type="tel" id="whatsapp" class="input-field" placeholder="WhatsApp"
                                aria-label="WhatsApp" />
                        </div>
                        <button type="submit" class="submit-button">ENVIAR</button>
                    </form>
                </div>
            </section>
            <img class="fundo777" src="assets\images\index\fundo777.svg" alt="">
        </section>
    </main>
</body>

</html>