<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "config/database.php";
require __DIR__ .'/vendor/autoload.php';
use Dompdf\Dompdf;

class pdf extends connection{
public function ticketPDF($mid){
    $pdo = $this->connect();
      $sql = "SELECT * FROM matches left join ticket on matches.id = ticket.match_id WHERE matches.id = " . $mid . "";
    //execute
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $id = $row['id'];
      $equipe1 = $row['equipe1'];
      $equipe2 = $row['equipe2'];
      $dateMatch = $row['date_matche'];
      $location = $row['location'];
      $cat = $row['categorie'];

$html = "<h1>       Ticket de buymatch   </h1>
<h1>***********************************</h1>
<div style='display : flex;'>
<h3>nom: ".$_SESSION['nom']." </h3>
<h3>prenom: ".$_SESSION['prenom']."</h3>
<h2>Detail du match:</h2>
</br>
<table style='width : 100%'>

    <tbody>
<tr>
    <td>".$equipe1."</td>
    <td>VS</td>
    <td>".$equipe2."</td>
    <td>".$dateMatch."</td>
    <td>".$location."</td>
    </tr>
    </tbody>
    
</table>
</br>
<strong>Catergorie:</strong>
<p>".$cat."</p>
</div>
";

$dompdf = new Dompdf;

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("ticket.pdf",["Attachement"  => 0]);
}
}

?>