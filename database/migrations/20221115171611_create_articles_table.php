<?php
declare(strict_types=1);

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

final class CreateArticlesTable extends AbstractMigration
{
  public function change()
  {
    $table = $this->table("posts");
    $table
      ->addColumn("title", "string", ["null" => false])
      ->addColumn("content", "text", ["null" => false, "limit" => MysqlAdapter::TEXT_LONG])
      ->addColumn("created_at", "timestamp", ["default" => "CURRENT_TIMESTAMP"])
      ->addColumn("updated_at", "timestamp", ["default" => "CURRENT_TIMESTAMP"])
      ->create();
  }
}
