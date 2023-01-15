<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
{
  public function change()
  {
    $table = $this->table("users");

    $table
      ->addColumn("name", "string", ["null" => false])
      ->addColumn("createdAt", "timestamp", ["default" => "CURRENT_TIMESTAMP"])
      ->addColumn("updatedAt", "timestamp", ["default" => "CURRENT_TIMESTAMP"])
      ->create();
  }
}
