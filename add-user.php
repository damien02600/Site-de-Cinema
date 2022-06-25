<?php
session_start();
require_once 'models/database.php';
require_once 'models/userModel.php';
require_once 'config.php';
require_once 'controllers/add-userController.php';
require_once 'includes/header.php';
?>

<div class="container form">

            <form method="POST" action="" class="form w-50 mx-auto position-absolute top-50 start-50 translate-middle pt-5">
            <div class="row">
            <div class="col">
                <div class="form mb-3">
                    <input name="lastname" class="form-control  <?= !isset($formErrors['lastname']) ?: 'is-invalid' ?>" id="lastname" value="<?= @$_POST['lastname'] ?>" type="text" placeholder="Votre nom" />
                    <small class="invalid-feedback">
                        <span><?= @$formErrors['lastname'] ?></span>
                        <br>
                        <span><?= INSTRUCTIONS_LASTNAME ?></span>
                    </small>
                </div>
                </div>

                <div class="form-outline mb-3">
                    <input name="firstname" class="form-control  <?= !isset($formErrors['firstname']) ?: 'is-invalid' ?>" id="firstname" value="<?= @$_POST['firstname'] ?>" type="text" placeholder="Votre Prénom" />
                    <small class="invalid-feedback">
                        <span><?= @$formErrors['firstname'] ?></span>
                        <br>
                        <span><?= INSTRUCTIONS_FIRSTNAME ?></span>
                    </small>
                </div>
                </div>

                <div class="form-outline mb-3 <?= !isset($formErrors['gender']) ?: 'has-danger' ?>">
                        <select name="gender" class="form-select <?= !isset($formErrors['gender']) ?: 'is-invalid' ?>" id="gender" aria-label="gender">
                            <option value="1">Un homme</option>
                            <option value="2">Une femme</option>
                        </select>
                        <small class="invalid-feedback"><?= @$formErrors['gender'] ?></small>
                    </div>

                <div class="form-outline mb-3">
                    <input name="mail" class="form-control <?= !isset($formErrors['mail']) ?: 'is-invalid' ?>" id="mail" value="<?= @$_POST['mail'] ?>" type="email" placeholder="Votre Email" />
                    <small class="invalid-feedback">
                        <span><?= @$formErrors['mail'] ?></span>
                    </small>
                </div>

                <div class="form-outline mb-3">
                    <input name="username" class="form-control <?= !isset($formErrors['username']) ?: 'is-invalid' ?>" id="username" value="<?= @$_POST['username'] ?>" type="text" placeholder="Votre pseudo" />
                    <small class="invalid-feedback">
                        <span><?= @$formErrors['username'] ?></span>
                        <br>
                        <span><?= INSTRUCTIONS_USERNAME ?></span>
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


    <!-- <?php require_once 'includes/footer.php'; ?> -->