<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateArticlesTable extends AbstractMigration
{
  public function change()
  {
    $table = $this->table("articles");

    $table
      ->addColumn("title", "string", ["null" => false])
      ->addColumn("content", "string", ["null" => false])
      ->addColumn("userId", "integer", ["null" => false, "signed" => false])
      ->addForeignKey("userId", "users", ["id"], ["constraint" => "userIdFK"])
      ->addColumn("createdAt", "timestamp", ["default" => "CURRENT_TIMESTAMP"])
      ->addColumn("updatedAt", "timestamp", ["default" => "CURRENT_TIMESTAMP"])
      ->create();
  }
}
