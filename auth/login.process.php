<?php 
session_start();
require_once "../classes/User.php";
require_once "../classes/Organisateur.php";
require_once "../classes/Acheteur.php";

$user = new acheteur(null,null,null,null,null,null,0);
$user->login($_POST['email'],$_POST['password']);

?>