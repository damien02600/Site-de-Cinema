<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <title>Page d'accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="background-color: #F6F6F6;">
<header>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-2 " style="background-color: #B91625;">
    <div class="text-center">
  <img src="https://www.majestic-compiegne.fr/public/fichiers/logo-site/logo.png" alt="...">
</div>
    </div>
    </div>
    </div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg border-top border-dark shadow " style="background-color: #B91625; color:white">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->

      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-3" >
      <li class="nav-item ">
        <li><a class="nav-link active fw-bold" style="color: white;" aria-current="page" href="home.php">Accueil</a></li>
        </li>
        <li class="nav-item ">
        <li><a class="nav-link active fw-bold" style="color: white;" aria-current="page" href="home.php">Films et événements</a></li>
        </li>
        <li class="nav-item ">
        <li><a class="nav-link active fw-bold" style="color: white;" aria-current="page" href="home.php">Abonnements</a></li>
        </li>
        <li class="nav-item ">
        <li><a class="nav-link active fw-bold" style="color: white;" aria-current="page" href="home.php">Offres et Actus</a></li>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <div class="input-group pe-3">
  <div>
    <input type="search" placeholder="Faite votre recherche" id="form1" class="form-control" />
  </div>
  <button type="button" class="btn ">
    <i class="fas fa-search"></i>
  </button>
</div>


      <?php if (!empty($_SESSION['username'])) { ?> <!--Si l'utilisateur est connecté -->
      <a class="text-reset me-3" href="profil.php">
      <i class="fas fa-solid fa-user"  style="color: white; font-weight:bold"></i>
      </a>
      <?php } ?>

      <?php if (!empty($_SESSION['username'])) { ?> <!--Si l'utilisateur est connecté -->
      <a class="text-reset me-3" href="./controllers/logoutController.php?id=<?= $_SESSION['id'] ?>">
      <i class="fas fa-solid fa-power-off text-danger"></i>
      </a>
      <?php } ?>

        <li class="nav-item">
        <?php if (empty($_SESSION['username'])) { ?> <!--Si l'utilisateur n'est pas connecté -->
          <li><a class="nav-link fw-bold"  style="color: white;"  href="login.php">Connexion</a></li> <!--On affiche Connexion -->
        <?php } ?>
        </li>
    </div>
    <!-- Right elements -->

  </div>
  <!-- Container wrapper -->
</nav>
</header> 