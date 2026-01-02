<?php 
session_start();
echo $_SESSION['nom'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daschboard</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

  <!-- Navbar with Login/Signup -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">BUYMATCH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Matches</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
        <div class="d-flex gap-3">
          <a href="../auth/login.php" class="btn btn-login">Login</a>
          <a href="../auth/register.php" class="btn btn-signup">Sign Up</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1><?php echo $_SESSION['nom']  ?></h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam quia impedit rem nisi omnis repellat, provident voluptatem odio veniam, animi, vitae ratione minima quae tempore inventore laborum labore reiciendis non!</p>
    </div>
  </section>

  <!-- Matches Section -->
  <section id="matches">
    <div class="container">
      <h2 class="section-title">Upcoming Matches</h2>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <!-- Match 1: Real Madrid vs Barcelona -->
        <div class="col">
          <div class="card match-card h-100">
            <div class="match-banner">
              <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/match-day-real-madrid-vs-barcelona-el-classic-design-template-740574d9dd3dac8024c5132959a38c2c_screen.jpg?ts=1722616259" alt="El Clasico Banner">
            </div>
            <div class="card-body text-center py-5">
              <div class="d-flex align-items-center justify-content-center gap-4 mb-4">
                <div class="text-center">
                  <img src="https://www.nicepng.com/png/detail/245-2457966_tap-to-expand-real-madrid-is-logo-download.png" class="team-logo" alt="Real Madrid">
                  <h5 class="mt-3 fw-bold" data-team1="Real Madrid">Real Madrid</h5>
                </div>
                <div class="vs-display"><span>VS</span></div>
                <div class="text-center">
                  <img src="https://www.nicepng.com/png/detail/139-1398411_free-png-barcelona-logo-png-images-transparent-fc.png" class="team-logo" alt="Barcelona">
                  <h5 class="mt-3 fw-bold" data-team2="FC Barcelona">FC Barcelona</h5>
                </div>
              </div>
              <p class="text-muted fw-bold" data-date="January 15, 2026">January 15, 2026</p>
              <p class="text-muted" data-location="Santiago Bernabéu, Madrid">Santiago Bernabéu</p>
              <button class="btn book-ticket w-100 mt-4">Buy Ticket</button>
            </div>
          </div>
        </div>

        <!-- Match 2: Manchester United vs Liverpool -->
        <div class="col">
          <div class="card match-card h-100">
            <div class="match-banner">
              <img src="https://i.ytimg.com/vi/tnAiNn8lkws/maxresdefault.jpg" alt="Man Utd vs Liverpool Banner">
            </div>
            <div class="card-body text-center py-5">
              <div class="d-flex align-items-center justify-content-center gap-4 mb-4">
                <div class="text-center">
                  <img src="https://www.pngarts.com/files/2/Manchester-United-PNG-Transparent-Image.png" class="team-logo" alt="Man United">
                  <h5 class="mt-3 fw-bold" data-team1="Manchester United">Man United</h5>
                </div>
                <div class="vs-display"><span>VS</span></div>
                <div class="text-center">
                  <img src="https://www.clipartmax.com/png/middle/197-1977848_liverpool-logo-vector-liverpool-fc.png" class="team-logo" alt="Liverpool">
                  <h5 class="mt-3 fw-bold" data-team2="Liverpool FC">Liverpool</h5>
                </div>
              </div>
              <p class="text-muted fw-bold" data-date="March 8, 2026">March 8, 2026</p>
              <p class="text-muted" data-location="Old Trafford, Manchester">Old Trafford</p>
              <button class="btn book-ticket w-100 mt-4">Buy Ticket</button>
            </div>
          </div>
        </div>

        <!-- Add more matches here -->
      </div>
    </div>
  </section>

  <!-- Premium Modal -->
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>
</html>