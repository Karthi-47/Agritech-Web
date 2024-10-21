<?php
include "config.php";
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

// Selecting matchning results from the database
$sql = "SELECT * FROM users WHERE EMAIL = '$user' AND PASS = '$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
   $row = mysqli_fetch_assoc($result);
   if ($row['EMAIL'] == $user && $row['PASS'] == $pass) {
      $_SESSION['NAME'] = $row['NAME'];
      $_SESSION['EMAIL'] = $row['EMAIL'];
      $_SESSION['PHONE'] = $row['PHONE'];

      header("Location: home_page.php?msg=success");
   }
} else {
   header("Location: index.php?login=failed");
}
