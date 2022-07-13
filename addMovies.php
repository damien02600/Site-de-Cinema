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
require_once 'controllers/addMoviesController.php';
require_once 'includes/header.php';
?>

<div class="container w-50">
  <div class="text-center pb-4">
    <h1 class="mb-1 pt-4">Ajoutez un film</h1>
  </div>
  <form method="POST" action="">

    <div class="form-floating mb-3">
      <input name="title_vo" class="form-control <?= !isset($formErrors['title_vo']) ?: 'is-invalid' ?>" id="title_vo" value="<?= @$_POST['title_vo'] ?>" type="text" placeholder="Titre en VO" />
      <label for="title_vo" class="form-label">Titre en VO :</label>
      <small class="invalid-feedback">
                <span><?= @$formErrors['title_vo'] ?></span>
            </small>
    </div>

    <div class="form-floating mb-3">
      <input name="title_vf" class="form-control <?= !isset($formErrors['title_vf']) ?: 'is-invalid' ?>" id="title_vf" value="<?= @$_POST['title_vf'] ?>" type="text" placeholder="Titre en VF" />
      <label for="title_vf" class="form-label">Titre en VF :</label>
      <small class="invalid-feedback">
                <span><?= @$formErrors['title_vf'] ?></span>
            </small>
    </div>

    <div class="mb-3">
      <textarea class="form-control <?= !isset($formErrors['releaseDate']) ?: 'is-invalid' ?>" name="synopsis" id="synopsis" placeholder="Le synopsis"><?=@$_POST['synopsis'] ?></textarea>
      <small class="invalid-feedback">
                <span><?= @$formErrors['synopsis'] ?></span>
            </small>
      <label for="synopsis"></label>
    </div>

    <div class="mb-3">
      <input name="releaseDate" class="form-control <?= !isset($formErrors['releaseDate']) ?: 'is-invalid' ?>" id="releaseDate" value="<?= @$_POST['releaseDate'] ?>" type="date" placeholder="Votre date" />
            <small class="invalid-feedback">
                <span><?= @$formErrors['releaseDate'] ?></span>
            </small>
    </div>

    <div class="mb-3">
      <input name="duration" class="form-control <?= !isset($formErrors['duration']) ?: 'is-invalid' ?>" id="duration" value="<?= @$_POST['duration'] ?>" type="time" placeholder="Duration" />
      <small class="invalid-feedback">
                <span><?= @$formErrors['duration'] ?></span>
            </small>
    </div>

    <div class="mb-3">
      <input class="form-control <?= !isset($formErrors['upload_file']) ?: 'is-invalid' ?>" type="file" id="upload_file" value="<?= @$_POST['upload_file'] ?>" name="upload_file">
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
          <option <?= !empty($_POST['genre']) && $_POST['genre'] == $genreDetails->id ? 'selected' : '' ?> value="<?= $genreDetails->id ?>"><?= $genreDetails->name ?></option>
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
          <option <?= !empty($_POST['language']) && $_POST['language'] == $languageDetails->id ? 'selected' : '' ?> value="<?= $languageDetails->id ?>"><?= $languageDetails->name ?></option>
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
          <option <?= !empty($_POST['reference']) && $_POST['reference'] == $referenceDetails->id ? 'selected' : '' ?> value="<?= $referenceDetails->id ?>"><?= $referenceDetails->name ?></option>
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
          <option <?= !empty($_POST['nationality']) && $_POST['nationality'] == $nationalityDetails->id ? 'selected' : '' ?> value="<?= $nationalityDetails->id ?>"><?= $nationalityDetails->name ?></option>
        <?php } ?>
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
          <option <?= !empty($_POST['directors']) && $_POST['directors'] == $directorsDetails->id ? 'selected' : '' ?> value="<?= $directorsDetails->id ?>"><?= $directorsDetails->name ?></option>
        <?php } ?>
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