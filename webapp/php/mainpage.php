<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script>alert('Session not available. Please login');</script>"; 
    echo "<script> window.location.replace('../login.php')</script>";
}  
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../style/style.css">
<script src="../javascript/script.js"></script>
<title>AMIRUL THAI & MALAY RESTAURANT</title>
</head>

<body>
    <div class="w3-header w3-container w3-pale-red w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px + 4vw);">AMIRUL THAI & MALAY RESTAURANT</h1>
        <p style="font-size:calc(8px + 1vw);;">One dinner that combines Thai and Malay tastes. It is our pleasure to serve you!</p>
    </div>

    <div class="w3-bar w3-light-grey">
        <a href="#contact" class="w3-bar-item w3-button w3-right">Logout</a>
        <a href="newcustomer.php" class="w3-bar-item w3-button w3-left">New Customer</a>
    </div>

    <footer class="w3-footer w3-pale-red w3-center">
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>© 2021 copyright all right reserved | Designed by <a class="text-white">Amirul Thai & Malay Restaurant</a></p>
</footer>

</body>
</html>