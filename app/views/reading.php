<?php $this->layout("master", ["title" => $title, "currentlyReading" => $currentlyReading]) ?>

<div class="d-flex justify-content-center mt-3">
  <h1 class="d-flex align-items-center fw-bolder me-2">Leituras</h1>
</div>
<div class="g-4 mt-4">
  <h2 class="mb-3">Lendo</h2>
  <p class="mb-4 text-dark">Aqui você encontra os livros que estou lendo atualmente. Estes dados vem do <a href="https://openlibrary.org/people/vitor_figueiredo/books/currently-reading" class="text-light text-decoration-underline" target="_blank">meu perfil Open Library</a>.</p>
  <?php if (count($currentlyReading) > 0) { ?>
    <ul class="list-group">
      <?php foreach ($currentlyReading as $book) { ?>
        <a href="#<?= $book["title"] ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-secondary">
          <div class="flex-column text-white">
            <?= $book["title"] ?>
            <p><small><?= $book["author"] ?></small></p>
          </div>
          <div class="image-parent">
            <img src="<?= $book["cover"] ?>" class="img-fluid" alt="<?= $book["title"] ?>" width="50px" height="auto">
          </div>
        </a>
      <?php } ?>
    </ul>
  <?php } else { ?>
    <p class="text-light text-center font-weight-bold"><strong>Nenhum livro sendo lido recentemente.</strong></p>
  <?php } ?>

  <h2 class="mt-5 mb-3">Lidos</h2>
  <p class="mb-4 text-dark">Aqui tem alguns livros que li recentemente. Você pode encontrar a lista completa no <a href="https://openlibrary.org/people/vitor_figueiredo/books/already-read" class="text-light text-decoration-underline" target="_blank">meu perfil Open Library</a>.</p>
  <?php if (count($readedBooks) > 0) { ?>
    <?php foreach ($readedBooks as $book) { ?>
      <div class="card mb-2 w-100 bg-dark">
        <div class="row g-0">
          <div class="me-3 col-md-1">
            <img class="p-1 m-0" src="<?= $book["cover"] ?>" width="auto" height="100px" alt="<?= $book["title"] ?>">
          </div>
          <div class="col-md-8">
            <div class="card-body pt-2">
              <h5 class="card-title"><?= $book["title"] ?></h5>
              <p class="card-text"><?= $book["author"] ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  <?php } else { ?>
    <p class="text-light text-center my-5"><strong>Nenhum livro lido recentemente.</strong></p>
  <?php } ?>
</div>
