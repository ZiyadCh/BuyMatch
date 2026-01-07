<?php
require_once "../classes/User.php";
require_once "../classes/Organisateur.php";
require_once "../classes/Acheteur.php";
session_start();
//check role
$role = $_POST['role'];
if ($role == 'client') {
    $client = new acheteur(null,$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pfp'],'client',$_POST['password']);
    $user_id =$client->signup();
    $client->insertId($user_id);
    header("location: ../auth/login.php");
    exit();

}
elseif ($role == 'organisateur'){
    $organisateur = new organisateur(null,$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pfp'],'organisateur',$_POST['password']);
   $user_id =  $organisateur->signup();
     $organisateur->insertId($user_id);
    header("location: ../auth/login.php");
    exit();
}

?>