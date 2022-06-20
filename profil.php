<?php
session_start();
require_once 'models/database.php';
require_once 'models/userModel.php';
require_once 'controllers/getUserDetailsController.php';
require_once 'includes/header.php';
?>

<div class="card  text-center">
  <div class="card-body">
    <h5 class="card-title">Profil de <?= $profilDetail->username ?></h5>
    <p class="card-text">
    <p> Nom = <?= $profilDetail->lastname ?></p>

<p> Prénom = <?= $profilDetail->firstname ?></p>

<p> mail = <?= $profilDetail->mail ?></p>
    </p>
  </div>
  <div class="card-footer">
<a href="./modifyUser.php?id=<?= $_SESSION['id'] ?>"><input type="submit" class="btn btn-success" value="Editer mon profil" /></a>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
  </div>
</div>

