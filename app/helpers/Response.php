<?php

declare(strict_types=1);

namespace app\helpers;

class Response
{
  public static function json(array $data):int
  {
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');

    echo json_encode($data);

    return http_response_code(200);
  }
}
