<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sélectionner la Catégorie - BuyMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
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
        <li class="nav-item"><a class="nav-link active" href="#">Achat Billet</a></li>
      </ul>
      <div class="dropdown">
        <a class="dropdown-toggle d-flex align-items-center text-decoration-none" data-bs-toggle="dropdown">
          <img src="https://via.placeholder.com/40" alt="Profil" class="rounded-circle profile-avatar me-2">
          <span class="text-light d-none d-sm-inline">username</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="profile.php">Mon Profil</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-danger" href="../auth/logout.php">Déconnexion</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container" style="padding-top: 120px; max-width: 800px;">
  <h1 class="text-center mb-5" style="font-family: 'Bebas Neue', sans-serif; font-size: 3.5rem; color: var(--primary);">Choisir la Catégorie</h1>

  <div class="card p-5" style="background: var(--card-bg); border-radius: 18px;">
    <form action="select_seat.php" method="GET">
      
      <div class="mb-4">
        <label class="form-label fw-bold fs-4">Sélectionnez votre catégorie de billet</label>
        <select class="form-select form-select-lg" name="categorie">
          <option value="standard">Standard</option>
          <option value="vip">VIP</option>
          <option value="premium">Premium</option>
        </select>
      </div>

      <button type="submit" class="btn btn-create btn-lg w-100">
        Continuer vers les places
      </button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>