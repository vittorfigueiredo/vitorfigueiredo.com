<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VJKR7JG0CN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-VJKR7JG0CN');
  </script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Desenvolvedor Web Backend. Apaixonado por tecnologia e em resolver problemas.">
  <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" href="/assets/css/cookies.css">

  <title><?= $this->e($title) ?></title>

</head>

<body class="container bg-light text-dark">
  <header class="d-flex justify-content-between">
    <div>
      <nav class="container navbar navbar-expand-lg bg-light text-dark">
        <div class="container-fluid" style="padding: auto;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="padding: 0; margin: 0;">
            <span role="button" aria-label="main menu"><i class="bi bi-list text-dark" style="font-size: 2.5rem;"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link home text-dark" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link projects text-dark" href="/projects">Projetos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link reading text-dark" href="/reading">Leituras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link contact text-dark" href="/contact">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="form-check form-switch ms-auto mt-3 me-3">
      <label class="form-check-label ms-3" for="lightSwitch">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
          <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </svg>
      </label>
      <input class="form-check-input" type="checkbox" id="lightSwitch" />
    </div>
  </header>

  <main class="container">
    <?= $this->section('content') ?>
  </main>

  <footer class="container">
    <div id="up-arrow">
      <i class="bi bi-arrow-up text-center" onclick="scrollUp()"></i>
    </div>
    <div id="contact" class="d-lg-flex justify-content-center">
      <div>
        <a href="https://www.instagram.com/vittorfigueiredo" aria-label="Link to my instagram"><i class="bi bi-instagram text-secondary"></i></a>
      </div>
      <div>
        <a href="https://linkedin.com/in/vittorfigueiredo" aria-label="Link to my linkedin"><i class="bi bi-linkedin text-secondary"></i></a>
      </div>
      <div>
        <a href="https://github.com/vittorfigueiredo" aria-label="Link to my github"><i class="bi bi-github text-secondary"></i></a>
      </div>
    </div>
    <div id="copyright" class="d-lg-flex justify-content-center">
      <p>Developed by <a class="text-secondary" href="/" aria-label="Go to home page" target="_blank">Vitor Figueiredo</a></p>
    </div>
    <div id="open-source">
      <p class="text-light"><a class="text-secondary" href="https://github.com/vittorfigueiredo/vitorfigueiredo.com" aria-label="Go to open source repository">This website is open-source</a> / <a href="https://vitorfigueiredo.statuspage.io/" class="text-secondary" aria-label="Go to open status page" target="_blank">Status</a></p>
    </div>
    <div id="badges" class="d-flex justify-content-left align-items-center gap-3">
      <a href="https://www.digitalocean.com/?refcode=4fff19c6fe60&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge" target="_blank"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" width="80px" height="auto" alt="DigitalOcean Referral Badge" /></a>
      <a href="https://www.cloudflare.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Cloudflare_Logo.svg/2560px-Cloudflare_Logo.svg.png" width="80px" height="auto" alt="Cloudflare Badge" /></a>
      <a href="https://www.sslshopper.com/ssl-checker.html#hostname=vitorfigueiredo.com" target="_blank"><img src="https://golden.vteximg.com.br/arquivos/selo_letsencrypt.png?v=637352825175030000" width="80px" height="auto" alt="Letsencrypt Badge" /></a>
    </div>
  </footer>

  <!-- Cookie Banner -->
  <div id="cb-cookie-banner" class="alert text-center text-light mb-0 bg-dark" role="alert">
    🍪 Este site usa cookies para garantir que você obtenha a melhor experiência em nosso site.
    <a class="text-secondary" href="https://www.cookiesandyou.com/" aria-label="Read more cookies" target="blank">Saiba mais</a>
    <button type="button" class="btn btn-light btn-sm ms-3" onclick="window.cb_hideCookieBanner()">
      Aceito
    </button>
  </div>
  <!-- End of Cookie Banner -->

  <script src="/assets/js/global.js"></script>
  <script src="/assets/js/cookies.js"></script>
  <script src="/assets/js/switch.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>
