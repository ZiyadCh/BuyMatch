<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once "../classes/Organisateur.php";
echo $_POST['equipe1'] . "<br>";
echo $_POST['logo_equipe1'] . "<br>";
echo $_POST['equipe2'] . "<br>";
echo $_POST['logo_equipe2'] . "<br>";
echo $_POST['banner'] . "<br>";
echo $_POST['date_matche'] . "<br>";
echo $_POST['location'] . "<br>";
echo $_POST['nbr_place'];
$organisateur = new organisateur(
    null,
    null,
    null,
    null,
    null,
    null,
    null,
);
$organisateur->demanderMatch(
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
