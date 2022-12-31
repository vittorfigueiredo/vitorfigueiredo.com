<?php

declare(strict_types=1);

namespace app\controllers;

class HomeController extends Controller
{
  public function index()
  {
    $this->view("home", ["title" => "Home – Vitor Figueiredo"]);
  }
}
