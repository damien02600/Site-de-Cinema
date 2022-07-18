<?php
session_start();
require_once 'models/database.php';
require_once 'models/userModel.php';
require_once 'models/genderModel.php';
require_once 'config.php';
require_once 'controllers/add-userController.php';
require_once 'includes/header.php';
?>
<section class="vh-100" style="background-color: #FCF6F5;">
    <div class="container w-50 card shadow p-3 mb-5 bg-body rounded" style="border-radius: 25px;">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #B91625;">Sign up</p>

        <!-- $_POST est une super variable globale PHP qui est utilisée pour collecter des données de formulaire après avoir soumis 
        un formulaire HTML avec method="post". $_POST est également largement utilisé pour passer des variables. -->
        <form method="POST" action="" class=" mx-md-4">
<!-- Dans ma class je lui que si la variable $formError de l'input lastname n'est pas définie alors le style is-invalid,
 qui est une pseudo class CSS s'activera -->
 <!-- Ensuite dans la value je stock dans la super variable globale $_POST la valeur saisie dans la valeur lastname par l'utilisateur  -->
            <div class="form mb-3 ">
                <input name="lastname" class="form-control  <?= !isset($formErrors['lastname']) ?: 'is-invalid' ?>" id="lastname" value="<?= @$_POST['lastname'] ?>" type="text" placeholder="Votre nom" />
                <small class="invalid-feedback">
                    <span><?= @$formErrors['lastname'] ?></span>
                    <br>
                    <span><?= INSTRUCTIONS_LASTNAME ?></span>
                </small>
            </div>


            <div class="form-outline mb-3">
                <input name="firstname" class="form-control  <?= !isset($formErrors['firstname']) ?: 'is-invalid' ?>" id="firstname" value="<?= @$_POST['firstname'] ?>" type="text" placeholder="Votre Prénom" />
                <small class="invalid-feedback">
                    <span><?= @$formErrors['firstname'] ?></span>
                    <br>
                    <span><?= INSTRUCTIONS_FIRSTNAME ?></span>
                </small>
            </div>


            <div class="<?= !isset($formErrors['gender']) ?: 'has-danger' ?>">
                <select class="form-select  <?= !isset($formErrors['gender']) ?: 'is-invalid' ?>" id="gender" name="gender">
                    <option selected value="">Quelle est votre genre</option>
                    <!-- Je créer une boucle foreach qui ne fonctionne que pour les tableaux et les objets -->
                    <!-- La boucle permet de faire défiler un tableau, genderList est un tableau est genderDetails est la valeur du tableau  -->
                    <?php foreach ($genderList as $genderDetails) { ?>
                        <!-- Si la variable $_POST n'est pas vide et si elle est égale à la valeur de l'id alors j'affiche les option  -->
                        <!-- Dans la value j'affiche les option en cohéreence avec l'id, puis je récupére l'option choisit par l'utilisateur -->
                        <option <?= !empty($_POST['gender']) && $_POST['gender'] == $genderDetails->id ? 'selected' : '' ?> value="<?= $genderDetails->id ?>"><?= $genderDetails->name ?></option>
                    <?php } ?>
                </select>
                <label for="gender"></label>
                <small class="invalid-feedback">
                    <p><?= @$formErrors['gender'] ?></p>
                </small>
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
</section>

<!-- <?php require_once 'includes/footer.php'; ?> -->