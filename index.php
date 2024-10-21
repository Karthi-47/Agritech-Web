<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("./Img/bg.jpg");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #f1f1f1;
        }

        form {
            margin-top: 50%;
            width: 400px;
            margin: 0 72%;
            background-color: teal;
            padding: 30px;
            border-radius: 60px 0px 60px 0px;
            box-shadow: 0 0 30px rgba(0, 0, 5, 5);
        }

        form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: lightgreen;
            font-weight: bold;
            font-size: larger;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: 0;
            cursor: pointer;
            font-size: medium;
        }

        form input {
            font-weight: bold;
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #333;
            color: rgb(255, 255, 255);
            border: 0;
            cursor: pointer;
            font-size: medium;
        }

        form input[type="submit"]:hover {
            background-color: lightgreen;
            color: #333;
            letter-spacing: 2px;
            transition: 0.4s all ease-in-out;
        }

        form label a {
            text-decoration: none;
            color: #fff;
        }

        .navbar {
            background-color: teal;
            color: #fff;
            padding: 15px;
            height: 60px;
            width: 100%;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            justify-content: flex-end;
        }

        .navbar ul li {
            padding: 5px;
            margin-left: 20px;
        }

        .navbar ul li a {
            font-weight: bold;
            font-size: larger;
            color: #fff;
            text-decoration: none;
        }

        .navbar ul li a:hover {
            color: lightgreen;
        }

        .navbar h1 {
            color: white;
            float: left;
            font-size: 30px;
            font-weight: bold;
        }

        .custom-shape-divider-bottom-1675093878 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1675093878 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 133px;
        }

        .custom-shape-divider-bottom-1675093878 .shape-fill {
            fill: teal;
        }

        .content {
            margin-right: 100px;
        }
    </style>
</head>

<body>

    <!-- Error Declaring -->
    <?php
    if (isset($_GET['register'])) {
        if ($_GET['register'] == "success") {
            echo "<script>alert('Registration Successful')</script>";
        } else {
            echo "<script>alert('Registration Failed')</script>";
        }
    }
    if (isset($_GET['login'])) {
        if ($_GET['login'] == "failed") {
            echo "<script>alert('Login Failed')</script>";
        }
    }
    if (isset($_GET['logout'])) {
        if ($_GET['logout'] == "success") {
            echo "<script>alert('Logout Successful')</script>";
        }
    }
    ?>

    <div class="custom-shape-divider-bottom-1675093878">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <!--Navbar with login button-->
    <div class="navbar">
        <nav>
            <h1><span style="color: lightgreen;">AGRI</span>&nbsp;&nbsp;TECH</h1>
            <ul>
                <li><a href="home.php">About Us</a></li>
            </ul>
        </nav>
    </div>
    <div class="content" style="margin-top: 6%;">
        <script>
            function validateform() {
                var username = document.myform.username.value;
                var password = document.myform.password.value;
                if (username == "") {
                    alert("Name shouldn't be Empty!!");
                    return false;
                } else if (password == "") {
                    alert("Password shouldn't be Empty!!");
                    return false;
                }
            }
        </script>
        <form name="myform" method="post" action="login.php" onsubmit="return validateform()">
            <h2>Login Credentials</h2>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" pattern=".+@gmail\.com">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Login" style="margin-top: 25px;">
            <label style="text-align:center;">New User ?<a href="register.html"> Click Here</a></label>
        </form>
    </div>

</body>

</html>