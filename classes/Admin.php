
<?php
session_start();
require_once "User.php";

class  admin extends users{
   
    public function insertId($userId){
        $pdo = $this->connect();
        $sql = "INSERT INTO admin (user_id) VALUES (:user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $userId
        ]);
    }

    public function bannUser($id){
     $pdo = $this->connect();   
     $sql = "UPDATE users set etat = 'banned' WHERE id = :id";
     $stmt = $pdo->prepare($sql);
     $stmt->execute([
        ':id' => $id
     ]);
    }

    public function acceptMatch($id){
     $pdo = $this->connect();   
     $sql = "UPDATE matches set statut = 'validée' WHERE id = :id";
     $stmt = $pdo->prepare($sql);
     $stmt->execute([
        ':id' => $id
     ]);
    }

    public function refuserMatch($id){
     $pdo = $this->connect();   
     $sql = "UPDATE matches set statut = 'refusée' WHERE id = :id";
     $stmt = $pdo->prepare($sql);
     $stmt->execute([
        ':id' => $id
     ]);
    }

    public function afficherUsers(){
        $pdo = $this->connect();
       $sql = "SELECT id,nom,prenom,role,etat from users where role != 'admin'"; 
       $stmt = $pdo->prepare($sql);
       $stmt->execute();
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
       foreach ($results as $res) {
        echo "
        <tr>
            <td>".$res['id']."</td>
            <td>".$res['nom']."</td>
            <td>".$res['prenom']."</td>
            <td>".$res['role']."</td>
            <td>".$res['etat']."</td>
            <td>
            <form action = 'ban.php' method= 'post'>
            <input type='hidden' name='id' value='".$res['id']."'>
            <button type = 'submit' >Bann</button> </td>
</form>
            </tr>
        ";
       }

    }

}
?>