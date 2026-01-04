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


    public function demanderMatch($userId, $equipe1, $equipe2, $logo1, $logo2, $banner, $date, $location, $nbr_place)
    {
        $pdo = $this->connect();
        $sql = "
INSERT INTO matches (
    equipe1,
    equipe2,
    logo_equipe1,
    logo_equipe2,
    banner,
    date_matche,
    location,
    nbr_place,
    statut
) VALUES (
    :equipe1,
    :equipe2,
    :logo1,
    :logo2,
    :banner,
    :date_matche,
    :location,
    :nbr_place,
    :statut
)";
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
            ':statut'       => 'en attente'
        ]);
    }
}
