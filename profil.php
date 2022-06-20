<?php
session_start();
require_once 'models/database.php';
require_once 'models/userModel.php';
require_once 'controllers/getUserDetailsController.php';
require_once 'includes/header.php';
?>

<div class="text-center">
<p>Profil de <?= $profilDetail->username ?></p>
<p> Nom = <?= $profilDetail->lastname ?></p>
<p> Prénom = <?= $profilDetail->firstname ?></p>
<p> Mail = <?= $profilDetail->mail ?></p>
<a href="./modifyUser.php?id=<?= $_SESSION['id'] ?>"><input type="submit" class="btn btn-success" value="Editer mon profil" /></a>
</div>

