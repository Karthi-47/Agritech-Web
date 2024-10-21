<?php
include "config.php";

if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $userType = $_POST['userType'];
    $gender   = $_POST['gender'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $password = $_POST['password'];

    // Insert query
    $sql = "INSERT INTO users (NAME, EMAIL, PASS, GENDER, PHONE, ADDRESS, USER_TYPE) VALUES ('$name', '$email', '$password',  '$gender', '$phone', '$address', '$userType')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?register=success");
    } else {
        header("Location: index.php?register=failed");
    }
}
