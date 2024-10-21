<?php
include "config.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

// PHPMailer Settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com"; // Using Gmail SMTP
$mail->SMTPAuth = true;
$mail->Username = 'karthippm10@gmail.com'; // Gmail Username
$mail->Password = 'wekulezhxgmltrqb'; // Gmail App Password
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
