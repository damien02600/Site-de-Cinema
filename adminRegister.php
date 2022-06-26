<?php
session_start();
require_once 'models/database.php';
require_once 'models/adminModel.php';
require_once 'controllers/add-adminController.php';
require_once 'includes/header.php';
require_once 'config.php';
?>

<div class="container">

<form method="POST" action="">

<div class="form-outline mb-3">
<input name="username" class="form-control <?= !isset($formErrors['username']) ?: 'is-invalid' ?>" id="username" value="<?= @$_POST['username'] ?>" type="text" placeholder="Votre pseudo" />
        <small class="invalid-feedback">
            <p><?= @$formErrors['username'] ?></p>
            <p><?= INSTRUCTIONS_USERNAME ?></p>
        </small>
        </div>

        <div class="form-outline mb-3">
            <input name="password" class="form-control <?= !isset($formErrors['password']) ?: 'is-invalid' ?>" id="password" value="<?= @$_POST['password'] ?>" type="password" placeholder="Votre mot de passe" />
            <small class="invalid-feedback"><?= @$formErrors['password'] ?></small>
        </div>

        <div class="form-outline mb-3">
            <input name="confirmPassword" class="form-control  <?= !isset($formErrors['confirmPassword']) ?: 'is-invalid' ?>" id="confirmPassword" value="<?= @$_POST['confirmPassword'] ?>" type="password" placeholder="La confirmation de votre mot de passe" />
            <small class="invalid-feedback"><?= @$formErrors['confirmPassword'] ?></small>
        </div>
        <input type="submit" class="btn btn-success" name="formInscription" value="Envoyer" />
        </form>
        </div>
<?php require_once 'includes/footer.php'; ?>  