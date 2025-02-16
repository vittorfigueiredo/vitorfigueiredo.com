<?php $this->layout("master", ["title" => $title]) ?>

<style>
  #links-section a {
    line-height: 2.2em;
    height: 3em;
    align-items: center;
  }
</style>

<div class="d-flex flex-column justify-content-center mt-4">
  <div id="about-section" class="d-flex flex-column gap-3">
    <img class="rounded-circle mx-auto img-responsive" src="assets/img/profile.webp" alt="profile picture" height="125px" width="125px">
    <h2 class="text-center">Vitor Figueiredo</h2>
  </div>

  <div id="links-section" class="d-flex flex-column gap-3 mt-4">
    <a class="btn btn-secondary text-decoration-none" href="https://www.instagram.com/vittorfigueiredo"><i class="bi bi-instagram"></i> Instagram</a>
    <a class="btn btn-secondary text-decoration-none" href="https://www.linkedin.com/in/vittorfigueiredo"><i class="bi bi-linkedin"></i> Linkedin</a>
    <a class="btn btn-secondary text-decoration-none" href="https://github.com/vittorfigueiredo"><i class="bi bi-github"></i> GitHub</a>
  </div>

  <div id="spotify-playlist" class="mt-4">
    <h2 class="text-center mb-4 fs-3">Minha Playlist 🤘</h2>
    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/4i9BN9JErxaKZAPZmri873?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  </div>
</div>