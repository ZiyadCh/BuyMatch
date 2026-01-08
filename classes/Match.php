<?php
session_start();
require_once "../config/database.php";

class matche extends connection
{

  protected $id;
  protected $equipe1;
  protected $equipe2;
  protected $date;
  protected $location;

  public function __construct($id, $equipe1, $equipe2, $date, $location)
  {
    $this->id = $id;
    $this->equipe1 = $equipe1;
    $this->equipe2 = $equipe2;
    $this->date = $date;
    $this->location = $location;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getEquipe1()
  {
    return $this->equipe1;
  }

  public function getEquipe2()
  {
    return $this->equipe2;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function getLocation()
  {
    return $this->location;
  }


  public function setId($id)
  {
    $this->id = $id;
  }

  public function setEquipe1($equipe1)
  {
    $this->equipe1 = $equipe1;
  }

  public function setEquipe2($equipe2)
  {
    $this->equipe2 = $equipe2;
  }

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function afficherMatch()
  {
    $pdo = $this->connect();
    //changer query depending on admin or orga
    if ($_SESSION['role'] == 'organisateur') {
      $sql = "SELECT * FROM matches WHERE organisateur_id = " . $_SESSION['id'] . "";
    } elseif ($_SESSION['role'] == 'client') {
      $sql = "SELECT * FROM matches WHERE statut = 'validée'";
    } else {
      $sql = "SELECT * FROM matches WHERE statut = 'en attente'";
    }
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $row) {
      $id = $row['id'];
      $equipe1 = $row['equipe1'];
      $equipe2 = $row['equipe2'];
      $logo1 = $row['logo_equipe1'];
      $logo2 = $row['logo_equipe2'];
      $banner = $row['banner'];
      $dateMatch = $row['date_matche'];
      $location = $row['location'];
      $nbr = $row['nbr_place'];
      $statut = $row['statut'];

      echo "<div class='col'>
          <div class='card match-card h-100'>
            <div class='match-banner'>
              <img src='" . $banner . "' alt='banner'>
            </div>
            <div class='card-body text-center py-5'>
              <div class='d-flex align-items-center justify-content-center gap-4 mb-4'>
                <div class='text-center'>
                  <img src='" . $logo1 . "' class='team-logo' alt=''>
                  <h5 class='mt-3 fw-bold' >" . $equipe1 . "</h5>
                </div>
                <div class='vs-display'><span>VS</span></div>
                <div class='text-center'>
                  <img src='" . $logo2 . "' class='team-logo' alt=''>
                  <h5 class='mt-3 fw-bold' >" . $equipe2 . "</h5>
                </div>
              </div>
              <p class='text-muted fw-bold' data-date='January 15, 2026'>" . $dateMatch . "</p>
              <p class='text-muted' data-location='Santiago Bernabéu, Madrid'>" . $location . "</p>
              
            <form action='validate_match.php' method='post'>
            <input type='hidden' name='id' value= '" . $id . "'>
              <button  class='admin btn book-ticket w-100 mt-4'>Accepter</button>
                </form>
                <form action='reject_match.php' method='post'>
                <input type='hidden' name='id' value= '" . $id . "'>
                    <button class=' admin btn bg-danger  w-100 mt-4'>Rejecter</button>
                    </form>
                    <form action='../pages/match_cat.php' method='post'>
                    <input type='hidden' name='id' value= '" . $id . "'>
                    <button class='ach btn book-ticket w-100 mt-4'>Acheter Billet</button>
                </form>
          <span class='stat badge status-badge'>" . $statut . "</span>
            </div>
          </div>
        </div>";
    }
  }



  public function afficherCategories($mid)
  {
    $pdo = $this->connect();
    $sql = "SELECT categorie.* from categorie left join matches on  match_id = matches.id where match_id = :match_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ":match_id" => $mid
    ]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "
<div class='mb-4'>
  <label class='form-label fw-bold fs-4'>Type de billet</label>
  <select class='form-select form-select-lg' name='categorie'>
";
foreach ($results as $res) {
    $cat  = $res['nom_cat'];
    $prix = $res['prix'];
    echo "<option name='cat' value='$cat'>$cat - $prix MAD</option>";
}

echo "
  </select>
</div>
";

  }

  public function afficherComment() {}
}
