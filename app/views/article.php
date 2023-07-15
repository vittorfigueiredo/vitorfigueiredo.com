<?php $this->layout("master", ["title" => $title]) ?>

<link rel="stylesheet" href="/assets/css/article.css">

<div class="container">
  <class class="title">
    <h1><?=$this->e($article["title"]) ? $this->e($article["title"]) : "Lorem ipsum dolor, sit amet consectetur adipisicing elit."?></h1>
  </class>
  <div class="post-info">
    <div class="author">
      <h6>Por Vitor Figueiredo, <?=$this->e($article["createdAt"]) ? date_format(new DateTime($this->e($article["createdAt"])), 'd/m/Y') : "06 Jan 2023" ?></h6>
    </div>
  </div>
  <!-- <div class="tags">
    <a href="#">PHP</a>
  </div> -->

  <div class="content">
    <?php
      use Parsedown;
      use app\helpers\Uri;

      $name = addslashes(str_replace("name=", "", Uri::get("query")));

      $article = file_get_contents("articles/$name.md");

      if (!$article) {
        header("Location: /ArticleNotFound");
      }

      $parser = new Parsedown();
      echo $parser->text($article);
    ?>
  </div>

  <div class="about-author border border-secondary">
    <div class="author-image">
      <img height="128" width="128" src="/assets/img/profile.jpg" alt="author image">
    </div>
    <div class="about-author-description">
      <h1 class="text-light">Sobre Vitor</h1>
      <p class="text-light">Desenvolvedor Web Backend, apaixonado por tecnologia e gamer nas hora vagas.</p>
    </div>
  </div>
</div>

<script src="/assets/js/article.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
<script>hljs.highlightAll()</script>
