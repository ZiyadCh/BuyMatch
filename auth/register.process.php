<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "../classes/User.php";
require_once "../classes/Organisateur.php";
require_once "../classes/Acheteur.php";
session_start();
$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;
//check role
if ($role == 'client') {

    $client = new acheteur(null,$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pfp'],'organisateur',$_POST['password']);
    $user_id =$client->signup();
    $client->insertId($user_id);

}
elseif ($role == 'organisateur'){
    $organisateur = new organisateur(null,$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pfp'],'organisateur',$_POST['password']);
   $user_id =  $organisateur->signup();
     $organisateur->insertId($user_id);
}

?>