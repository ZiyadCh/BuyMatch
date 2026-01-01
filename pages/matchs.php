<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <title>Reel Verse</title>
    <style>
      :root {
        --primary: #e50914; /* Netflix-inspired red */
        --dark: #141414;
        --light: #f8f9fa;
        --text: #ffffff;
        --accent: #ff6b6b;
      }

      body {
        font-family: 'Poppins', sans-serif;
        background-color: #000;
        color: var(--text);
      }

      .navbar {
        background-color: rgba(20, 20, 20, 0.95) !important;
        backdrop-filter: blur(10px);
        padding: 1rem 0;
        z-index: 1000;
      }

      .navbar-brand {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: var(--primary) !important;
        font-weight: 700;
      }

      .nav-link {
        color: var(--text) !important;
        font-weight: 500;
        margin: 0 1rem;
        transition: color 0.3s;
      }

      .nav-link:hover, .nav-link.active {
        color: var(--primary) !important;
      }

      /* Hero Section (Slider replacement) */
      .hero {
        height: 100vh;
        min-height: 600px;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)), url('https://via.placeholder.com/1920x1080?text=Featured+Movie+Poster') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 4.5rem;
        color: var(--text);
      }

      .hero p {
        font-size: 1.5rem;
        max-width: 800px;
        margin: 1rem auto;
      }

      .btn-primary-custom {
        background-color: var(--primary);
        border: none;
        padding: 0.8rem 2rem;
        font-weight: 600;
        border-radius: 5px;
        transition: background 0.3s;
      }

      .btn-primary-custom:hover {
        background-color: var(--accent);
      }

      section {
        padding: 5rem 0;
      }

      .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        margin-bottom: 3rem;
        text-align: center;
        color: var(--primary);
      }

      .movie-card {
        background-color: #1e1e1e;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.4s, box-shadow 0.4s;
      }

      .movie-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(229, 9, 20, 0.4);
      }

      .movie-poster {
        position: relative;
        overflow: hidden;
      }

      .movie-poster img {
        transition: transform 0.5s;
      }

      .movie-card:hover .movie-poster img {
        transform: scale(1.1);
      }

      .card-body {
        padding: 1.5rem;
      }

      .movie-title {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
      }

      .movie-price {
        color: var(--primary);
        font-weight: 700;
        font-size: 1.3rem;
      }

      .book-ticket {
        background-color: var(--primary);
        border: none;
        width: 100%;
        padding: 0.8rem;
        font-weight: 600;
      }

      .book-ticket:hover {
        background-color: var(--accent);
      }

      /* Modal */
      .modal-window {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #1e1e1e;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.8);
        z-index: 2000;
        max-width: 400px;
        width: 90%;
        text-align: center;
      }

      .modal-window.active {
        display: block;
      }

      .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 2rem;
        cursor: pointer;
        color: #fff;
      }

      footer {
        background-color: var(--dark);
        padding: 3rem 0;
        text-align: center;
        font-size: 0.9rem;
      }
    </style>
  </head>
  <body>
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Reel Verse</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">In Cinemas Now</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Trending</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
              <li class="nav-item"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Subscribe</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Hero Section -->
      <div class="hero">
        <div>
          <h1>Featured Movie Title</h1>
          <p>Experience the ultimate cinematic adventure in theaters now.</p>
          <button class="btn btn-primary-custom">Book Tickets</button>
        </div>
      </div>
    </header>

    <main>
      <!-- In Cinemas Now -->
      <section class="bg-black">
        <div class="container">
          <h2 class="section-title">In Cinemas Now</h2>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Movie cards will be added dynamically or statically -->
            <div class="col">
              <div class="card movie-card h-100">
                <div class="movie-poster">
                  <img src="../assets/images/post-1.jpg" class="w-100" alt="Movie Poster">
                </div>
                <div class="card-body">
                  <h5 class="movie-title fw-bold">Movie Title <small>(Year)</small></h5>
                  <p class="movie-price">9900 ৳</p>
                  <button class="btn book-ticket">Book Ticket</button>
                </div>
              </div>
            </div>
<div class="col">
              <div class="card movie-card h-100">
                <div class="movie-poster">
                  <img src="../assets/images/post-1.jpg" class="w-100" alt="Movie Poster">
                </div>
                <div class="card-body">
                  <h5 class="movie-title fw-bold">Movie wef <small>(Year)</small></h5>
                  <p class="movie-price">000 ৳</p>
                  <button class="btn book-ticket">Book Ticket</button>
                </div>
              </div>
            </div>
            <!-- Repeat more cards as needed -->
          </div>
        </div>
      </section>

      <!-- Trending Now -->
      <section class="bg-dark">
        <div class="container">
          <h2 class="section-title">Trending Now</h2>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Similar movie cards -->
          </div>
        </div>
      </section>
    </main>

    <!-- Modal Window -->
    
<div class="modal-window">
  <span class="close-btn">X</span>
  <h2 class="fw-bold">Movie Title (Year)</h2>
  
  <div class="mt-4">
    <label for="seat-type" class="form-label fw-bold">Categorie</label>
    <select class="form-select form-select-lg" id="seat-type">
      <option value="normal" selected>Normal</option>
      <option value="vip">VIP</option>
    </select>
  </div>

  <button class="btn btn-danger fw-bold mt-4 buy-now w-100">BUY NOW</button>
</div>
    <footer>
      <p>&copy; 2026 Reel Verse. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom JS (for modal example) -->
  <script src="../assets/js/script.js"></script> 
  </body>
</html>