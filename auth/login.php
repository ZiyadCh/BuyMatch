<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion - BuyMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="d-flex align-items-center justify-content-center">
  <div class="login-card">
    <div class="text-center mb-4">
      <h2>Connexion</h2>
      <p>Bienvenue sur BuyMatch – Réservez vos billets sportifs !</p>
    </div>
    <form action="login.process.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label text-light">Email</label>
        <input type="email" class="form-control form-control-lg" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label text-light">Mot de passe</label>
        <input type="password" class="form-control form-control-lg" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100 btn-lg">Se connecter</button>
    </form>
    <div class="text-center mt-4">
      <p class="text-muted">Pas de compte ? <a href="register.php" class="text-primary">Inscrivez-vous</a></p>
      <a href="../public/index.php" class="text-muted"><i class="bi bi-arrow-left"></i> Retour à l'accueil</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>