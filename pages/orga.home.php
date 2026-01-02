<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Organisateur - BuyMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    :root { --primary: #00ff9d; --dark: #0a0a0a; --card-bg: #161616; }
    body { background: var(--dark); color: #fff; font-family: 'Poppins', sans-serif; min-height: 100vh; }
    .sidebar { background: #111; min-height: 100vh; padding: 2rem 0; }
    .sidebar .nav-link { color: #aaa; font-weight: 500; padding: 0.8rem 2rem; }
    .sidebar .nav-link:hover, .sidebar .nav-link.active { color: var(--primary); background: rgba(0,255,157,0.1); }
    .dashboard-content { padding: 3rem; }
    h1, h2 { font-family: 'Bebas Neue', sans-serif; color: var(--primary); }
    .card { background: var(--card-bg); border-radius: 16px; }
    .btn-primary { background: var(--primary); border: none; color: #000; font-weight: 600; }
    .btn-primary:hover { background: #00cc7a; }
    .team-logo-preview { width: 80px; height: 80px; object-fit: contain; background: #fff; padding: 8px; border-radius: 50%; }
    .category-row { border-bottom: 1px solid #333; padding-bottom: 1rem; margin-bottom: 1rem; }
  </style>
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'organisateur') {
    header("Location: ../login.php");
    exit();
}
$user = $_SESSION['user'];
?>

<div class="d-flex">
  <!-- Sidebar -->
  <div class="sidebar col-md-3 col-lg-2">
    <div class="text-center mb-5">
      <h3 class="text-primary">BuyMatch</h3>
      <img src="<?= htmlspecialchars($user['profile_url']) ?>" alt="Profil" class="rounded-circle" width="100">
      <p class="mt-2"><?= htmlspecialchars($user['prenom'] . ' ' . $user['nom']) ?></p>
      <small class="text-muted">Organisateur</small>
    </div>
    <ul class="nav flex-column">
      <li class="nav-item"><a href="dashboard.php" class="nav-link active">Tableau de bord</a></li>
      <li class="nav-item"><a href="mes_evenements.php" class="nav-link">Mes événements</a></li>
      <li class="nav-item"><a href="statistiques.php" class="nav-link">Statistiques</a></li>
      <li class="nav-item"><a href="../logout.php" class="nav-link text-danger">Déconnexion</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="dashboard-content flex-grow-1">
    <h1 class="mb-4">Dashboard Organisateur</h1>

    <!-- Créer un nouvel événement -->
    <div class="card p-4 mb-5">
      <h2 class="mb-4">Créer une demande d'événement sportif</h2>
      <form action="creer_evenement.php" method="POST">
        <div class="row mb-4">
          <div class="col-md-5 text-center">
            <label class="form-label">Équipe 1</label>
            <input type="text" class="form-control mb-2" name="equipe1_nom" placeholder="Nom équipe 1" required>
            <input type="url" class="form-control mb-2" name="equipe1_logo" placeholder="Lien logo équipe 1" required>
            <img src="https://via.placeholder.com/80?text=Logo1" id="preview-equipe1" class="team-logo-preview mt-2">
          </div>
          <div class="col-md-2 d-flex align-items-center justify-content-center">
            <h3 class="text-danger fw-bold">VS</h3>
          </div>
          <div class="col-md-5 text-center">
            <label class="form-label">Équipe 2</label>
            <input type="text" class="form-control mb-2" name="equipe2_nom" placeholder="Nom équipe 2" required>
            <input type="url" class="form-control mb-2" name="equipe2_logo" placeholder="Lien logo équipe 2" required>
            <img src="https://via.placeholder.com/80?text=Logo2" id="preview-equipe2" class="team-logo-preview mt-2">
          </div>
        </div>

        <div class="row g-3 mb-4">
          <div class="col-md-6">
            <label class="form-label">Date et heure</label>
            <input type="datetime-local" class="form-control" name="date_heure" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Lieu (Stade)</label>
            <input type="text" class="form-control" name="lieu" placeholder="Ex: Stade de France" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Capacité maximale (max 2000)</label>
            <input type="number" class="form-control" name="capacite" min="100" max="2000" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Durée</label>
            <input type="text" class="form-control" value="2 heures" disabled>
          </div>
        </div>

        <h4 class="mb-3">Catégories de billets (jusqu'à 3)</h4>
        <div id="categories">
          <div class="category-row">
            <div class="row g-3">
              <div class="col-md-8">
                <input type="text" class="form-control" name="categories[0][nom]" placeholder="Nom catégorie (ex: Tribunes Latérales)" required>
              </div>
              <div class="col-md-4">
                <input type="number" class="form-control" name="categories[0][prix]" placeholder="Prix (€)" min="10" required>
              </div>
            </div>
          </div>
          <!-- Vous pouvez ajouter dynamiquement plus avec JS si besoin -->
        </div>
        <button type="button" class="btn btn-outline-primary mb-3" id="add-category">+ Ajouter une catégorie (max 3)</button>

        <button type="submit" class="btn btn-primary btn-lg w-100">Soumettre la demande</button>
        <small class="text-muted d-block mt-3 text-center">Votre événement sera publié après validation par l'administrateur.</small>
      </form>
    </div>

    <!-- Statistiques rapides -->
    <div class="row">
      <div class="col-md-4">
        <div class="card p-4 text-center">
          <h3>12</h3>
          <p class="text-muted">Événements créés</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 text-center">
          <h3>342</h3>
          <p class="text-muted">Billets vendus</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 text-center">
          <h3>8 540 €</h3>
          <p class="text-muted">Chiffre d'affaires</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Aperçu logos équipes
document.querySelector('input[name="equipe1_logo"]').addEventListener('input', function() {
  const url = this.value.trim() || 'https://via.placeholder.com/80?text=Logo1';
  document.getElementById('preview-equipe1').src = url;
});
document.querySelector('input[name="equipe2_logo"]').addEventListener('input', function() {
  const url = this.value.trim() || 'https://via.placeholder.com/80?text=Logo2';
  document.getElementById('preview-equipe2').src = url;
});

// Ajouter jusqu'à 3 catégories
let categoryCount = 1;
document.getElementById('add-category').addEventListener('click', function() {
  if (categoryCount >= 3) return alert("Maximum 3 catégories autorisées");
  categoryCount++;
  const div = document.createElement('div');
  div.className = 'category-row';
  div.innerHTML = `
    <div class="row g-3">
      <div class="col-md-8">
        <input type="text" class="form-control" name="categories[${categoryCount-1}][nom]" placeholder="Nom catégorie" required>
      </div>
      <div class="col-md-4">
        <input type="number" class="form-control" name="categories[${categoryCount-1}][prix]" placeholder="Prix (€)" min="10" required>
      </div>
    </div>`;
  document.getElementById('categories').appendChild(div);
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>