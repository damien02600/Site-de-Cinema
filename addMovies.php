<?php
session_start();
require_once 'models/database.php';
require_once 'models/addMoviesModel.php';
require_once 'config.php';
require_once 'controllers/addMoviesController.php';
require_once 'includes/header.php';
?>

<div class="container w-50">
  <div class="text-center pb-4">
    <h1 class="mb-1 pt-4">Ajoutez un film</h1>
  </div>
  <form method="POST" action="">

    <div class="form-floating mb-3">
      <input name="titleVo" class="form-control" id="titleVo" value="" type="text" placeholder="Titre en VO" />
      <label for="titleVo" class="form-label">Titre en VO :</label>
    </div>

    <div class="form-floating mb-3">
      <input name="titleVf" class="form-control" id="titleVf" value="" type="text" placeholder="Titre en VF" />
      <label for="titleVf" class="form-label">Titre en VF :</label>
    </div>

    <div class="mb-3">
      <textarea class="form-control" name="synopsis" id="synopsis" placeholder="Le synopsis"></textarea>
      <label for="synopsis"></label>
    </div>

    <div class="mb-3">
      <input name="releaseDate" class="form-control" id="releaseDate" value="" type="date" placeholder="Votre date" />
    </div>

    <div class="mb-3">
      <input name="duration" class="form-control" id="duration" value="" type="time" placeholder="Duration" />
    </div>

    <div class="mb-3">
      <input class="form-control" type="file" id="picture" name="upload_file">
    </div>

    <div class="mb-3">
      <select class="form-select" aria-label="genre">
        <option selected>Genre</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>

    <div class="mb-3">
      <select class="form-select" aria-label="language">
        <option selected>language</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>

    <div class="mb-3">
      <select class="form-select" aria-label="reference">
        <option selected>reference</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>

    <div class="mb-3">
      <select class="form-select" aria-label="nationality">
        <option selected>nationality</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>

    <div class="mb-3">
      <select class="form-select" aria-label="directors">
        <option selected>directors</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>

    <input type="submit" class="btn btn-success" value="Envoyer" />
  </form>

</div>

<?php require_once 'includes/footer.php'; ?>