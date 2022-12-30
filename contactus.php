<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mailheader = "Form :".$name."<".$email.">\r\n";

$recipient = "kalanisathyangi@gmail.com" ;

mail($recipient, $subject, $message, $mailheader ) or die("Error!");

echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doc</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container01" id="container01">
        <div class="navbar01">
            <img src="images/2.png" class="logo01" width="100" height="100">
            <nav id="nav-01">
                <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="more.html">More</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="downloads.html">Downloads</a></li>
                <li><a href="about us.html">About us</a></li>
                <li><a href="login.php">Join us</a></li>
                <li><a href="contactus.html">Contact us</a></li>
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" id="menu01" width="20" height="20">
        </div>


        <div class="form-box" id="contactbox">
            <h1>Thank you for Contacting us....<br><br> Go back to the
                <br><a href="index.html"><i>Home..</i></a>
            </h1>

        </div>
    </div>



</body>

</html>';

?>