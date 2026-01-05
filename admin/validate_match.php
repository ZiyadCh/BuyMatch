<?php 
require_once "../classes/Admin.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$id= $_POST['id'];
$admin = new admin(0,0,0,0,0,0,0);
$admin->acceptMatch($id);
echo "aight";
?>