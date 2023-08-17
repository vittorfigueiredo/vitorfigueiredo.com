<?php $this->layout("master", ["title" => $title]) ?>

  <div class="profile-section">
    <div class="image">
      <img src="/assets/img/profile.webp" alt="profile">
    </div>
    <div class="name-and-description">
      <h1>Olá, Eu sou o Vitor</h1>
      <h4>Desenvolvedor Backend.</h4>
    </div>
  </div>

  <div class="about-section">
    <p>
      Programador de 21 anos apaixonado por tecnologia e solucionar problemas.
    </p>
    <p>
      Estou no mercado há 2 anos, onde comecei como estagiário e atualmente estou como júnior. Atuo principalmente como backend, mas já fiz front, infra e etc. Criei e apliquei diversas regras de negócio, sem contar na quantidade de bugs resolvidos haha.
    </p>
    <p>
      Minha stack principal é o PHP e MySQL. Tenho experiência também com o framework NestJS. Atualmente estou estudando Laravel para somar na minha stack principal.
    </p>
    <p>
      Não me limito as ferramentas e nem tecnologias, uso a que for necessária para solucionar o problema e realizar uma entrega com qualidade.
    </p>
    <p>
      Durante essa jornada fui exposto a diversos desafios e problemas inesperados no qual não sabia se era capaz de lidar, para o azar deles, não sou alguém que se dá por vencido e consegui derrubar um por um.
    </p>
    <p>
      Esse sou eu! 🫡
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
