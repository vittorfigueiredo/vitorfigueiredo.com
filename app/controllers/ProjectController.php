<?php

declare(strict_types=1);

namespace app\controllers;

class ProjectController extends Controller
{
  public function index()
  {
    $this->view("projects", ["title" => "Projetos – Vitor Figueiredo"]);
  }
}
