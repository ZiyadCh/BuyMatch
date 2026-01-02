
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
                  url('https://img.freepik.com/premium-photo/soccer-stadium-field-soccer-background_1024307-601.jpg') center/cover no-repeat fixed;
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
    .form-select, .form-control {
      background-color: #222;
      border-color: #444;
      color: #fff;
    }
    .form-select:focus, .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 0.25rem rgba(0, 255, 157, 0.25);
    }
    #profile-preview {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid var(--primary);
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center">
  <div class="signup-card">
    <div class="text-center mb-4">
      <h2>Inscription</h2>
      <p>Rejoignez BuyMatch et réservez vos événements sportifs !</p>
    </div>

    <form action="register.process.php" method="POST">
      <!-- Photo de profil (lien URL) -->
      <div class="text-center mb-4">
        <img src="https://via.placeholder.com/120?text=Avatar"  id="profile-preview" alt="Aperçu photo de profil">
        <div class="mt-3">
          <label for="profile_url" class="form-label text-light">Lien vers votre photo de profil (URL)</label>
          <input type="url" class="form-control form-control-lg" id="profile_url" name="pfp" 
                 placeholder="https://example.com/ma-photo.jpg" value="">
          <small class="text-muted">Collez un lien direct vers une image (optionnel)</small>
        </div>
      </div>

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

      <div class="mb-4">
        <label for="role" class="form-label text-light fw-bold">Type de compte</label>
        <select class="form-select form-select-lg" id="role" name="role" required>
          <option value="client" selected>client </option>
          <option value="organisateur">organisateur </option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary w-100 btn-lg">S'inscrire</button>
    </form>

    <div class="text-center mt-4">
      <p class="text-muted">Déjà inscrit ? <a href="login.php" class="text-primary">Connectez-vous</a></p>
      <a href="../index.php" class="text-muted"><i class="bi bi-arrow-left"></i> Retour à l'accueil</a>
    </div>
  </div>

  <script>
    // Aperçu en temps réel de la photo de profil
    const profileInput = document.getElementById('profile_url');
    const previewImg = document.getElementById('profile-preview');

    profileInput.addEventListener('input', function() {
      const url = this.value.trim();
      if (url) {
        // Test temporaire si l'URL semble être une image
        const img = new Image();
        img.onload = () => previewImg.src = url;
        img.onerror = () => previewImg.src = 'https://via.placeholder.com/120?text=Invalid';
        img.src = url;
      } else {
        previewImg.src = 'https://via.placeholder.com/120?text=Avatar';
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>