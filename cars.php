<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="./asset/css/index.css">
    <script src="https://kit.fontawesome.com/12d8ee7d68.js"></script>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container-fluid{
        padding-top:50px;
        background-color: white;
    }
    .social-iocns .fa-brands{
      width: 40px;
      height: 40px;
      border-radius: 50%;
      text-align: center;
      line-height: 40px;
      font-size: 20px;
      color: rgb(12, 12, 12);
      background:#fff;
      /* margin-right: px; */
      margin-top: 20px;
      cursor: pointer;
  
  } 

</style>



</head>
<body> 
  <!--************************************ navbar****************************************** -->
  <div class="flex-container">  
    <img  class="logo"src="./asset/pics/carDealer.jpg" alt="">
    <?php
    if(isset($_SESSION['s_name']))
    {
      echo '<ul>';
      echo '<li><a href="indexlogin.php">Home</a></li>';
      echo '<li><a href="cars.php">Brands</a></li>';
      echo '<li><a href="booking.php">Book</a></li>';
      echo '<li><a href="orders.php">Orders</a></li>';
      echo '<li><a href="logout.php">Logout</a></li>'; 
      echo '</ul>'; 
    }
    else
    {
      echo '<ul>';
        echo '<li><a href="index.php">Home</a></li>';
        echo '<li><a href="cars.php">Brands</a></li>';
        echo '<li><a href="login.php">Login</a></li>'; 
        echo '<li><a href="register.php">Signup</a></li>'; 
    echo '</ul>'; 





    }
?>
</div>
  <!--************************************ carousel****************************************** -->
    <!-- <div class="container">
        <div class="swiper"> -->
            <!-- Additional required wrapper -->
            <!-- <div class="swiper-wrapper"> -->
              <!-- Slides -->
              <!-- <div class="swiper-slide"><img src="./asset/pics/422970.jpg"alt=""></div>
              <div class="swiper-slide"><img src="./asset/pics/ferrari.jpg" alt=""></div>
              <div class="swiper-slide"><img src="./asset/pics/lamborghini.jpg" alt=""></div>
              <div class="swiper-slide"><img src="./asset/pics/422970.jpg" alt=""></div>
              ... -->
            <!-- </div> -->
            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->
          
            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
</div> -->


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./asset/pics/1673152826758.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./asset/pics/Take your car .jpg" class="d-block w-100" wid  alt="...">
      </div>
      <div class="carousel-item">
        <img src="./asset/pics/lamborghini.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <video src="./asset/pics/bmw.mp4" class="d-block w-100" alt="..."></video>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- --------------------------------content of the page starts ---------------------------------------->


<!-- <div class="container mt-3"> 
    <img src="./asset/pics/lamborghini.jpg" alt="Paris" width="304" height="236"> 
    <img src="./asset/pics/ferrari.jpg"  alt="Paris" width="304" height="236"> 
    <img src="./asset/pics/ferrari.jpg"  alt="Paris" width="304" height="236">
  </div> -->




  <div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <a href="bmw.php"><img class="img-fluid img-responsive" src="./asset/pics/bmw.jpg" alt=""></a>
                <p class="h6">BMW</p>
        </div>
        <div class="col-4">
            <a href="audi.php"><img class="img-fluid img-responsive" src="./asset/pics/audi.jpg" alt=""></a>
            <p class="h6">AUDI</p>
        </div>
        <div class="col-4">
            <a href="benz.php"><img class="img-fluid img-responsive" src="./asset/pics/benz.png" alt=""></a>
            <p class="h6">BENZ</p>
            
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <a href="rollsroyce.php"><img class="img-fluid img-responsive" src="./asset/pics/rollsroyce.jpg" alt=""></a>
            <p class="card-text">ROLLS ROYCE</p>
        </div>
        <div class="col-4">
            <a href="lambo.php"><img class="img-fluid img-responsive" src="./asset/lamb/Lamborghini.jpg" alt=""></a>
            <p class="card-text">LAMBORGHINI</p>
        </div>
        <div class="col-4">
            <a href="ferrari.php"><img class="img-fluid img-responsive" class="roro" src="./asset/ferrari/Ferrari.jpg" alt=""></a>
            <p class="h6">FERRARI</p>
        </div>
    </div>
</div> 

<!-- --------------------------------content of the page ends   ---------------------------------------->






<!-- ******************* start footer*************** -->
<footer class="bg-primary text-center text-lg-start ">
  <!-- Grid container -->
  <div class="text-center">
    <!--Grid row-->
    <div class="row">
      
     

      <!--Grid column-->
      <div class="social-iocns">
        <h5 class="text-uppercase">Links</h5>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-github"></i>
        <i class="fa-brands fa-whatsapp"></i>
        <i class="fa-brands fa-linkedin"></i>
    
      </div>
      <!--Grid column-->

      <!--Grid column-->

  <!-- Copyright -->
  <div class="text-center" style="color: rgb(255, 255, 255);">
    &copy 2020 Copyright:
    <a class="text-dark" href="" >MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>


 
<!-- ******************* end footer*************** -->







<!-- **************script of carousel slider************** -->
<!-- ************** script of carousel slider ************** -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>