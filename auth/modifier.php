<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "../classes/User.php";
require_once "../classes/Acheteur.php";
require_once "../classes/Organisateur.php";

if ($_SESSION['role'] == 'client') {
    $client = new acheteur($_SESSION['id'],$_POST['nom'],$_POST['prenom'],$_SESSION['email'],$_POST['pfp'],'client',null);
    $client->modifierProfile();
    header("location: ../pages/matchs.php");
    exit();

}

if ($_SESSION['role'] == 'organisateur') {
    $organisateur = new organisateur($_SESSION['id'],$_POST['nom'],$_POST['prenom'],$_SESSION['email'],$_POST['pfp'],'organisateur',null);
    $organisateur->modifierProfile();
    header("location: ../pages/orga.home.php");
    exit();
}

?>