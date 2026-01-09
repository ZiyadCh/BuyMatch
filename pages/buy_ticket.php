<?php
require_once "../classes/Acheteur.php";
require_once "../pdf.php";

$cat = $_POST['categorie'];
$match_id = $_POST['id'];
$user_id = $_SESSION['id'];

$client = new acheteur(0,0,0,0,0,0,0);
if ($client->countTickets($match_id,$user_id) >= 4) {
    echo "Vous avez depasser le nombre de ticket par match";
    exit();
} 
else if ($client->countTickets($match_id,$user_id) >= $client->countNbrPlace($match_id,$user_id)) {
    echo "Vous avez depasser le nombre de ticket par match";
    exit();
} 
else{
$client->acheterTicket($match_id,$user_id,$cat);
$pdf = new pdf();
 $pdf->ticketPDF($match_id);
exit();
}

?>