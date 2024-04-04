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
    <img  class="logo"src="./asset/pics/carDealer.jpg"alt="">
    <ul >
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="cars.php">Brands</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="logout.php">Logout</a></li>  
        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
</div> 

<!-- -----------------********** main content*******----------------- -->
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <a href="bmw.php"><img class="img-fluid img-responsive" src="./asset/pics/BMW.jpg" alt=""></a>
                <p class="h6">BMW</p>
        </div>
        <div class="col-4">
            <a href="audi.php"><img class="img-fluid img-responsive" src="./asset/pics/ferrari.jpg" alt=""></a>
            <p class="h6">AUDI</p>
        </div>
        <div class="col-4">
            <a href="benz.php"><img class="img-fluid img-responsive" src="./asset/pics/ferrari.jpg" alt=""></a>
            <p class="h6">BENZ</p>
            
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <a href="ford.php"><img class="img-fluid img-responsive" src="./asset/pics/Rolls royce.jpg" alt=""></a>
            <p class="card-text">Rolls Royce</p>
        </div>
        <div class="col-4">
            <a href="toyota.php"><img class="img-fluid img-responsive" src="./asset/pics/ferrari.jpg" alt=""></a>
            <p class="card-text">TOYATA</p>
        </div>
        <div class="col-4">
            <a href="cla.php"><img class="img-fluid img-responsive" src="./asset/pics/ferrari.jpg" alt=""></a>
            <p class="h6">CLA</p>
        </div>
    </div>
</div> 


<!-- -----------------********** add footer*******----------------- -->
</body>
</html>