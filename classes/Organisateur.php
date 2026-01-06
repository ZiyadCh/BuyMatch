<?php
require_once "User.php";
class  organisateur extends users
{


    public function insertId($userId)
    {
        $pdo = $this->connect();
        $sql = "INSERT INTO organisateur (user_id) VALUES (:user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $userId
        ]);
    }


    public function demanderMatch($userId, $equipe1, $equipe2, $logo1, $logo2, $banner, $date, $location, $nbr_place){
        $pdo = $this->connect();
        $sql = "INSERT INTO matches (  equipe1,   equipe2,logo_equipe1,
    logo_equipe2,
    banner,
    date_matche,
    location,
    nbr_place,
    statut,organisateur_id

) VALUES (
    :equipe1,
    :equipe2,
    :logo1,
    :logo2,
    :banner,
    :date_matche,
    :location,
    :nbr_place,
    :statut,
    :id
)";
        echo $_SESSION['id'];
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':equipe1'      => $equipe1,
            ':equipe2'      => $equipe2,
            ':logo1'        => $logo1,
            ':logo2'        => $logo2,
            ':banner'       => $banner,
            ':date_matche'  => $date,
            ':location'     => $location,
            ':nbr_place'    => $nbr_place,
            ':statut'       => 'en attente',
            ':id'       => $_SESSION['id']
        ]);
        $match_id = $pdo->lastInsertId();
        return $match_id;
    }
public function stats() {

    $pdo = $this->connect();
    //total des matches
    $sqlTotal = "select count(matches.id) as total from matches where organisateur_id  = :id";
    $stmt = $pdo->prepare($sqlTotal);
      $stmt->execute([
            ':id'       => $_SESSION['id']
        ]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "
           <div class='row g-4 mb-5'>
      <div class='col-md-3'>
        <div class='stat-card'>
          <div class='stat-number'>".$results['total']."</div>
          <div class='stat-label'>Matchs créés</div>
        </div>
        </div>
        ";
        // matches validee
    $sqlVerifie = "select count(matches.id) as total from matches where organisateur_id  = :id and statut = 'validee'";
    $stmt = $pdo->prepare($sqlVerifie);
      $stmt->execute([
            ':id'       => $_SESSION['id']
        ]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "
           <div class='row g-4 mb-5'>
      <div class='col-md-3'>
        <div class='stat-card'>
          <div class='stat-number'>".$results['total']."</div>
          <div class='stat-label'>Matchs validées</div>
        </div>
        </div>

        ";

    $sqlReject = "select count(matches.id) as total from matches where organisateur_id  = :id and statut = 'refusés'";
    $stmt = $pdo->prepare($sqlReject);
      $stmt->execute([
            ':id'       => $_SESSION['id']
        ]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "
           <div class='row g-4 mb-5'>
      <div class='col-md-3'>
        <div class='stat-card'>
          <div class='stat-number'>".$results['total']."</div>
          <div class='stat-label'>Matchs validées</div>
        </div>
        </div>

        ";

}


}
