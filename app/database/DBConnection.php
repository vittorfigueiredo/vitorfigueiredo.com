<?php

namespace app\database;

class DBConnection extends \PDO
{
  public function __construct()
  {
    try {
      parent::__construct($_ENV["DATABASE_DSN"], $_ENV["DATABASE_USERNAME"], $_ENV["DATABASE_PASSWORD"]);
      $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $this->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);

    } catch (\Throwable $th) {
      echo $th->getMessage();
    }
  }
}
