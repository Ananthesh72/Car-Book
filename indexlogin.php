<?php
    session_start();

if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carshowroom-home</title>
    <link rel="stylesheet" href="./asset/css/index.css">
    <script src="https://kit.fontawesome.com/12d8ee7d68.js"></script>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container-fluid{
        padding-top:50px;
        background-color: yellow;
    }
    h6
    {
        color: white;
    }
    .logo
    {
      width: 100px;
      height: 100px;
      background-color: black;
      
    }

    .text_design
    {
    position: relative;
    text-align: center;
    color: whitesmoke;
    } 
    .top-left {
    position: absolute;
    top: 20px;
    left:550px;
}
</style>
</head>
<body> 
  <!--************************************ navbar****************************************** -->
  <div class="flex-container">  
    <img  class="logo"src="./asset/pics/carDealer.jpg"alt="">
    
    <ul >
    <h6 style="color: yello;"> Welcome  <?=$_SESSION['s_name'];?> !! </h6> 
        <li><a href="indexlogin.php">Home</a></li>
        <li><a href="cars.php">Brands</a></li>
        <li><a href="booking.php">Book</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="logout.php">Logout</a></li>   
        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
</div>


<div class="text_design">
    <img src="./asset/pics/wallpaperbetter.jpg" style="width:100%" alt="">
    <div class="top-left"><h3>Welcome to Car Booking management System</h3></div>
</div>




<?php
include('footer.php');
?>


</body>
</html>
