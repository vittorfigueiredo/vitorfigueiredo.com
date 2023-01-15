<?php

declare(strict_types=1);

namespace app\controllers;

class ArticleController extends Controller
{
  public function index()
  {
    $this->view("article", ["title" => "Article – Vitor Figueiredo"]);
  }
}
