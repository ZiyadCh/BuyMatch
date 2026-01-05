<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription - BuyMatch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

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
                <img src="https://via.placeholder.com/120?text=Avatar" id="profile-preview" alt="pfp">
                <div class="mt-3">
                    <label for="profile_url" class="form-label text-light">Photo URL</label>
                    <input type="url" class="form-control form-control-lg" id="profile_url" name="pfp"
                        placeholder="https://example.com/ma-photo.jpg" value="">
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
                <select class="form-select form-select-lg" id="role" name="role" >
                    <option value="" disabled>--</option>
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