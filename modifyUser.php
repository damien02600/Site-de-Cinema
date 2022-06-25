<?php
session_start();
require_once 'models/database.php';
require_once 'models/userModel.php';
require_once 'config.php';
require_once 'controllers/modifyUserController.php';
require_once 'includes/header.php';
?>

<div class="text-center">
<h1 class="mb-1 pt-4">Modifier les information de votre profil</h1>
  </div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-6 col-sm-6 mt-5"> 

<form method="POST" action="">

<div class="form-floating mb-3">
        <input name="lastname" class="form-control <?= !isset($formErrors['lastname']) ?: 'is-invalid' ?>" id="lastname" value="<?= isset($profilDetail)? $profilDetail->lastname : @$_POST['lastname'] ?>" type="text" placeholder="Votre nom" />
        <label for="lastname" class="form-label">Votre nom :</label>
        <small class="invalid-feedback">
            <p><?= @$formErrors['lastname'] ?></p>
            <p><?= INSTRUCTIONS_LASTNAME ?></p>
        </small>
    </div>

<div class="form-floating mb-3">
    <input name="firstname" class="form-control <?= !isset($formErrors['firstname']) ?: 'is-invalid' ?>" id="firstname" value="<?= isset($profilDetail)? $profilDetail->firstname : @$_POST['firstname']  ?>" type="text" placeholder="Votre prénom" />
    <label for="firstname" class="form-label">Votre prénom :</label>
    <small class="invalid-feedback">
            <p><?= @$formErrors['firstname'] ?></p>
            <p><?= INSTRUCTIONS_FIRSTNAME ?></p>
        </small>
</div>

<div class="form-outline mb-3 <?= !isset($formErrors['gender']) ?: 'has-danger' ?>">
                        <select name="gender" class="form-select <?= !isset($formErrors['gender']) ?: 'is-invalid' ?>" id="gender" aria-label="gender">
                            <option value="1">Un homme</option>
                            <option value="2">Une femme</option>
                        </select>
                        <small class="invalid-feedback"><?= @$formErrors['gender'] ?></small>
                    </div>

<div class="form-floating mb-3">
    <input name="username" class="form-control <?= !isset($formErrors['username']) ?: 'is-invalid' ?>" id="username" value="<?= isset($profilDetail)? $profilDetail->username : @$_POST['username']  ?>" type="text" placeholder="Votre pseudo" />
    <label for="username" class="form-label">Votre pseudo :</label>
    <small class="invalid-feedback">
            <p><?= @$formErrors['username'] ?></p>
            <p><?= INSTRUCTIONS_USERNAME ?></p>
        </small>
</div>

<div class="form-floating mb-3">
    <input name="mail" class="form-control <?= !isset($formErrors['mail']) ?: 'is-invalid' ?>" id="mail" value="<?= isset($profilDetail)? $profilDetail->mail : @$_POST['mail']  ?>" type="email" placeholder="Votre Email" />
    <label for="mail">Votre Email</label>
    <small class="invalid-feedback">
            <p><?= @$formErrors['mail'] ?></p>
        </small>
</div>

<div class="form-floating mb-3">
        <input name="password" class="form-control <?= !isset($formErrors['password']) ?: 'is-invalid' ?>" id="password" value="<?= @$_POST['password'] ?>" type="password" placeholder="Votre mot de passe" />
        <label for="password">Votre mot de passe</label>
        <small class="invalid-feedback"><?= @$formErrors['password'] ?></small>
    </div>

    <div class="form-floating mb-3">
    <input name="confirmPassword" class="form-control  <?= !isset($formErrors['confirmPassword']) ?: 'is-invalid' ?>" id="confirmPassword" value="<?= @$_POST['confirmPassword'] ?>" type="password" placeholder="La confirmation de votre mot de passe" />
        <label for="confirmPassword" class="form-label">Confirmation de votre mot de passe</label>
        <small class="invalid-feedback"><?= @$formErrors['confirmPassword'] ?></small>
    </div>
    
<input type="submit" class="btn btn-success" value="Valider" />
</form>
    </div>
  </div>
</div>


<?php require_once 'includes/footer.php'; ?>