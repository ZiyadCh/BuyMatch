<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "../classes/Acheteur.php";
require_once "../pdf.php";
$match_id = $_POST['id'];
$user_id = $_SESSION['id'];
$cat = $_POST['categorie'];
$client = new acheteur(0,0,0,0,0,0,0);
if ($client->countTickets($match_id,$user_id) >= 4) {
    echo "Vous avez depasser le nombre de ticket par match";
} 
else{
$client->acheterTicket($match_id,$user_id,$cat);
ticketPDF($match_id);
 // header("Location: ../mailer.php");
exit();
}

?>