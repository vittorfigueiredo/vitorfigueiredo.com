# How to run project

### Requirements:
- PHP 8.*
- Composer

### Follow steps:
1 - Clone repository.

2 - Copy the file .env.sample, rename to .env and change variable values for your mysql database.

3 - Run `composer install` to install dependencies.

4 - Run `vendor/bin/phinx migrate` to create tables in your database.

3 - Run `composer start` to start local server.
