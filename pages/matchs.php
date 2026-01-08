<?php
session_start();
require_once "../classes/Match.php";
$match = new matche(0, 0, 0, 0, 0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Notre matches</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    .admin {
      display: none;
    }

    .stat-card {
      background: var(--card-bg);
      border-radius: 16px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0, 255, 157, 0.15);
    }

    .stat-number {
      font-size: 2.8rem;
      font-weight: 700;
      color: var(--primary);
    }

    .stat-label {
      font-size: 1.1rem;
      margin-top: 0.5rem;
    }

    .stat {
      display: none;
    }
  </style>
</head>

<body>



  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">BUYMATCH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        </ul>
        <div class="d-flex gap-3">
          <?php
          if ($_SESSION['is_logged'] == false) {
            echo "
          <a href='../auth/login.php' class='btn btn-login'>Login</a>
          <a href='../auth/register.php' class='btn btn-signup'>Sign Up</a>
            ";
          }
          elseif ($_SESSION['is_logged']== true) {
            echo "
            <div class='dropdown'>
          <a class='d-flex align-items-center text-decoration-none' href='profile.php'>
            <img src='".$_SESSION['pfp']."'
              alt='Profil' class='rounded-circle profile-avatar me-2'>
            <span class='text-light d-none d-sm-inline'>".  $_SESSION['prenom'] ."</span>
          </a>

        </div>
            ";
          }
          ?>
        </div>
      </div>
    </div>
  </nav>


  <section class="hero">
    <div class="container">
      <h1><?php echo $_SESSION['nom'] ?></h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam quia impedit rem nisi omnis repellat, provident voluptatem odio veniam, animi, vitae ratione minima quae tempore inventore laborum labore reiciendis non!</p>
    </div>
  </section>

  <!-- Stats Cards Section -->


  <section id="matches">
    <div class="container">
      <h2 class="section-title">Matches</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <?php
        $match->afficherMatch();
        ?>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>