<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateApiAccessTokensTable extends AbstractMigration
{
  public function change(): void
  {
    $table = $this->table("api_access_tokens");

    $table
      ->addColumn("token", "string", ["null" => false])
      ->addColumn("status", "enum", ["values" => ["active", "expired"], "null" => false, "default" => "active"])
      ->addColumn("expires_in", "timestamp", ["null" => true])
      ->addColumn("createdAt", "timestamp", ["default" => "CURRENT_TIMESTAMP"])
      ->addColumn("updatedAt", "timestamp", ["update" => "CURRENT_TIMESTAMP", "default" => "CURRENT_TIMESTAMP"])
      ->addIndex(["token"], ["unique" => true])
      ->create();
  }
}
