<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método - Bhaskara</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="/assets/js/docente/docente.js" defer></script>
    <link rel="stylesheet" href="/assets/css/docente-aux.css">
</head>
<style>
.fixed-icon {
    position: fixed;
    top: 20px;

    left: 20px;

    color: var(--primary);
    font-size: 24px;

    z-index: 1000;

}
</style>

<body>
    <a href="/">

        <i class="bi bi-house-fill fixed-icon"></i>
    </a>

    <table class="main"style="width: 600px">
        <td>
            <tr>
                <h1 id="width-appear" class="lexend" style="display:inline; white-space: nowrap;">Quem Somos?</h1>
            </tr>
        </td>
        <div id="oppacity-appear" class="lexend" style="text-align: justify;">
            <p>
                A <span>Escola Bhaskara</span> é uma instituição educacional inovadora que abraça o <span>método de
                    ensino dinamarquês</span>,
                reconhecido mundialmente por seu foco no <span>desenvolvimento holístico</span> dos estudantes e na
                promoção de um
                <span>ambiente de aprendizagem colaborativo</span> e <span>dínamico</span>. Fundada com o objetivo de
                preparar os alunos para os
                <span>desafios do século XXI</span>, a Bhaskara integra <span>tecnologia</span> e
                <span>criatividade</span> de maneira única em suas práticas
                pedagógicas.
                <br><br>
                A <span>tecnologia</span> é um componente central no currículo da Bhaskara. Em vez de limitar o uso de
                dispositivos
                digitais, a escola incentiva os estudantes a utilizarem a <span>tecnologia</span> como uma ferramenta
                para explorar,
                criar e inovar. Nas aulas de <span>ciência</span>, por exemplo, os alunos usam <span>software de
                    simulação</span> para realizar
                <span>experimentos virtuais</span>, enquanto nas aulas de <span>artes</span>, <span>aplicativos de
                    design gráfico</span> são empregados para
                desenvolver <span>projetos criativos</span>.
                <br><br>
                A <span>Escola Bhaskara</span> representa uma abordagem moderna e eficiente da educação, preparando os
                estudantes
                para um futuro onde a <span>criatividade</span> e a <span>tecnologia</span> serão fundamentais. Ao
                integrar o <span>método dinamarquês</span>
                de ensino com um forte foco na <span>inovação</span>, a Bhaskara não apenas educa, mas também inspira
                seus alunos a
                se tornarem <span>pensadores críticos</span> e <span>criativos</span>, prontos para enfrentar os
                <span>desafios do mundo contemporâneo</span>.
            </p>

        </div>
    </table>

    <div class="lexend meshbg">
        <h3>Projeto idealizado por:</h3>
        <div class="perfil">
            <div>
                <img src="/assets/images/info/theo.png" alt="theo">
                <h4>Lara Galeano</h4>
                <h5>Design</h5>
            </div>
            <div>
                <img src="/assets/images/info/nico.png" alt="nico">
                <h4>Nícolas Penhalver</h4>
                <h5>Front-end</h5>
            </div>

            <div>
                <img src="/assets/images/info/leme.png" alt="leme">
                <h4>Lucas Leme</h4>
                <h5>Back-end</h5>
            </div>
        </div>

    </div>



</body>

<style>
@import url("https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap");
@import url('/assets/css/global.css');

.wrapper {
    width: 100%;
    table-layout: fixed;
    padding-bottom: 60px;
}

main {
    margin: 0 auto;
    width: 100%;
    max-width: 600px;
    border-spacing: 0;
    text-align: justify;
}

html {
    display: flex;
    flex-direction: column;
    align-items: center;
}

body {
    background-color: var(--background);
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 800px;
}

h2 {
    margin: 3rem 2rem 2rem 2rem;
    text-align: center !important;
    color: var(--primary) !important;
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

.perfil {
    display:flex;
    text-align: center;
    column-gap: 2vw;
}

.perfil>div>img {
    max-height: 10vw;
}

.perfil>div>h4 {
    color: var(--primary-d);
    font-size: 1.5rem;
}

.perfil>div>h5 {
    color: var(--background);
    background-color: var(--primary);
    border-radius: .5rem;
    font-size: 1rem;
}

h1 {
    font-size: 5.5rem;
    line-height: 5rem;
    margin-bottom: 2rem;
    color: var(--background) !important;
    background-color: var(--primary) !important;
    padding: 1rem;
    border-radius: 1rem;
    /* border: 2px solid black; */
    letter-spacing: -5px;
    max-width: 800px;
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