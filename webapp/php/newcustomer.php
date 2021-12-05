<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script>alert('Session not available. Please login');</script>"; 
    echo "<script> window.location.replace('../login.php')</script>";
}
if (isset($_POST["submit"])){
    include_once("../dbconnect.php");
    $name = $_POST["name"];
    $idno = $_POST["idno"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $sqlregister = "INSERT INTO `tbl_customer`(`id`, `name`, `gender`, `email`, `phone`, `address`) 
    VALUES('$idno', '$name', '$gender', '$email', '$phone', '$address')";
  
  try {
    $conn->exec($sqlregister);
    if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file ($_FILES["fileToUpload"]["tmp_name"])) {
    uploadImage($idno);
    }
    echo "<script>alert('Registration successful')</script>";
    echo "<script>window.location.replace('mainpage.php')</script>";
    } catch (PDOException $e) {
    echo "<script>alert('Registration failed')</script>";
    echo "<script>window.location.replace('newpatient.php')</script>";
    }
}
    
  function uploadImage($id)
    {
    $target_dir = "../res/images/";
    $target_file = $target_dir . $id . ".png"; 
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
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
        <a href="../login.php" class="w3-bar-item w3-button w3-right">Logout</a>
        <a href="mainpage.php" class="w3-bar-item w3-button w3- left">Home</a>
    </div>

    <div class="w3-container w3-padding-64 form-container">
        <div class="w3-card">
            <!-- Insert the title div here -->
            <!-- Insert form section here -->
        <div class="w3-container w3-pale-red">
        <p>New Customer Registration<p>
    </div>

    <form class="w3-container w3-padding" name="registerForm" action="newcustomer.php" method="POST" enctype="multipart/form-data" onsubmit="return confirmDialog()">
       <p> 
            <div class="w3-container w3-border w3-center w3-padding">
            <img class="w3-image w3-round w3-margin" src="../res/images/profile.png" style="width:100%; max-width:600px"><br>
            <input type="file" onchange="previewFile()" name="fileToUpload" id="fileToUpload"><br>
        </div></p>
        <p>
            <label>Name</label>
            <input class="w3-input w3-border w3-round" name="name" id="idname" type="text" required>
        </p>
        <p>
            <label>IC/Passport Number</label>
            <input class="w3-input w3-border w3-round" name="idno" id="idid" type="text" required>
        </p>
        <p>
            <label>Gender</label>
            <select class="w3-input w3-border w3-round" name="gender" id="idgender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
        </p>
        <p>
            <label>Email</label>
            <input class="w3-input w3-border w3-round" name="email" id="idemail" type="email" required>
        </p>
        <p>
            <label>Phone</label>
            <input class="w3-input w3-border w3-round" name="phone" id="idphone" type="phone" required>
        </p>
        <p>
            <label>Address</label>
            <textarea class="w3-input w3-border" id="idaddress" name="address" rows="4" cols="50" width="100%" placeholder="Please enter your address" required></textarea>
        </p>

        <div class="row">
            <input class="w3-input w3-border w3-block w3-pale-red w3-round" type="submit" name="confirm('')" value="Submit">
        </div>    
    </form>
        </div>
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