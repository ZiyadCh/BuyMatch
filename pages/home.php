<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BuyMatch - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; padding-top: 40px; }
        .hero { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://via.placeholder.com/1920x600?text=Stade+en+foule'); background-size: cover; color: white; padding: 100px 0; text-align: center; }
        .card { transition: transform 0.3s; border: none; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .card:hover { transform: translateY(-10px); }
        .btn-success { background-color: #28a745; border: none; }
    </style>
</head>
<body>
    <div class="hero">
        <h1 class="display-3 fw-bold">BuyMatch</h1>
        <p class="lead fs-3">Réservez vos billets pour les plus grands matchs sportifs</p>
    </div>
    <div class="container my-5">
        <h2 class="text-center mb-4">Matchs à venir</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x250?text=PSG+vs+OM" class="card-img-top" alt="Match">
                    <div class="card-body text-center">
                        <h5 class="card-title">PSG vs Olympique de Marseille</h5>
                        <p class="card-text">15 janvier 2026<br>Parc des Princes</p>
                        <a href="match_details.php" class="btn btn-success">Voir détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x250?text=Real+vs+Barca" class="card-img-top" alt="Match">
                    <div class="card-body text-center">
                        <h5 class="card-title">Real Madrid vs FC Barcelone</h5>
                        <p class="card-text">20 février 2026<br>Santiago Bernabéu</p>
                        <a href="match_details.php" class="btn btn-success">Voir détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/400x250?text=Manchester+vs+Liverpool" class="card-img-top" alt="Match">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manchester United vs Liverpool</h5>
                        <p class="card-text">5 mars 2026<br>Old Trafford</p>
                        <a href="match_details.php" class="btn btn-success">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>