<?php

declare(strict_types=1);

namespace app\controllers;

use app\database\DBConnection;
use app\helpers\Response;

class ArticleController extends Controller
{
  private DBConnection $connection;

  public function __construct()
  {
    $this->connection = new DBConnection();
  }

  public function index(object $request)
  {
    if (!$request->name) {
      return $this->view("404");
    }

    $articleName = htmlspecialchars($request->name, ENT_QUOTES);

    $article = self::getArticleByName($articleName);

    if (!$article) {
      return $this->view("404");
    }

    self::setView($article["id"]);

    return $this->view("article", [
      "title" => $article["title"] . " – Vitor Figueiredo",
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

  public function getPopularArticles()
  {
    $query = "SELECT * FROM articles ORDER BY views DESC LIMIT 5";
    $statement = $this->connection->prepare($query);
    $statement->execute();
    $articles = $statement->fetchAll(DBConnection::FETCH_ASSOC);

    if (!$articles) {
      return Response::json([]);
    }

    return Response::json($articles);
  }

  private function getArticleByName(string $name): array
  {

    $query = "SELECT id, title, createdAt FROM articles WHERE content = '$name'";
    $statement = $this->connection->prepare($query);
    $statement->execute();
    $article = $statement->fetchAll(DBConnection::FETCH_ASSOC)[0];

    if (!$article) {
      return [];
    }

    return $article;
  }

  private function setView(int $articleId): void
  {
    $query = "UPDATE articles SET views = views + 1 WHERE id = ?";
    $statement = $this->connection->prepare($query);
    $statement->execute([$articleId]);

    return;
  }
}
