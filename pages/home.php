<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Vitor Figueiredo - Web Developer</title>
</head>

<body>
  <header>
    <nav class="container navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link home" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link articles" href="#">Artigos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link music" href="#">Musica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link code" href="#">Code</a>
            </li>
            <li class="nav-item">
              <p class="nav-link" onclick="scrollDown()">Contato</p>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container">
    <div class="profile-section">
      <div class="image">
        <img src="../public/imgs/profile.jpg" alt="profile">
      </div>
      <div class="name-and-description">
        <h1>Ola, Eu sou o Vitor</h1>
        <h4>Web Developer e amante de boas musicas.</h4>
      </div>
    </div>

    <div class="about-section">
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga ab quaerat, minima voluptatem, nam, vel quod aspernatur veniam rerum modi quia! Autem nesciunt architecto exercitationem incidunt repellat. Inventore, placeat incidunt.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia eos nulla accusamus explicabo, ullam dicta necessitatibus deserunt cumque, dolor tempora eveniet, iure natus maxime iste totam in ab unde consequuntur! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim veniam cum tenetur harum quaerat sit ea. Porro, saepe cum quas quasi sapiente rem! Ullam magnam iusto dignissimos sint optio earum.
      </p>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, minus molestiae iste placeat ad dolores id, alias doloremque inventore velit officia quod earum tempora, quaerat totam quos vitae aliquam cumque.
      </p>
    </div>

    <div class="latest-articles">
      <div class="title">
        <h1>Ultimos Artigos</h1>
        <button>All Aticles</button>
      </div>
      <div class="links">
        <ul>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
        </ul>
      </div>
    </div>

    <div class="popular-articles">
      <div class="title">
        <h1>Artigos Populares</h1>
      </div>
      <div class="links">
        <ul>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
        </ul>
      </div>
    </div>
  </main>

  <footer class="container">
    <div id="copyright" class="d-lg-flex justify-content-center">
      <p>Developed by <a href="https://github.com/vittorfigueiredo" target="_blank">Vitor Figueiredo</a></p>
    </div>
    <div id="social-networks" class="d-lg-flex justify-content-center">
      <div>
        <a href="https://instagram.com/vittorfigueiredo" target="_blank"><img src="/public/imgs/instagram.svg" alt="instagram"></a>
      </div>
      <div>
        <a href="https://linkedin.com/in/vittorfigueiredo" target="_blank"><img src="/public/imgs/linkedin.svg" alt="linkedin"></a>
      </div>
      <div>
        <a href="https://github.com/vittorfigueiredo" target="_blank"><img src="/public/imgs/github.svg" alt="github"></a>
      </div>
      <div>
        <a href="https://twitter.com/ovitorfs" target="_blank"><img src="/public/imgs/twitter.svg" alt="twitter"></a>
      </div>
    </div>
    <div id="up-arrow">
      <img src="/public/imgs/chevron-up.svg" alt="up" onclick="scrollUp()">
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="/public/js/main.js"></script>
</body>

</html>
