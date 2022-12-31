<?php

declare(strict_types=1);

namespace app\helpers;

class Request
{
  public static function get():string
  {
    return strtoupper($_SERVER["REQUEST_METHOD"]);
  }
}
