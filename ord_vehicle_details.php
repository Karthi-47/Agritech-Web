<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-color: lightgreen;
        }
        .navbar{
            background-color: teal;
            color: #fff;
            height: 36px;
            width: 100%;
            padding: 13px;
            position: sticky;
            top: 0;
            text-align: left;
            margin-bottom: 40px;
        }
        .navbar h1{
            color: white;
            font-size: 30px;
            font-weight: bold;
            margin-top: 1px;
            text-align: left;
            padding-left: 30px;
        }
        .reg{
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 20px;
            margin-top: 100px;
            width: 800px;
            margin:0 23%;
            background-color: rgb(79, 86, 86);
            border-radius: 20px 20px 20px 20px;
            box-shadow: 0 0 30px rgba(0,0,5,5);
        }
        .reg h2{
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }
        .reg label{
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: lightgreen;
            font-weight: bold;
            font-size: larger;
        }
        .reg input[type="submit"]{
            margin-top: 20px;
            margin-left: 23%;
            width: 55%;
            background-color: #333;
            color: #fff;
            border: 0;
            cursor: pointer;
            font-size: medium;
        }
        .reg input[type="submit"]:hover{
            color: black;
            background-color: lightgreen;
            transition: 0.4s all ease-in-out;
            letter-spacing: 2px;
        }
        .reg input[type="reset"]:hover{
            color: white;
            background-color: rgb(188, 50, 50);
        }
        .reg input{
            font-weight: bold;
            display: block;
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .reg .select{
            border-radius: 5px;
        }
        textarea{
            resize: none;
            font-size: large;
            border-radius: 5px;
        }
        select{
            width: 30%;
            padding: 7px;
            font-size: 13px;
        }
        .reg input[type="reset"]{
            margin-top: 20px;
            background-color: white;
            width: 15%;
            margin-left: 80%;
            font-size: 15px;
        }
        #username{
            width: 40%;
        }
        .reg button{
            margin-top: 10px;
            background-color: white;
            width: 20%;
            margin-left: 5%;
            font-size: 15px;
            border-radius: 30px;
            border: 1.5px solid black;
            padding: 10px;
        }
        .reg button[type="button"]{
            margin-right: 300px;
        }
        .reg button:hover{
            color: white;
            background-color: lawngreen;
            font-weight: bold;
            letter-spacing: 2px;
            transition:0.4s all ease-in-out;
        }
        .reg button:hover[button="reset"]{
            color: white;
            background-color: lightgreen;
            font-weight: bold;
            letter-spacing: 2px;
            transition:0.4s all ease-in-out;
        }
        #time{
          width: 80px;
        }
        .btn{
            padding: 10px 60px;
            background: #fff;
            border: 0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;
        }
        .popup{
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            width: 400px;
            background: #fff;
            border-radius: 6px;
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }
        .open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }
        .popup img{
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .popup h2{
            font-size: 38px;
            margin: 30px 0 10px;
            font-weight: 500;
        }
        .popup button{
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background: #6fd649;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <nav>
            <h1><span style="color: lightgreen;">AGRI</span>&nbsp;&nbsp;TECH</h1>
        </nav>
    </div>
    <!--register.html-->
    <div class="reg">
        <form name="myform" id="myform" method="post" action="order_vec_mail.php" onsubmit="reset(); return false();">
            <h2>Order Confirmation</h2>
            <label for="dAddress">Destination Address</label>
            <textarea id="dAddress" name="dAddress" rows="2" cols="86" placeholder="Enter Address"></textarea>
            <label for="payment">Payment Method</label>
            <select name="payment" id="payment">
                <option value="select">Select Method</option>
                <option value="cod">Cash On Delivery</option>
                <option value="upi">BHIM/UPI</option>
            </select><br>
            <button type="button" data-inline="true" onclick="location.href='vehicles.html'">Back</button>
            <button type="submit" data-inline="true" data-theme="b" class="btn" onclick="openpopup();">Order Now</button>
        </form>
    </div>    
        <div class="popup" id="popup">
            <img src="./Img/tick.png" alt="No-Image">
            <h2>Thank You!</h2>
            <p>Your Booking Details has been successfully submitted. Thanks!</p>
            <button type="button" onclick="closepopup()">OK</button>
        </div>
    <script>
        let popup = document.getElementById("popup");

        function openpopup(){
            popup.classList.add("open-popup");
        }
        function closepopup(){
            popup.classList.remove("open-popup");
        }
    </script>

</body>
</html>
