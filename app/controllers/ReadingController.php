<?php

declare(strict_types=1);

namespace app\controllers;

use GuzzleHttp\Client;

class ReadingController extends Controller
{
  private string $openLibraryApiUrl;
  public Client $httpClient;

  public function __construct()
  {
    $this->openLibraryApiUrl = $_ENV["OPENLIBRARY_URL"];
    $this->httpClient = new Client();
  }

  public function index(): mixed
  {
    $response = $this->httpClient->get("https://{$this->openLibraryApiUrl}/people/vitor_figueiredo/books/currently-reading.json");
    $responseBody = json_decode($response->getBody()->getContents());

    $currentlyReading = [];
    $readedBooks = [];

    foreach ($responseBody->reading_log_entries as $book) {
      array_push($currentlyReading, [
        "title" => $book->work->title,
        "author" => "By {$book->work->author_names[0]}",
        "cover" => self::getBookCover($book->work->cover_id),
      ]);
    }

    return $this->view("reading", [
      "title" => "Leituras – Vitor Figueiredo",
      "currentlyReading" => $currentlyReading,
      "readedBooks" => $readedBooks,
    ]);
  }

  protected function getBookCover($coverId): string
  {
    return "https://covers.openlibrary.org/b/id/{$coverId}-M.jpg";
  }
}
