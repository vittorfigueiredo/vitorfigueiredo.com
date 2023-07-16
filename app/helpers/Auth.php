<?php

declare(strict_types=1);

namespace app\helpers;

use app\database\DBConnection;

class Auth
{
  private DBConnection $connection;

  public function __construct()
  {
    session_start();

    $this->connection = new DBConnection();
  }

  public function handle(): string
  {
    try {
      $getApiAccessTokenSaved = $_SESSION["API_ACCESS_TOKEN"];

      if (empty($getApiAccessTokenSaved)) {
        $apiAccessToken = bin2hex(random_bytes(64));

        $_SESSION["API_ACCESS_TOKEN"] = $apiAccessToken;

        $expiresIn = date("Y-m-d H:i:s", strtotime('+6 hours'));

        $query = "INSERT INTO api_access_tokens SET token = ?, expires_in = '$expiresIn'";
        $statement = $this->connection->prepare($query);
        $statement->execute([$apiAccessToken]);

        return $apiAccessToken;
      }

      $query = "SELECT * FROM api_access_tokens WHERE token = ? AND status = 'active'";
      $statement = $this->connection->prepare($query);
      $statement->execute([$getApiAccessTokenSaved]);
      $apiAccessToken = $statement->fetchAll(DBConnection::FETCH_ASSOC)[0];

      if (date("Y-m-d H:i:s") > $apiAccessToken["expires_in"]) {
        $query = "UPDATE api_access_tokens SET status = 'expired' WHERE token = ?";
        $statement = $this->connection->prepare($query);
        $result = $statement->execute([$apiAccessToken["token"]]);

        if (!$result) {
          throw new \Exception(print_r($statement->errorInfo(), true));
        }

        $apiAccessToken = bin2hex(random_bytes(64));

        $_SESSION["API_ACCESS_TOKEN"] = $apiAccessToken;

        $expiresIn = date("Y-m-d H:i:s", strtotime('+6 hours'));

        $query = "INSERT INTO api_access_tokens SET token = ?, expires_in = '$expiresIn'";
        $statement = $this->connection->prepare($query);
        $statement->execute([$apiAccessToken]);

        return $apiAccessToken;
      }

      return $apiAccessToken["token"];
    } catch (\Exception $exception) {
      echo $exception->getMessage();
    }
  }
}
