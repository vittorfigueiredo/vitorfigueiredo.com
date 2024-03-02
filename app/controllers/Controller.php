<?php

declare(strict_types=1);

namespace app\controllers;

use League\Plates\Engine;

abstract class controller
{
  protected static function view(string $view, array $data = []): void
  {
    $viewPath = dirname(__FILE__, 2) . "/views";

    if (!file_exists($viewPath . DIRECTORY_SEPARATOR . $view . ".php")) {
      throw new \Exception("The view {$view} not exists!");
    }

    $templates = new Engine($viewPath);
    echo $templates->render($view, $data);
  }
}
