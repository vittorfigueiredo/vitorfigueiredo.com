<?php

declare(strict_types=1);

namespace app\controllers;

class ContactController extends Controller
{
  public function index()
  {
    return $this->view("contact", ["title" => "Contato - Vitor Figueiredo"]
    );
  }
}
