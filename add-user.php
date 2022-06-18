<?php
session_start();
require_once 'models/database.php';
require_once 'models/userModel.php';
require_once 'controllers/add-userController.php';
require_once 'includes/header.php';
?>

<div class="container">

<p>Ceci est le formulaire d'Inscription</p>
<form method="POST" action="">

    <div class="form-floating mb-3">
        <input name="lastname" class="form-control" id="lastname" value="<?= @$_POST['lastname'] ?>" type="text" placeholder="Votre nom"/>
        <label for="lastname" class="form-label">Votre nom :</label>
    </div>

    <div class="form-floating mb-3">
        <input name="firstname" class="form-control" id="firstname" value="<?= @$_POST['firstname'] ?>" type="text" placeholder="Votre prénom" />
        <label for="firstname" class="form-label">Votre prénom :</label>
    </div>

    <div class="form-floating mb-3">
        <input name="mail" class="form-control" id="mail" value="<?= @$_POST['mail'] ?>" type="email" placeholder="Votre Email"  />
        <label for="mail">Votre Email</label>
    </div>

    <div class="form-floating mb-3">
        <input name="username" class="form-control" id="username" value="<?= @$_POST['username'] ?>" type="text" placeholder="Votre pseudo" />
        <label for="username" class="form-label">Votre pseudo :</label>
    </div>

    <div class="form-floating mb-3">
        <input name="password" class="form-control" id="password" <?= @$_POST['password'] ?> type="password" placeholder="Votre mot de passe" />
        <label for="password">Votre mot de passe</label>
    </div>

    <div class="form-floating mb-3">
        <input name="confirmPassword" class="form-control" id="confirmPassword" value="<?= @$_POST['confirmPassword'] ?>" type="password" placeholder="La confirmation de votre mot de passe"/>
        <label for="confirmPassword" class="form-label">Confirmation de votre mot de passe</label>
    </div>
    <input type="submit" class="btn btn-success" name="formInscription" value="Envoyer" />
</form>
</div>

<?php require_once 'includes/footer.php'; ?> 