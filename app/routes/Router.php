<?php

declare(strict_types=1);

namespace app\routes;

use app\controllers\NotFoundController;
use app\database\DBConnection;
use app\helpers\Request;
use app\helpers\Uri;

class Router
{
  const CONTROLLER_NAMESPACE = "app\\controllers";

  public static function load(string $controller, string $method)
  {
    try {
      $controllerNamespace = self::CONTROLLER_NAMESPACE."\\".$controller;

      if (!class_exists($controllerNamespace)) {
        throw new \Exception("The controller {$controller} not exists!");
      }

      $controllerInstance = new $controllerNamespace();

      if (!method_exists($controllerInstance, $method)) {
        throw new \Exception("The method {$method} not exists!");
      }

      $controllerInstance->$method((object) $_REQUEST);
    } catch (\Throwable $th) {
      echo $th->getMessage();
    }
  }

  public static function routes(): array
  {
    return [
      "GET" => [
        "/" => fn() => self::load("HomeController", "index"),
        "/article" => fn() => self::load("ArticleController", "index"),
        "/contact" => fn() => self::load("ContactController", "index"),
        "/projects" => fn() => self::load("ProjectController", "index"),
        "/api/article/all" => fn() => self::load("ArticleController", "getArticles"),
        "/api/article/popular" => fn() => self::load("ArticleController", "getPopularArticles"),
      ],
    ];
  }

  public static function execute()
  {
    try {
      $routes = self::routes();
      $request = Request::get();
      $uri = Uri::get("path");
      $notFound = new NotFoundController();
      $dbConection = new DBConnection();

      if (explode("/", $uri)[1] === "api") {
        $query = "SELECT * FROM api_access_tokens WHERE token = ? AND status = 'active'";
        $statement = $dbConection->prepare($query);
        $statement->execute([$_SERVER["HTTP_AUTHORIZATION"]]);
        $apiAccessToken = $statement->fetchAll(DBConnection::FETCH_ASSOC);

        if (empty($apiAccessToken)) {
          return $notFound->index();
        }
      }

      if (!isset($routes[$request])) {
        return $notFound->index();
      }

      $router = $routes[$request][$uri];

      if (!is_callable($router)) {
        return $notFound->index();
      }

      $router();

    } catch (\Throwable $th) {
      echo $th->getMessage();
    }
  }
}
