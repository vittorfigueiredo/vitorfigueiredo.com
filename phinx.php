<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/app/database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/app/database/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => '',
            'user' => '',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => $_ENV["DEV_DATABASE_HOST"],
            'name' => $_ENV["DEV_DATABASE_NAME"],
            'user' => $_ENV["DEV_DATABASE_USERNAME"],
            'pass' => $_ENV["DEV_DATABASE_PASSWORD"],
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => '',
            'name' => '',
            'user' => '',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
