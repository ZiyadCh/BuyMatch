<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "../classes/Acheteur.php";
$match_id = $_POST['id'];
$user_id = $_SESSION['id'];
echo $user_id;
$client = new acheteur(0,0,0,0,0,0,0);
$client->acheterTicket($match_id,$user_id);
?>