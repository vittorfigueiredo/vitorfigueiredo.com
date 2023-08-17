<center>

<img class="article-banner" src="https://res.cloudinary.com/practicaldev/image/fetch/s--6DmyD0U9--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/2g6ihw615ljf52zhc4md.png" alt="article image"></img>

</center>

<br>

## Introdução
---

Faaala devs, tudo bem?

Há alguns dias atrás eu estava desenvolvendo um projetinho, coisa básica, apenas para estudo e esse projeto foi criado do zero usando a versão mais recente do PHP.

Sabemos que ao criar um software do zero devemos nos preocupar com muitas coisas importantes e uma delas é o uso de memória.

Hoje vamos falar sobre como podemos implementar o Design Pattern Singleton que irá nos ajudar a evitar o uso de memória denecessáriamente pela nossa aplicação.

Mas, primeiramente, vamos entender o que é e como funciona. Vem comigo!

<br>

<center>

<img src="https://media.tenor.com/TPXMriXwLD4AAAAC/lets-go-the-rock.gif" alt="article image"></img>

</center>

<br>

## O que é?
---

Como mencionado anteriormente, o Singleton é um dos vários Design Patterns que podemos implemetar em uma aplicação. E se você ainda não sabe o que são Design Patterns, podemos resumir como "guias", que não são obrigátorios seguirmos, mas que irão nos ajudar a deixar o nosso código organizado e reutilazável. O Singleton se encaixa perfeitamente no "reutilazável".

Ao criarmos um objeto, em algum momento vamos precisar instânciar este objeto para acessar seus metódos e seguirmos o desenvolvimento. Acontece que quando criamos uma instância de um objeto, essa instância é armazenda na memória e quanto mais intâncias, mais memória será usada. Em uma aplicação grande isso será um problema e nossa aplicação irá consumir mais memória do que deveria e é ai que entra o Singleton.

Implementando o Silngleton verificaremos se já temos alguma instância daquele objeto em memória, se sim, ele apenas retornará a instância existente para reutilizarmos ou caso contrário, será criada uma nova.

Confira a representação abaixo:

<br>

<center>

<img src="https://phpenthusiast.com/theme/assets/images/blog/the-singleton-pattern-explained.png" alt="article image"></img>

</center>

<br>

## Implementação Clássica
---

A implementçaão do singleton é bem simples
, pelo menos no PHP rsrs

Abaixo temos um exemplo clássico de uma classe chamada Singleton que está sendo instânciada 5 vezes, confira:

```php
<?php

class Singleton
{
  public function __construct()
  {
    return;
  }
}

$singleton1 = new Singleton();
$singleton2 = new Singleton();
$singleton3 = new Singleton();
$singleton4 = new Singleton();
$singleton5 = new Singleton();

var_dump($singleton1);
var_dump($singleton2);
var_dump($singleton3);
var_dump($singleton4);
var_dump($singleton5);
```

Ao executarmos o código acima, temos a seguinte saída:

```bash
class Singleton#1 (0) { // Instância número 1
}

class Singleton#2 (0) { // Instância número 2
}

class Singleton#3 (0) { // Instância número 3
}

class Singleton#4 (0) { // Instância número 4
}

class Singleton#5 (0) { // Instância número 5
}
```

Observem que o ```var_dump``` imprimiu o número da instância (#1) e nesse caso foram geradas 5 instâncias do mesmo objeto, o que pode ser evitado.

Vamos refazer o mesmo código, só que dessa vez implementaremos o Singleton.

<br>

## Implementação Singleton
---


```php
<?php

class Singleton
{
  private static $instance; // Passo 1

  private function __construct() // Passo 2
  {
    return;
  }

  private function __clone() // Passo 2
  {

  }

  private function __wakeup() // Passo 2
  {

  }

  public static function getInstance() // Passo 3
  {
    if (self::$instance === null) {
      self::$instance = new self;
    }

    return self::$instance;
  }

}

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
$singleton3 = Singleton::getInstance();
$singleton4 = Singleton::getInstance();
$singleton5 = Singleton::getInstance();

var_dump($singleton1);
var_dump($singleton2);
var_dump($singleton3);
var_dump($singleton4);
var_dump($singleton5);
```

O que foi feito?

Passo 1: Primeiro criamos a propriedade privada e estática chamado $instance; <br>
Passo 2: Privamos os metódo mágicos **__constructor**, **__clone** e **__wakeup** para que a classe não possa ser instânciada normalmente. <br>
Passo 3: Criamos um metódo público chamado getInstance que irá verificar se é preciso criar uma nova instância ou retornar uma existente. <br>

E agora ao executar o novo código... voilà:

```bash
class Singleton#1 (0) { // Instância número 1
}

class Singleton#1 (0) { // Instância número 1
}

class Singleton#1 (0) { // Instância número 1
}

class Singleton#1 (0) { // Instância número 1
}

class Singleton#1 (0) { // Instância número 1
}
```

Temos a mesma instância retornada 5 vezes. Massa né não? Simples e útil.

Em um projeto PHP real, você pode usar na classe de conexão com o banco de dados por exemplo.

E por hoje é só! Espero que tenham tirado proveito deste artigo. SEJAM FELIZES RAPAZIADA, IRRRUU!

<br>

<center>

<img src="https://31.media.tumblr.com/tumblr_m8tbusoi3P1rb2zv2o1_500.gif" alt="article image"></img>

</center>
