<?php
require_once "Match.php";
class categorie extends matche{
   function matche() {
       $matche = new matche(1,1,1,1,1) ;
    }
    public function insertCategorie($nom_cat, $match_id, $prix)
{
    $pdo = $this->connect();

    $sql = "INSERT INTO categorie (nom_cat, match_id, prix)
            VALUES (:nom_cat, :match_id, :prix)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nom_cat'  => $nom_cat,
        ':match_id' => $match_id,
        ':prix'     => $prix
    ]);
}
}
?>