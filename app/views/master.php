<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VJKR7JG0CN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VJKR7JG0CN');
  </script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Desenvolvedor Web Backend. Apaixonado por tecnologia e em resolver problemas.">
  <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title><?=$this->e($title)?></title>
</head>
<body>
  <header>
    <nav class="container navbar navbar-expand-lg">
      <div class="container-fluid" style="padding: auto;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="padding: 0; margin: 0;">
          <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="font-size: 2rem; color:#C0C0C0;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link home" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item" hidden>
              <a class="nav-link articles" href="/articles">Artigos</a>
            </li>
            <li class="nav-item" hidden>
              <a class="nav-link music" href="/music">Musica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link code" href="https://s3.us-east-2.amazonaws.com/documents.vitorfigueiredo.com/VitorFigueiredo-CV.pdf" target="_blank">Currículo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link contact" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <?=$this->section('content')?>

  <footer class="container">
    <div  id="up-arrow">
      <img width="43px" height="43px" src="/assets/img/chevron-up.svg" alt="up" onclick="scrollUp()">
    </div>
    <div id="contact" class="d-lg-flex justify-content-center">
      <div>
        <a href="https://youtube.com/@vittorfigueiredo" target="_blank"><img width="24px" height="24px" src="/assets/img/youtube.svg" alt="youtube"></a>
      </div>
      <div>
        <a href="https://linkedin.com/in/vittorfigueiredo" target="_blank"><img width="24px" height="24px" src="/assets/img/linkedin.svg" alt="linkedin"></a>
      </div>
      <div>
        <a href="https://github.com/vittorfigueiredo" target="_blank"><img width="24px" height="24px" src="/assets/img/github.svg" alt="github"></a>
      </div>
      <div>
        <a href="https://twitter.com/ovitorfs" target="_blank"><img width="24px" height="24px" src="/assets/img/twitter.svg" alt="twitter"></a>
      </div>
    </div>
    <div id="copyright" class="d-lg-flex justify-content-center">
      <p>Developed by<a href="https://github.com/vittorfigueiredo" target="_blank">Vitor Figueiredo</a></p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="/assets/js/main.js"></script>
</body>
</html>
