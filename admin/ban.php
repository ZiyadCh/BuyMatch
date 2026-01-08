<?php 
require "../classes/Admin.php";
$admin = new admin(0,0,0,0,0,0,0);
$admin->bannUser($_POST['id']);
header("location: user_list.php");
exit();
?>