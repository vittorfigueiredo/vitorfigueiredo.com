<?php $this->layout("master", ["title" => $title]) ?>

<main class="container">
  <div class="profile-section">
    <div class="image">
      <img src="/assets/img/profile.jpg" alt="profile">
    </div>
    <div class="name-and-description">
      <h1>Olá, Eu sou o Vitor</h1>
      <h4>Desenvolvedor Web Backend.</h4>
    </div>
  </div>

  <div class="about-section">
    <p>
      Eu tenho 21 anos e sempre fui apaixonado por tecnologia desde pequeno. Eu sempre tive essa paixão, mas até 2017 quando eu estava concluindo o ensino médio, ainda estava muito indeciso sobre o que eu queria fazer da minha vida e qual carreira seguir.
    </p>
    <p>
      Em 2018 eu comecei um curso de Técnico em Informática no IFPB da cidade onde eu morava, lá eu tive uma introdução sobre algoritimos e programação, e com isso fui cada vez mais curtindo o que eu estava aprendendo, mas não práticava muito, tinha o hábito de procrastinar muito haha.
    </p>
    <p>
      Então foi de fato em 2020 quando entrei no curso de Análise e Desenvolvimento de Sistemas que comecei a por a mão na massa e a praticar, e em 2021 eu consegui minha primeira oportunidade no mercado de trabalho, consegui uma vaga para um estágio e foi onde aprendi muita coisa, como funcionava em uma empresa de verdade. Atualmente ainda estou nessa empresa só que como desenvolvedor júnior.
    </p>
  </div>

  <div class="latest-articles">
    <div class="title">
      <h1>Ultimos Artigos</h1>
      <button>All Aticles</button>
    </div>
    <div id="latest-articles-links" class="links">
      <ul>
        <!-- <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li> -->
        <!-- <li>Nenhum artigo encontrado!</li> -->
      </ul>
    </div>
  </div>

  <div class="popular-articles">
    <div class="title">
      <h1>Artigos Populares</h1>
    </div>
    <div id="popular-articles-links" class="links">
      <ul>
        <!-- <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li> -->
        <!-- <li>Nenhum artigo encontrado!</li> -->
      </ul>
    </div>
  </div>
</main>

<script src="/assets/js/home.js"></script>
