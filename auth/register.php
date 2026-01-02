
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inscription - BuyMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    :root { --primary: #00ff9d; --dark: #0a0a0a; --card-bg: #161616; }
    body {
      background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)),
                  url('https://png.pngtree.com/thumb_back/fh260/background/20241112/pngtree-a-large-cricket-stadium-green-field-empty-image_16550057.jpg') center/cover no-repeat fixed;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
    }
    .signup-card {
      background: var(--card-bg);
      border-radius: 20px;
      padding: 3rem;
      max-width: 500px;
      box-shadow: 0 20px 50px rgba(0, 255, 157, 0.2);
    }
    .btn-primary {
      background: var(--primary);
      border: none;
      color: #000;
      font-weight: 600;
      padding: 0.8rem;
    }
    .btn-primary:hover { background: #00cc7a; }
    h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 3rem;
      color: var(--primary);
    }
    .form-select {
      background-color: #222;
      border-color: #444;
      color: #fff;
    }
    .form-select:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 0.25rem rgba(0, 255, 157, 0.25);
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center">
  <div class="signup-card">
    <div class="text-center mb-4">
      <h2>Inscription</h2>
      <p>Rejoignez BuyMatch et réservez vos événements sportifs !</p>
    </div>

    <form action="./register.process.php" method="POST">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="prenom" class="form-label text-light">Prénom</label>
          <input type="text" class="form-control form-control-lg" id="prenom" name="prenom" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="nom" class="form-label text-light">Nom</label>
          <input type="text" class="form-control form-control-lg" id="nom" name="nom" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label text-light">Email</label>
        <input type="email" class="form-control form-control-lg" id="email" name="email" required>
      </div>

      <div class="mb-4">
        <label for="password" class="form-label text-light">Mot de passe</label>
        <input type="password" class="form-control form-control-lg" id="password" name="password" required>
      </div>

      <!-- Select simple pour le rôle -->
      <div class="mb-4">
        <label for="role" class="form-label text-light fw-bold">Type de compte</label>
        <select class="form-select form-select-lg" id="role" name="role" required>
          <option value="client" selected>Client (Acheteur de billets)</option>
          <option value="organisateur">Organisateur d'événements</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary w-100 btn-lg">S'inscrire</button>
    </form>

    <div class="text-center mt-4">
      <p class="text-muted">Déjà inscrit ? <a href="login.php" class="text-primary">Connectez-vous</a></p>
      <a href="../index.php" class="text-muted"><i class="bi bi-arrow-left"></i> Retour à l'accueil</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>