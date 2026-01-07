<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modifier le Profil - BuyMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    body {
      background: #0a0a0a;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
    }
    .navbar {
      background: rgba(10,10,10,0.95) !important;
    }
    .navbar-brand {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 2.2rem;
      color: #00ff9d !important;
    }
    .card {
      background: #161616;
      border-radius: 18px;
    }
    #profile-preview {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #00ff9d;
    }
    .btn-create {
      background: #00ff9d;
      color: #000;
      font-weight: 600;
    }
    .btn-create:hover {
      background: #00cc7a;
      color: #000;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">BuyMatch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container" style="padding-top: 120px; max-width: 700px;">
  <h1 class="text-center mb-5" style="font-family: 'Bebas Neue', sans-serif; font-size: 3.5rem; color: #00ff9d;"><?= $_SESSION['email'] ?></h1>

  <div class="card p-4 p-md-5">
    <div class="text-center mb-4">
      <img src="<?=   $_SESSION['pfp'] ?>"via.placeholder.com/150" alt="pfp" id="profile-preview">
    </div>

    <form action="../auth/modifier.php" method="POST">
      <div class="mb-4">
        <label class="form-label fw-bold">pfp</label>
        <input type="url" class="form-control form-control-lg" name="profile_url" value="<?= $_SESSION['pfp'] ?>">

      </div>
      <div class="mb-4">
        <label class="form-label fw-bold">Prénom</label>
        <input type="text" class="form-control form-control-lg" name="prenom" value="<?=  $_SESSION['prenom'] ?>" placeholder="">
      </div>

      <div class="mb-4">
        <label class="form-label fw-bold">Nom</label>
        <input type="text" class="form-control form-control-lg" name="nom"  value="<?= $_SESSION['nom'] ?>">
      </div>

      <button type="submit" class="btn btn-create btn-lg w-100">Save</button>
      <a href="../auth/logout.php"  class="bg-danger btn btn-lg w-100">Disconnecter</a>
    </form>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 

?>