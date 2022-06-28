<?php
session_start();
require_once 'models/database.php';


require_once 'includes/header.php';
?>

      <div class="container w-50">
      <div class="text-center pb-4">
<h1 class="mb-1 pt-4">Ajoutez un film</h1>
  </div>
<form method="POST" action="">

    <div class="form-floating mb-3">
        <input name="titleVo" class="form-control  <?= !isset($formErrors['titleVo']) ?: 'is-invalid' ?>" id="titleVo" value="<?= @$_POST['titleVo'] ?>" type="text" placeholder="Titre en VO" />
        <label for="titleVo" class="form-label">Titre en VO :</label>
        <small class="invalid-feedback">
            <p><?= @$formErrors['titleVo'] ?></p>
        </small>
    </div>

    <div class="form-floating mb-3">
        <input name="titleVf" class="form-control  <?= !isset($formErrors['titleVf']) ?: 'is-invalid' ?>" id="titleVf" value="<?= @$_POST['titleVf'] ?>" type="text" placeholder="Titre en VF" />
        <label for="titleVf" class="form-label">Titre en VF :</label>
        <small class="invalid-feedback">
            <p><?= @$formErrors['titleVf'] ?></p>
        </small>
    </div>

    <div class="mb-3">
            <textarea class="form-control <?= !isset($formErrors['synopsis']) ?: 'is-invalid' ?>" name="synopsis" id="synopsis" placeholder="Le synopsis"><?=@$_POST['synopsis'] ?></textarea>
            <label for="synopsis"></label>        
            <small class="invalid-feedback">
            <p><?= @$formErrors['synopsis'] ?></p>
        </small>
      </div>

    <input type="submit" class="btn btn-success" value="Envoyer" />
</form>

    </div>

<?php require_once 'includes/footer.php'; ?>