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
<p> Genre = <?= $profilDetail->gender ?></p>
<p> Mail = <?= $profilDetail->mail ?></p>
<a href="./modifyUser.php?id=<?= $_SESSION['id'] ?>"><input type="submit" class="btn btn-success" value="Editer mon profil" /></a>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
</div>


<!-- Modal pour supression-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer votre compte ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form action="" method="POST">
          <input type="hidden" name="recipient-name" id="recipient-name" value="<?= $_SESSION['id'] ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-danger">Confirmer</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?> 

