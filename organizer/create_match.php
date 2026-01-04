<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once "../classes/Organisateur.php";
require_once "../classes/categorie.php";
$organisateur = new organisateur(
    null,
    null,
    null,
    null,
    null,
    null,
    null,
);
$match_id = $organisateur->demanderMatch(
    null,
    $_POST['equipe1'],
    $_POST['equipe2'],
    $_POST['logo_equipe1'],
    $_POST['logo_equipe2'],
    $_POST['banner'],
    $_POST['date_matche'],
    $_POST['location'],
    $_POST['nbr_place']
);
$cat = new categorie(1,1,1,1,1);
$cat->insertCategorie("Standard", $match_id, $_POST['price_standard']);
$cat->insertCategorie("VIP", $match_id, $_POST['price_vip']);
$cat->insertCategorie("Premium", $match_id, $_POST['price_premium']);

