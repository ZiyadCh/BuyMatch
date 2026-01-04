<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "../classes/Admin.php";

    $admin = new admin(null,$_POST['nom'],$_POST['prenom'],$_POST['email'],null,'admin',$_POST['password']);
    $user_id =$admin->signup();
    $admin->insertid($user_id);



?>