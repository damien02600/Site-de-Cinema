<?php
session_start();
require_once 'models/database.php';
require_once 'models/moviesModel.php';
require_once 'models/genreModel.php';
require_once 'models/languageModel.php';
require_once 'models/referenceModel.php';
require_once 'models/nationalityModel.php';
require_once 'models/directorsModel.php';
require_once 'config.php';
require_once 'controllers/modifyMovieController.php';
require_once 'includes/header.php';
?>

<div class="container w-50">
  <div class="text-center pb-4">
    <h1 class="mb-1 pt-4">Modifier un film</h1>
  </div>
  <form method="POST" enctype="multipart/form-data" action="">

    <div class="form-floating mb-3">
      <input name="title_vo" class="form-control <?= !isset($formErrors['title_vo']) ?: 'is-invalid' ?>" id="title_vo" value="<?= isset($movieDetail) ? $movieDetail->title_vo : @$_POST['title_vo'] ?>" type="text" placeholder="Titre en VO" />
      <label for="title_vo" class="form-label">Titre en VO :</label>
      <small class="invalid-feedback">
        <span><?= @$formErrors['title_vo'] ?></span>
      </small>
    </div>

    <div class="form-floating mb-3">
      <input name="title_vf" class="form-control <?= !isset($formErrors['title_vf']) ?: 'is-invalid' ?>" id="title_vf" value="<?= isset($movieDetail) ? $movieDetail->title_vf : @$_POST['title_vf'] ?>" type="text" placeholder="Titre en VF" />
      <label for="title_vf" class="form-label">Titre en VF :</label>
      <small class="invalid-feedback">
        <span><?= @$formErrors['title_vf'] ?></span>
      </small>
    </div>

    <div class="mb-3">
      <textarea class="form-control <?= !isset($formErrors['synopsis']) ?: 'is-invalid' ?>" name="synopsis" id="synopsis" placeholder="Le synopsis"><?= isset($artworkDetail) ? $artworkDetail->synopsis : @$_POST['synopsis'] ?></textarea>
      <small class="invalid-feedback">
        <span><?= @$formErrors['synopsis'] ?></span>
      </small>
      <label for="synopsis"></label>
    </div>

    <div class="mb-3">
      <input name="releaseDate" class="form-control <?= !isset($formErrors['releaseDate']) ?: 'is-invalid' ?>" id="releaseDate" value="<?= isset($movieDetail) ? $movieDetail->releaseDate : @$_POST['releaseDate'] ?>" type="date" placeholder="Votre date" />
      <small class="invalid-feedback">
        <span><?= @$formErrors['releaseDate'] ?></span>
      </small>
    </div>

    <div class="mb-3">
      <input name="duration" class="form-control <?= !isset($formErrors['duration']) ?: 'is-invalid' ?>" id="duration" value="<?= isset($movieDetail) ? $movieDetail->duration : @$_POST['duration'] ?>" type="time" placeholder="Duration" />
      <small class="invalid-feedback">
        <span><?= @$formErrors['duration'] ?></span>
      </small>
    </div>

    <div class="mb-3">
      <input class="form-control <?= !isset($formErrors['upload_file']) ?: 'is-invalid' ?>" type="file" id="upload_file" value="<?= isset($movieDetail) ? $movieDetail->upload_file : @$_POST['upload_file'] ?>" name="upload_file">
      <small class="invalid-feedback">
        <span><?= @$formErrors['upload_file'] ?></span>
      </small>
    </div>

    <div class=" mb-3<?= !isset($formErrors['genre']) ?: 'has-danger' ?>">
      <select class="form-select  <?= !isset($formErrors['genre']) ?: 'is-invalid' ?>" id="genre" name="genre">
        <option selected value="">genre</option>
        <!-- Je créer une boucle foreach qui ne fonctionne que pour les tableaux et les objets -->
        <!-- La boucle permet de faire défiler un tableau  -->
        <?php foreach ($genreList as $genreDetails) { ?>
          <option <?php if (!empty($_GET['id'])) {
                    if ($genreDetails->id == $genreDetails->idForMovie) {
                      echo 'selected';
                    }
                  } ?> value="<?= $genreDetails->id ?>"><?= $genreDetails->name ?></option>
        <?php } ?>
      </select>
      <small class="invalid-feedback">
        <span><?= @$formErrors['genre'] ?></span>
      </small>
      <label for="gender"></label>
    </div>

    <div class=" mb-3<?= !isset($formErrors['language']) ?: 'has-danger' ?>">
      <select class="form-select  <?= !isset($formErrors['language']) ?: 'is-invalid' ?>" id="language" name="language">
        <option selected value="">language</option>
        <!-- Je créer une boucle foreach qui ne fonctionne que pour les tableaux et les objets -->
        <!-- La boucle permet de faire défiler un tableau  -->
        <?php foreach ($languageList as $languageDetails) { ?>
          <option <?php if (!empty($_GET['id'])) {
                    if ($languageDetails->id == $languageDetails->idForMovie) {
                      echo 'selected';
                    }
                  } ?> value="<?= $languageDetails->id ?>"><?= $languageDetails->name ?>
          </option>
        <?php } ?>
      </select>
      <small class="invalid-feedback">
        <span><?= @$formErrors['language'] ?></span>
      </small>
      <label for="language"></label>
    </div>

    <div class=" mb-3<?= !isset($formErrors['reference']) ?: 'has-danger' ?>">
      <select class="form-select  <?= !isset($formErrors['reference']) ?: 'is-invalid' ?>" id="reference" name="reference">
        <option selected value="">reference</option>
        <!-- Je créer une boucle foreach qui ne fonctionne que pour les tableaux et les objets -->
        <!-- La boucle permet de faire défiler un tableau  -->
        <?php foreach ($referenceList as $referenceDetails) { ?>
          <option <?php if (!empty($_GET['id'])) {
                    if ($referenceDetails->id == $referenceDetails->idForMovie) {
                      echo 'selected';
                    }
                  } ?> value="<?= $referenceDetails->id ?>"><?= $referenceDetails->name ?>
          </option>
        <?php } ?>
      </select>
      <small class="invalid-feedback">
        <span><?= @$formErrors['reference'] ?></span>
      </small>
      <label for="reference"></label>
    </div>

    <div class=" mb-3<?= !isset($formErrors['nationality']) ?: 'has-danger' ?>">
      <select class="form-select  <?= !isset($formErrors['nationality']) ?: 'is-invalid' ?>" id="nationality" name="nationality">
        <option selected value="">nationality</option>
        <!-- Je créer une boucle foreach qui ne fonctionne que pour les tableaux et les objets -->
        <!-- La boucle permet de faire défiler un tableau  -->
        <?php foreach ($nationalityList as $nationalityDetails) { ?>
          <option <?php if (!empty($_GET['id'])) {
                    if ($nationalityDetails->id == $nationalityDetails->idForMovie) {
                      echo 'selected';
                    }
                  } ?> value="<?= $nationalityDetails->id ?>"><?= $nationalityDetails->name ?>
          </option> <?php } ?>
      </select>
      <small class="invalid-feedback">
        <span><?= @$formErrors['nationality'] ?></span>
      </small>
      <label for="nationality"></label>
    </div>

    <div class=" mb-3<?= !isset($formErrors['directors']) ?: 'has-danger' ?>">
      <select class="form-select  <?= !isset($formErrors['directors']) ?: 'is-invalid' ?>" id="directors" name="directors">
        <option selected value="">directors</option>
        <!-- Je créer une boucle foreach qui ne fonctionne que pour les tableaux et les objets -->
        <!-- La boucle permet de faire défiler un tableau  -->
        <?php foreach ($directorsList as $directorsDetails) { ?>
          <option <?php if (!empty($_GET['id'])) {
                    if ($directorsDetails->id == $directorsDetails->idForMovie) {
                      echo 'selected';
                    }
                  } ?> value="<?= $directorsDetails->id ?>"><?= $directorsDetails->name ?>
          </option> <?php } ?>
      </select>
      <small class="invalid-feedback">
        <span><?= @$formErrors['nationality'] ?></span>
      </small>
      <label for="directors"></label>
    </div>

    <input type="submit" class="btn btn-success" value="Envoyer" />
  </form>

</div>

<?php require_once 'includes/footer.php'; ?>