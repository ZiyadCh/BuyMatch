<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion - BuyMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    :root { --primary: #00ff9d; --dark: #0a0a0a; --card-bg: #161616; }
    body { background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('https://static.vecteezy.com/system/resources/previews/068/951/289/original/beautiful-soccer-stadium-at-sunset-with-green-grass-and-blue-seats-for-football-fans-and-sports-events-photo.jpg') center/cover no-repeat fixed; min-height: 100vh; font-family: 'Poppins', sans-serif; }
    .login-card { background: var(--card-bg); border-radius: 20px; padding: 3rem; max-width: 450px; box-shadow: 0 20px 50px rgba(0, 255, 157, 0.2); }
    .btn-primary { background: var(--primary); border: none; color: #000; font-weight: 600; padding: 0.8rem; }
    .btn-primary:hover { background: #00cc7a; }
    h2 { font-family: 'Bebas Neue', sans-serif; font-size: 3rem; color: var(--primary); }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center">
  <div class="login-card">
    <div class="text-center mb-4">
      <h2>Connexion</h2>
      <p>Bienvenue sur BuyMatch – Réservez vos billets sportifs !</p>
    </div>
    <form action="traitement_login.php" method="POST">
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
      <p class="text-muted">Pas de compte ? <a href="signup.php" class="text-primary">Inscrivez-vous</a></p>
      <a href="../index.php" class="text-muted"><i class="bi bi-arrow-left"></i> Retour à l'accueil</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>