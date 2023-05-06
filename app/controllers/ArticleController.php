<?php

declare(strict_types=1);

namespace app\controllers;

use app\database\DBConnection;
use app\helpers\Response;
use app\helpers\Uri;

class ArticleController extends Controller
{
  private DBConnection $connection;

  public function __construct()
  {
    $this->connection = new DBConnection();
  }

  public function index()
  {
    $articleName = str_replace("name=", "", Uri::get('query'));

    if (!$articleName) {
      return $this->view("404");
    }

    $article = self::getArticleByName($articleName);

    if (!$article) {
      return $this->view("404");
    }

    return $this->view("article", [
      "title" => $article['title'] . " – Vitor Figueiredo",
      "article" => $article
    ]);
  }

  public function getArticles()
  {
    $query = "SELECT * FROM articles ORDER BY createdAt DESC";
    $statement = $this->connection->prepare($query);
    $statement->execute();
    $articles = $statement->fetchAll(DBConnection::FETCH_ASSOC);

    if (!$articles) {
      return Response::json([]);
    }

    return Response::json($articles);
  }

  private function getArticleByName(string $name)
  {

    $query = "SELECT title, createdAt FROM articles WHERE content = '$name'";
    $statement = $this->connection->prepare($query);
    $statement->execute();
    $article = $statement->fetchAll(DBConnection::FETCH_ASSOC)[0];

    if (!$article) {
      return [];
    }

    return $article;
  }
}
