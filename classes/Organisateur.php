<?php
require_once "User.php";
class  organisateur extends users{


    public function insertId($userId){
        $pdo = $this->connect();
        $sql = "INSERT INTO organisateur (user_id) VALUES (:user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $userId
        ]);
    }

    public function demanderMatch(){
        $pdo = $this->connect();
        $sql = "INSERT INTO matches (equipe1) VALUES (:user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $userId
        ]);
    }

}
?>