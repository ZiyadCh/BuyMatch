<?php
require_once  '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailService
{
    private $mail;
    private $config;
    
    public function __construct()
    {
        $this->config = require '../config/email_config.php';
        
        $this->mail = new PHPMailer(true);
        $this->configureSMTP();
    }
    
    private function configureSMTP()
    {
        $this->mail->isSMTP();
        $this->mail->Host = $this->config['smtp_host'];
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $this->config['smtp_username'];
        $this->mail->Password = $this->config['smtp_password'];
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port = $this->config['smtp_port'];
        $this->mail->setFrom($this->config['smtp_from_email'], $this->config['smtp_from_name']);
    }
    
    public function sendTicketConfirmation($userEmail, $userName = '')
    {
        try {
            $this->mail->addAddress($userEmail, $userName);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Ticket Buymatch';
            $this->mail->Body = '
                <h1>Bonjour ' . htmlspecialchars($userName) . '!</h1>
                <p>votre ticket</p>';
            $this->mail->AltBody = 'ticiket';
            
            $this->mail->send();
            return true;
        } catch (Exception $e) {
            error_log("Email failed: {$this->mail->ErrorInfo}");
            return false;
        }
    }
}