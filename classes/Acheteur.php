<?php
require_once "User.php";
class  acheteur extends users
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

    //nbr of place dans le stade
    public function countNbrPlace($match_id){
        $pdo = $this->connect();
        $sql = "SELECT count(*) from matches left join ticket on matches.id = ticket.match_id  where matches.id = 19;";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':match_id' => $match_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['count'];
    }
    //if has ktr mn 4
    public function countTickets($matchId, $userId)
    {
        $pdo = $this->connect();

        $sql = "SELECT COUNT(ticket.id) AS count FROM ticket WHERE match_id = :match_id AND user_id = :user_id";
        $sql = "SELECT count(*) from matches left join ticket on matches.id = ticket.match_id  where matches.id = 19;";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':match_id' => $matchId,
            ':user_id'  => $userId
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['count'];
    }

    public function acheterTicket($match_id, $userId)
    {
        if ($_SESSION['is_logged'] == false) {
            header("location: ../auth/login.php");
            exit();
        } else {
            $pdo = $this->connect();
            $sql = "INSERT INTO ticket (match_id,user_id) VALUES (:match_id,:user_id)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ":match_id" => $match_id,
                ":user_id" => $userId,
            ]);
        }
    }



    public function afficherHistorique() {}

    public function laisserCommentaire() {}
}
