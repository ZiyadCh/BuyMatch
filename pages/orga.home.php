<?php
session_start();
require_once "../classes/Match.php";
require_once "../classes/Organisateur.php";
$match = new matche(0, 0, 0, 0, 0);
$orga = new organisateur(0, 0, 0, 0, 0,0,0);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Organisateur - BuyMatch</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <style>
    .admin {
      display: none;
    }

    .ach {
      display: none;
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
          <li class="nav-item"><a class="nav-link" href="../index.php">Accueil</a></li>
        </ul>

        <div class="dropdown">
          <a class="d-flex align-items-center text-decoration-none" href="profile.php">
            <img src=""
              alt="Profil" class="rounded-circle profile-avatar me-2">
            <span class="text-light d-none d-sm-inline"><?php echo $_SESSION['role'] ?></span>
          </a>

        </div>
      </div>
    </div>
  </nav>

  <div class="container container-main">
    <div class="text-center mb-5">
      <h1 class="display-5 fw-bold">Espace Organisateur</h1>
      <p>Welcome.</p>
      </div>
     <?php 
     $orga->stats();
      ?> 
    </div>

      <a href="create.match.php" class="btn btn-create btn-lg mt-3">
        <i class="bi bi-plus-circle me-2"></i> Créer un nouveau match
      </a>
    </div>

    <hr class="my-5">

    <h2 class="mb-4">Mes Matchs</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <?php
      $match->afficherMatch();
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>