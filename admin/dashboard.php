<?php
session_start();
require_once "../classes/Match.php";
$matche = new matche(0,0,0,0,0);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - BuyMatch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .sidebar {
            background: #111;
            min-height: 100vh;
            padding: 2rem 0;
        }

        .sidebar .nav-link {
            color: #aaa;
            padding: 0.8rem 2rem;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: var(--primary);
            background: rgba(0, 255, 157, 0.1);
        }

        .dashboard-content {
            padding: 3rem;
        }

        .stat-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        table {
            background: var(--card-bg);
        }

        .btn-approve {
            background: var(--primary);
            color: #000;
        }

        .btn-reject {
            background: var(--danger);
            color: #fff;
        }
    </style>
</head>

<body class="d-flex">

    <div class="sidebar col-md-3 col-lg-2">
        <div class="text-center mb-5">
            <h3 class="text-primary"><?php echo $_SESSION['nom'] ?></h3>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
            <li class="nav-item"> <a class="nav-link " href="#">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="dashboard-content flex-grow-1">
        <h1 class="display-5 fw-bold mb-4">Page Administrateur</h1>
        <h2 class="mb-4">Demandes des Matchs</h2>
    </div>
    <div class="">
    <?php 
    $matche->afficherMatch();
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>