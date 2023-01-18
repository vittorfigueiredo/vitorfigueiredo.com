<?php $this->layout("master", ["title" => $title]) ?>

<link rel="stylesheet" href="/assets/css/article.css">

<div class="container">
  <class class="title">
    <h1>Introdução à sintaxe básica do PHP</h1>
  </class>
  <div class="post-info">
    <div class="author">
      <img height="40px" width="40px" src="/assets/img/profile.jpg" alt="author">
      <h6>Vitor Figueiredo</h6>
    </div>
    <h6><span><i class="bi bi-calendar-date"></i></span>06 Jan 2023</h6>
    <h6><span><i class="bi bi-watch"></i></span>3 minutos de leitura</h6>
  </div>
  <div class="tags">
    <a href="#">PHP</a>
  </div>

  <div class="content">
    <?php
      use Parsedown;

      $name = filter_input(INPUT_GET, "name", FILTER_DEFAULT);

      $parser = new Parsedown();
      $article = file_get_contents("articles/$name.md");

      if (!$article) {
        header("Location: /ArticleNotFound");
      }

      echo $parser->text($article);
    ?>
  </div>

  <div class="about-author">
    <div class="author-image">
      <img height="128" width="128" src="/assets/img/profile.jpg" alt="author image">
    </div>
    <div class="about-author-description">
      <h1>Sobre Vitor</h1>
      <p>Desenvolvedor Web Backend, apaixonado por tecnologia e gamer nas hora vagas.</p>
    </div>
  </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
<script>hljs.highlightAll()</script>
