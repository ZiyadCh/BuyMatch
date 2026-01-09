
<?php 
require "../classes/Acheteur.php";
$acheteur = new acheteur($_SESSION['id'],0,0,0,0,0,0,0); 
$acheteur->laisserCommentaire($_POST['id'],$_POST['cont']);
header("location: matchs.php");
exit();
?>