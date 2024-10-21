<?php
session_start();
include "config.php";
include "mail.php";

$dAddress = $_POST['dAddress'];
$pMethod  = $_POST['payment'];

$cName = $_SESSION['NAME'];
$cEmail = $_SESSION['EMAIL'];
$cPhone = $_SESSION['PHONE'];

$sql = "INSERT INTO orders (CNAME, EMAIL, PHONE, D_ADDRESS, P_METHOD) VALUES ('$cName', '$cEmail', '$cPhone', '$dAddress', '$pMethod')";

if (mysqli_query($conn, $sql)) {
    $mail->setFrom('karthippm10@gmail.com', 'AGRI TECH');
    $mail->addAddress($cEmail, $cName);
    $mail->isHTML(true);

    $mail->Subject = "Order Confirmation";
    $mail->Body = "<h1>Order Confirmation</h1><br><h2>Dear $cName,</h2><br><p>Thank you for shopping with us. Your order has been placed successfully. We will deliver your order to $dAddress within 3-5 working days.</p><br><p>Regards,<br>AGRI TECH</p>";
}

if ($mail->send()) {
    header("Location: home_page.php?msg=success");
} else {
    header("Location: home_page.php?msg=failed");
}
