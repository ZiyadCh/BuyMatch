<?php
require_once "User.php";
class  acheteur extends users{


    public function insertId($userId){
        $pdo = $this->connect();
        $sql = "INSERT INTO clients (user_id) VALUES (:user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $userId
        ]);
    }
    public function acheterTicket($match_id,$userId){
        if ($_SESSION['is_logged'] == false) {
            header("location: ../auth/login.php");
            exit();
        }
        else{
        $pdo = $this->connect();
        $sql = "INSERT INTO ticket (match_id,user_id) VALUES (:match_id,:user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":match_id" => $match_id,
            ":user_id" => $userId,
        ]);
        }
        
    }

    public function afficherHistorique(){

    }

    public function laisserCommentaire(){

    }

}
?>