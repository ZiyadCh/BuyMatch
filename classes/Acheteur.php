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
    public function acheterTicket(){

    }

    public function afficherHistorique(){

    }

    public function laisserCommentaire(){

    }

}
?>