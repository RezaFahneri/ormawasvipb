<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class PHPMailer_Load
{
    public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load(){
        // Include PHPMailer library files
        require_once APPPATH.'third_party/PHPMailer/language/Exception.php';
        require_once APPPATH.'third_party/PHPMailer/language/PHPMailer.php';
        require_once APPPATH.'third_party/PHPMailer/language/SMTP.php';

        $mail = new PHPMailer;
        return $mail;
    }
}