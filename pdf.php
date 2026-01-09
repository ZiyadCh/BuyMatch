<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ .'/vendor/autoload.php';
use Dompdf\Dompdf;

function ticketPDF($mid){
$name = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$html = "<h1>       Ticket de buymatch</h1>
<h1>***********************************</h1>
<div style='display : flex;'>
<h3>nom: $name</h3>
<h3>prenom: $prenom</h3>
<p>votre ticket</p>
</div>
";
$dompdf = new Dompdf;

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("ticket.pdf",["Attachement"  => 0]);
}
?>
