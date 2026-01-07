<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ .'/vendor/autoload.php';

$html = "<h1>Ticket de buymatch</h1>
<div>
<h3>".$_SESSION['nom']."</h3>
<p>votre ticket</p>
</div>
";

use Dompdf\Dompdf;

$dompdf = new Dompdf;

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("ticket.pdf");
?>