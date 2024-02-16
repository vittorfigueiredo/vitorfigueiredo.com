<?php $this->layout("master", ["title" => $title]) ?>

  <div class="profile-section">
    <div class="image">
      <img src="/assets/img/profile.webp" alt="profile">
    </div>
    <div class="name-and-description">
      <h1>Olá, Eu sou o Vitor</h1>
      <h4>Desenvolvedor de Software.</h4>
    </div>
  </div>

  <div class="about-section">
    <p>
      Programador apaixonado por tecnologia e solucionador de problemas, com 22 anos de idade e uma trajetória de mais de 3 anos no mercado. Iniciei como estagiário e, atualmente, atuo como desenvolvedor pleno, com uma ampla experiência que vai além do backend, incluindo passagens pelo desenvolvimento frontend e infraestrutura.
    </p>
    <p>
    Minha expertise está centrada na minha stack principal, PHP, Laravel e MySQL, além do conhecimento consolidado no framework NestJS.
    </p>
    <p>
      Não me prendo a ferramentas ou tecnologias específicas, optando pela abordagem que melhor atenda aos requisitos do projeto e garanta uma entrega de qualidade. Ao longo da minha jornada, enfrentei uma variedade de desafios e problemas inesperados, mas meu compromisso e perseverança sempre me permitiram superá-los.
    </p>
    <p>
      Hoje, como profissional pleno, meu foco principal está em Laravel. Estou sempre em busca de novos aprendizados e desafios, determinado a proporcionar soluções inovadoras e eficientes. Este sou eu, um desenvolvedor que não se intimida diante das adversidades! 🫡
    </p>
  </div>

  <div class="latest-articles">
    <div class="title">
      <h1>Últimos Artigos</h1>
      <!-- <button class="text">Todos</button> -->
    </div>
    <div id="latest-articles-links" class="links">
    </div>
  </div>

  <div class="popular-articles">
    <div class="title">
      <h1>Artigos Populares</h1>
    </div>
    <div id="popular-articles-links" class="links">
    </div>
  </div>

<script src="/assets/js/home.js" type="module"></script>
<script> localStorage.setItem('accessToken', '<?= $this->e($apiAccessToken) ?>'); </script>
