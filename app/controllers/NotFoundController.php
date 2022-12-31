<?php

declare(strict_types=1);

namespace app\controllers;

class NotFoundController extends Controller
{
  public function index()
  {
    $this->view("404", ["title" => "Página não encontrada (404) – Vitor Figueiredo"]);
  }
}
