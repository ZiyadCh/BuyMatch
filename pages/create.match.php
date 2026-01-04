<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Créer un Match - BuyMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
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
        <li class="nav-item"><a class="nav-link active" href="dashboard.php">Mes Matchs</a></li>
      </ul>
      <div class="">
        <a class="d-flex align-items-center text-decoration-none" >
          <img src="" 
               alt="Profil" class="rounded-circle profile-avatar me-2">
          <span class="text-light d-none d-sm-inline">username</span>
        </a>
        
      </div>
    </div>
  </div>
</nav>

<div class="container" style="padding-top: 120px; max-width: 800px;">
  <h1 class="text-center mb-5" style="font-family: 'Bebas Neue', sans-serif; font-size: 3.5rem; color: var(--primary);">Créer un Nouveau Match</h1>

  <div class="card p-4 p-md-5" style="background: var(--card-bg); border-radius: 18px;">
    <form action="../organizer/create_match.php" method="POST">

      <!-- Équipe 1 -->
      <div class="mb-4">
        <label class="form-label fw-bold">Équipe 1 - Nom</label>
        <input type="text" class="form-control form-control-lg" name="equipe1" placeholder="Ex: Real Madrid" required>
      </div>
      <div class="mb-4">
        <label class="form-label fw-bold">Équipe 1 - Lien logo (URL)</label>
        <input type="url" class="form-control form-control-lg" name="logo_equipe1" placeholder="https://example.com/logo1.png" required>
      </div>

      <!-- Équipe 2 -->
      <div class="mb-4">
        <label class="form-label fw-bold">Équipe 2 - Nom</label>
        <input type="text" class="form-control form-control-lg" name="equipe2" placeholder="Ex: FC Barcelona" required>
      </div>
      <div class="mb-4">
        <label class="form-label fw-bold">Équipe 2 - Lien logo (URL)</label>
        <input type="url" class="form-control form-control-lg" name="logo_equipe2" placeholder="https://example.com/logo2.png" required>
      </div>

      <!-- Bannière -->
      <div class="mb-4">
        <label class="form-label fw-bold">Lien de la bannière du match (URL image)</label>
        <input type="url" class="form-control form-control-lg" name="banner" placeholder="https://example.com/banner.jpg" required>
      </div>

      <!-- Date et heure -->
      <div class="mb-4">
        <label class="form-label fw-bold">Date et heure du match</label>
        <input type="datetime-local" class="form-control form-control-lg" name="date_matche" required>
      </div>

      <!-- Lieu -->
      <div class="mb-4">
        <label class="form-label fw-bold">Lieu (Stade)</label>
        <input type="text" class="form-control form-control-lg" name="location" placeholder="Ex: Santiago Bernabéu" required>
      </div>

      <!-- Capacité -->
      <div class="mb-4">
        <label class="form-label fw-bold">Capacité maximale du stade</label>
        <input type="number" class="form-control form-control-lg" name="nbr_place" min="100" max="2000" value="1000" required>
      </div>

      <button type="submit" class="btn btn-create btn-lg w-100">
        Soumettre la demande de match
      </button>

      <p class="text-center mt-4 text-muted">
        Votre demande sera examinée par l'administrateur avant publication.
      </p>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>