<?php
session_start();
require_once 'models/database.php';
require_once 'models/userModel.php';
require_once 'controllers/loginController.php';
require_once 'includes/header.php';
?>

<div class="container">

<p>Ceci est le formulaire de connexion</p>
<form method="POST" action="">

<div class="form-floating mb-3">
        <input name="username" class="form-control  <?= !isset($formErrors['username']) ?: 'is-invalid' ?>" id="username" value="<?= @$_POST['username'] ?>" type="text" placeholder="Votre pseudo"/>
        <label for="username" class="form-label">Votre pseudo :</label>
        <small class="invalid-feedback"><?= @$formErrors['username'] ?></small>
    </div>

    <div class="form-floating mb-3">
        <input name="password" class="form-control <?= !isset($formErrors['password']) ?: 'is-invalid' ?>" id="password"  value="<?= @$_POST['password'] ?>" type="password" placeholder="Votre mot de passe" />
        <label for="password">Votre mot de passe</label>
        <small class="invalid-feedback"><?= @$formErrors['password'] ?></small>
    </div>


<a href="#">Mot de passe oublié</a>
<a href="./add-user.php">Créer un compte</a>
    <input type="submit" class="btn btn-success" value="Envoyer" />

</div>