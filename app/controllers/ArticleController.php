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

  public function index()
  {
    $this->view("article", ["title" => "Article – Vitor Figueiredo"]);
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
}
