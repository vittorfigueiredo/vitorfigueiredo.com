<?php

declare(strict_types=1);

namespace app\controllers;

use app\helpers\Auth;

class HomeController extends Controller
{
  private readonly Auth $auth;
  private readonly string $apiAccessToken;

  public function __construct()
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }

    $this->auth = new Auth();
    $this->apiAccessToken = $this->auth->handle();
  }

  public function index()
  {
    return $this->view("home", [
      "title" => "Home - Vitor Figueiredo",
      "apiAccessToken" => $this->apiAccessToken
      ]
    );
  }
}
