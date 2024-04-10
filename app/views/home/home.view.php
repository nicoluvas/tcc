<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bhaskara</title>
    <script src="<?= JS . 'home/home.js' ?>" defer></script>
    <link rel="stylesheet" href="<?= CSS . 'home/home.css' ?>" />
</head>

<body>
    <div class="pagina1">
        <header>
            <nav>
                <img id="logo" src="<?= IMAGES . 'home/logo.png' ?>" class="shown logo">
                <img id="logo-dark" src="<?= IMAGES . 'home/logo-dark.png' ?>" class="hidden logo">
                <ul>
                    <li>
                        <a href="#">Quem Somos</a>
                    </li>
                    <li>
                        <a href="#">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="#">Método de Ensino</a>
                    </li>
                </ul>
                <div class="point theme">
                    <svg class="svg-lua-bola" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <circle cx="23" cy="23" r="23" />
                    </svg>
                    <svg class="svg-lua" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5258 0.0251729C8.27247 0.283094 4.87561 2.09221 2.8349 4.65375C1.52552 6.29743 0.674884 8.08753 0.251457 10.0907C0.0726542 10.9365 0 11.66 0 12.5949C0 13.7983 0.165361 14.8375 0.562681 16.1305C2.02776 20.8989 6.30314 24.4238 11.2758 24.9631C11.9699 25.0385 13.7317 24.9923 14.4815 24.8792C17.2049 24.4684 19.6866 23.1644 21.83 21.0179C22.4812 20.3658 23.0568 19.6523 23.6276 18.7897L24 18.2268L23.8073 18.0421C23.7012 17.9404 23.6023 17.8573 23.5874 17.8573C23.5726 17.8573 23.3647 17.9936 23.1255 18.1603C21.9103 19.0068 20.453 19.5928 19.0452 19.8012C17.0221 20.1007 14.7965 19.5309 13.0476 18.2657C11.3305 17.0235 10.1906 15.2836 9.74894 13.2304C9.62291 12.6446 9.57847 11.2823 9.66307 10.5992C9.85587 9.04326 10.6476 7.33887 11.7303 6.14903C13.9401 3.72042 16.8546 2.82551 20.1632 3.55961C20.5145 3.63753 20.8442 3.71371 20.8958 3.72883C21.0317 3.76872 21.136 3.54911 21.0608 3.38142C20.9814 3.20435 20.0916 2.48679 19.3977 2.04018C17.8504 1.04444 15.95 0.335682 14.2434 0.117936C13.3893 0.00897888 12.2296 -0.0306319 11.5258 0.0251729Z" />
                    </svg>
                    </btn>
                </div>
                <btn class="btn-restrito point">
                    <a href="/login">Área Restrita</a>
                </btn>
            </nav>
        </header>

        <div>
            <img id="bg-banner" class="shown bg-banner" src="<?= IMAGES . 'home/mesh-gradient.png' ?>">
            <img id="bg-banner-dark" class="hidden bg-banner" src="<?= IMAGES . 'home/mesh-gradient-dark.png' ?>">
        </div>
        <img class="fade shadow wein bgs" src="<?= IMAGES . 'home/wein.png' ?>">
        <img class="lampada shadow bgs" src="<?= IMAGES . 'home/lampada.png' ?>">
        <div class="fixa">
            <div class="fixa1 shadow"></div>
            <div class="fixa2 shadow"></div>
        </div>

        <div class="resolva shadow">
            <h1>Resolva o seu <br> <span class="marked">futuro</span> com <br> <span class="highlight">Bhaskara</span>!
            </h1>
            <h3>Conheça a melhor <span class="weight">escola</span> do país</h3>
        </div>

        <!-- <div class="boxes">

    <div class="box0">
      <p class="desc">meu metodo</p>
    </div>
    <div class="box1">
      <p class="desc">aulas praticas blabla</p>
    </div>
    <div class="box2">
      <p class="desc">Ensino de vestibular</p>
    </div>
    <div class="boxb">

    </div>
  </div> -->
    </div>
    <div class="pagina2">
        <img src="<?= IMAGES . 'home/indiano.png' ?>" class="bgs shadow indiano">
        <div class="retangulo shadow">
            <div class="abrace">
                <h2>Abrace a <br><span class="marked">modernidade</span></h2>
                <p>Uma sala de aula onde os conceitos abstratos ganham vida diante dos olhos dos alunos. Com a realidade virtual (VR), isso é possível. Os estudantes podem mergulhar em moléculas, explorar reações químicas em escala atômica e até mesmo viajar para dentro de células vivas. Aulas interativas e imersivas tornam o aprendizado mais envolvente e compreensível.</p>
            </div>
        </div>
        <img src="<?= IMAGES . 'home/taylorswift.png' ?>" class="bgs shadow taylorswift">
        <img class="estrelhinhas bgs" src="<?= IMAGES . 'home/estrelinhas.png' ?>">
        <p class="text-border bgs">BHASKARA</p>
    </div>
    <div class="pagina3">
        <img src="<?= IMAGES . 'home/sdjfsdf-2.png' ?>" class="bgs shadow familia">
        <!-- <div class="papelzada">
            <img src="<?= IMAGES . 'home/papel.png' ?>" class="bgs shadow">
            <img src="<?= IMAGES . 'home/papel.png' ?>" class="bgs shadow">
            <img src="<?= IMAGES . 'home/papelzada.png' ?>" class="bgs shadow">
        </div> -->
        <img src="<?= IMAGES . 'home/estrelada.png' ?>" class="estrelada bgs shadow">
        <div class="redondadoz shadow bgs"></div>
        <div class="bolado shadow bgs"></div>
        <div class="ensino-bloco">
            <h2>Ensino voltado a...<br> <span class="marked">VESTIBULARES</span></h2>
            <p>Contando com uma abordagem intensiva e estratégica, focada na preparação dos estudantes para os exames de ingresso ao ensino superior, Bhaskara propõe: Currículo Estratégico, Simulados e Treinamento Intensivo, Estratégias de Estudo, Apoio Psicológico, Parcerias com Cursinhos e Universidades.</p>
        </div>

    </div>
</body>

</html>