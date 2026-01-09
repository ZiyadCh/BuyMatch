<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; 
require_once "User.php";

class acheteur extends users
{
    public function insertId($userId)
    {
        $pdo = $this->connect();
        $sql = "INSERT INTO clients (user_id) VALUES (:user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $userId
        ]);
    }
    
    public function countNbrPlace($match_id){
        $pdo = $this->connect();
        $sql = "SELECT count(*) as count from matches left join ticket on matches.id = ticket.match_id where matches.id = :match_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':match_id' => $match_id
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    }
    
    public function countTickets($matchId, $userId){
        $pdo = $this->connect();
        $sql = "SELECT COUNT(ticket.id) AS count FROM ticket WHERE match_id = :match_id AND user_id = :user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':match_id' => $matchId,
            ':user_id'  => $userId
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    }
    
    //////////////////////////
    // EMAIL  
    //////////////////////////
    public function acheterTicket($match_id, $userId,$cat){
        if ($_SESSION['is_logged'] == false) {
            header("location: ../auth/login.php");
            exit();
        } else {
            $pdo = $this->connect();
            $sql = "INSERT INTO ticket (match_id,user_id,categorie) VALUES (:match_id,:user_id,:categorie)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ":match_id" => $match_id,
                ":user_id" => $userId,
                ":categorie" => $cat
            ]);

        }
    }
    
    public function laisserCommentaire($mid,$cont) {
        $pdo = $this->connect();
        $sql = "INSERT INTO commentaire(client_id,match_id,content) VALUES(:uid,:mid,:content)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
           ":uid" => $this->id,
           ":mid" => $mid,
           ":content" =>  $cont
        ]);
        
    }

    public function afficherHistorique() {
 $pdo = $this->connect();
    $sql = "SELECT * FROM matches left join ticket on matches.id = ticket.match_id left join users on users.id = ticket.user_id  left join categorie on nom_cat = ticket.categorie  WHERE users.id = :id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ":id" => $this->id
    ]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $res) {
    echo "
<tr>
                <td><span class='code'>".$res['match_id']."</span></td>
                <td><span class='code'>".$res['nom_cat']."</span></td>
                <td class='status-ok'>".$res['prix']."</td>
            </tr>
    ";
    }
    
    }
}