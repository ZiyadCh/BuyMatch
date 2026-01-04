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

  
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">BuyMatch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="../index.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Mes Matchs</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Statistiques</a></li>
      </ul>

      <div class="dropdown">
        <a class="d-flex align-items-center text-decoration-none" href="profile.php">
          <img src="" 
               alt="Profil" class="rounded-circle profile-avatar me-2">
          <span class="text-light d-none d-sm-inline">username</span>
        </a>
        
      </div>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container container-main">
  <div class="text-center mb-5">
    <h1 class="display-5 fw-bold">Espace Organisateur</h1>
    <p>Welcome.</p>

    <!-- Bouton Créer un Match -->
    <a href="create.match.php" class="btn btn-create btn-lg mt-3">
      <i class="bi bi-plus-circle me-2"></i> Créer un nouveau match
    </a>
  </div>

  <hr class="my-5">

  <h2 class="mb-4">Mes Matchs</h2>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <!-- Exemple de match existant -->
    <div class="col">
      <div class="card match-card h-100">
        <div class="match-banner">
          <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/match-day-real-madrid-vs-barcelona-el-classic-design-template-740574d9dd3dac8024c5132959a38c2c_screen.jpg?ts=1722616259" alt="Match">
        </div>
        <div class="card-body text-center py-4">
          <div class="d-flex align-items-center justify-content-center gap-3 mb-3">
            <div class="text-center">
              <img src="https://www.nicepng.com/png/detail/245-2457966_tap-to-expand-real-madrid-is-logo-download.png" class="team-logo" alt="Real Madrid">
              <p class="mt-2 fw-bold small">Real Madrid</p>
            </div>
            <div class="vs">VS</div>
            <div class="text-center">
              <img src="https://www.nicepng.com/png/detail/139-1398411_free-png-barcelona-logo-png-images-transparent-fc.png" class="team-logo" alt="Barcelona">
              <p class="mt-2 fw-bold small">FC Barcelona</p>
            </div>
          </div>
          <p class="mb-1 fw-semibold">15 Janvier 2026</p>
          <p class="text-muted small mb-3">Santiago Bernabéu, Madrid</p>
          <span class="badge status-pending status-badge">En attente de validation</span>
        </div>
      </div>
    </div>

    <!-- Un autre exemple -->
    <div class="col">
      <div class="card match-card h-100">
        <div class="match-banner">
          <img src="https://i.ytimg.com/vi/tnAiNn8lkws/maxresdefault.jpg" alt="Match">
        </div>
        <div class="card-body text-center py-4">
          <div class="d-flex align-items-center justify-content-center gap-3 mb-3">
            <div class="text-center">
              <img src="https://www.pngarts.com/files/2/Manchester-United-PNG-Transparent-Image.png" class="team-logo" alt="Man United">
              <p class="mt-2 fw-bold small">Man United</p>
            </div>
            <div class="vs">VS</div>
            <div class="text-center">
              <img src="https://www.clipartmax.com/png/middle/197-1977848_liverpool-logo-vector-liverpool-fc.png" class="team-logo" alt="Liverpool">
              <p class="mt-2 fw-bold small">Liverpool</p>
            </div>
          </div>
          <p class="mb-1 fw-semibold">8 Mars 2026</p>
          <p class="text-muted small mb-3">Old Trafford, Manchester</p>
          <span class="badge status-approved status-badge">Validé</span>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>