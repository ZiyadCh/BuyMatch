
<?php
session_start();
require_once "User.php";

class  admin extends users{
   
    public function insertId($userId)
    {
        $pdo = $this->connect();
        $sql = "INSERT INTO admin (user_id) VALUES (:user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $userId
        ]);
    }

    public function bannUser(){

    }

    public function acceptMatch($id){
     $pdo = $this->connect();   
     $sql = "UPDATE matches set statut = 'validee' WHERE id = :id";
     $stmt = $pdo->prepare($sql);
     $stmt->execute([
        ':id' => $id
     ]);
    }

    public function refuserMatch(){

    }

}
?>