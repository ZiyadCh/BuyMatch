
<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require "../classes/Acheteur.php";
$acheteur = new acheteur($_SESSION['id'],0,0,0,0,0,0,0); 
$acheteur->laisserCommentaire($_POST['id'],$_POST['cont']);
header("location: matchs.php");
exit();
?>