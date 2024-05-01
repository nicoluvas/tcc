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
    <img class="logo" src="assets\images\index\logob.png">
    <nav>
      <a class="quem point">Quem somos</a>
      <a class="metodo point">Método de Ensino</a>
      <a class="contato point">Fale Conosco</a>
    </nav>
    <div>
      <button class="tema point" onclick="toggleMode()">
        <i class="fa-solid fa-moon fa-2xl "></i>
      </button>
      <button class="restrito point">Área Restrita</button>
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
        <div class="caixas-inf">
          <div class="caixa" id="cx1">
            <div class="bola"></div>
            <p>Método de ensino dinamarques</p>
          </div>
          <div class="caixa" id="cx2">
            <div class="bola"></div>
            <p>Aulas práticas e intuitivas</p>
          </div>
          <div class="caixa" id="cx3">
            <div class="bola"></div>
            <p>Ensino que visa vestibulares</p>
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
            Uma sala de aula onde os conceitos abstratos ganham vida diante dos olhos dos alunos. Com a realidade virtual (VR), isso é possível. Os estudantes podem mergulhar em moléculas, explorar reações químicas em escala atômica e até mesmo viajar para dentro de células vivas. Aulas interativas e imersivas tornam o aprendizado mais envolvente e compreensível.
          </p>
        </div>
        <p class="bgtext">BHASKARA</p>
      </div>
    </section>
    <!-- SEÇÃO 3 -->
    <section class="pagina3">

    </section>
  </main>
</body>

</html>