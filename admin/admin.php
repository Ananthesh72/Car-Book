<?php
    session_start();
if(!isset($_SESSION["admin_name"]))
{
    header("location: adminlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carshowroom-home</title>
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://kit.fontawesome.com/12d8ee7d68.js"></script>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container-fluid{
        padding-top:50px;
        background-color: yellow;
    }
    .logo
    {
      width: 100px;
      height: 100px;
      background-color: black;
      
    }
</style>
</head>
<body> 
  <!--************************************ navbar****************************************** -->
  <div class="flex-container">  
    <img  class="logo"src="./images/carDealer.jpg"alt="">
    <ul >
        <li><a href="admin.php">Home</a></li>
        <li><a href="admincars.php">Cars</a></li>
        <li><a href="adminaddcar.php">Car++</a></li>
        <li><a href="adminorders.php">Orders</a></li>
        <li><a href="adminlogout.php">Logout</a></li>  
        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
</div>

<div>
<h1 style="text-align:center; margin-top: 220px; color:red; "><u>ADMINISTRATOR</u></h1>
</div>
</body>
<!-- add the footer -->
</html>
