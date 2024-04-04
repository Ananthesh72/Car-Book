<?php
session_start();
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
    <link rel="website icon" type="png" href="./admin/images/carBOOK.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container-fluid{
        padding-top:50px;
        background-color: yellow;
    }
    .logo
    {
      width: 70px;
      height: 70px;
      /* background-color:yellow; */
      
    }
</style>
</head>
<body> 
  <!--************************************ navbar****************************************** -->
  <div class="flex-container">  
    <img  class="logo"src="./asset/pics/carDealer.jpg"alt="">
    <ul >
        <li><a href="index.php">Home</a></li>
        <li><a href="cars.php">Brands</a></li>
        <li><a href="login.php">Login</a></li> 
        <li><a href="register.php">Signup</a></li> 
        <li><a href="admin/admin.php">Admin</a></li> 

        
        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
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
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./asset/pics/422970.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./asset/pics/ferrari.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./asset/pics/lamborghini.jpg" class="d-block w-100" alt="...">
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




  <section>
  <iframe width="1690" height="720" src="https://www.youtube.com/embed/fKNdoxRld34" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
 

<!-- --------------------------------content of the page ends   ---------------------------------------->


<!-- ******************* start footer*************** -->
<?php
include('footer.php');
?>

 
<!-- ******************* end footer*************** -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>