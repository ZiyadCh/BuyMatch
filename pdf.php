<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "mailer.php";
require_once "config/database.php";
require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

class pdf extends connection {

    public function ticketPDF($mid) {

        $pdo = $this->connect();
        $sql = "SELECT * FROM matches 
                LEFT JOIN ticket ON matches.id = ticket.match_id 
                WHERE matches.id = " . $mid;
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $equipe1   = $row['equipe1'];
        $equipe2   = $row['equipe2'];
        $dateMatch = $row['date_matche'];
        $location  = $row['location'];
        $cat       = $row['categorie'];

        $html = "
        <style>
            body { font-family: DejaVu Sans, sans-serif; }
            table { width: 100%; border-collapse: collapse; }
            td { border: 1px solid #000; padding: 6px; text-align: center; }
        </style>

        <h1>Ticket de BuyMatch</h1>

        <p>Nom: {$_SESSION['nom']}</p>
        <p>Prénom: {$_SESSION['prenom']}</p>

        <table>
            <tr>
                <td>$equipe1</td>
                <td>VS</td>
                <td>$equipe2</td>
                <td>$dateMatch</td>
                <td>$location</td>
            </tr>
        </table>

        <p>Catégorie: $cat</p>
        ";

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $fileatt = $dompdf->output();
        if (strlen($fileatt) < 1000) {
    die('PDF generation failed or empty');
}

        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $username  = $_ENV['GMAIL_USERNAME'];
        $password  = $_ENV['GMAIL_PASSWORD'];
        $fromEmail = $_ENV['MAIL_FROM'];
        $fromName  = $_ENV['MAIL_FROM_NAME'];

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $username;
        $mail->Password   = $password;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

    //Recipients
    $mail->setFrom('BuyMatch@example.com', 'buymatch agent');
    //reciever
    $mail->addAddress('chetoziyad@gmail.com', 'Joe User');     //Add a recipient
        $mail->addStringAttachment(
            $fileatt,
            'ticket.pdf',
            'base64',
            'application/pdf'
        );

        $mail->isHTML(true);
        $mail->Subject = 'Votre ticket BuyMatch';
        $mail->Body    = 'Veuillez trouver votre ticket en pièce jointe.';
        $mail->AltBody = 'Votre ticket est en pièce jointe.';

        $mail->send();

    }
}
