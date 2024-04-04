<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/index.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/12d8ee7d68.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ROLLS Royce</title>
<!-- style -->
<style>
.box_wrapper {
	padding: 10px 17px 10px 15px;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: bold;
	line-height: 21px;
	color: #fff;
	border-bottom: 10px solid #0030df;
	background: #000000;
	border-right: 1px solid #000000;
	text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
	filter: none;
	-webkit-border-radius: 3px;
	border-radius: 3px;
}
.container-fluid
{
    margin-top: 10px;
}
/*ZoomIn Hover Effect*/
.hover-zoomin a {
    display: block;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
  }
  .hover-zoomin img {
    width: 100%;
    height: auto;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    border-radius: 20px;
  }
  .hover-zoomin:hover img {
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
  }

img .img-fluid img-responsive{
    width: auto;
    height:auto;
  }

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
  .hot
  {
    width: 100px;
      height: 100px;
      background-color: black;
  }  
</style>

</head>
<body>
<div class="flex-container">  
    <img  class="logo"src="./asset/pics/carDealer.jpg" alt="">
    <ul >
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li> 
        <li><a href="cars.php">Brands</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li> 
        <li><a href="signup.php">Signup</a></li> 
        
        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
</div>








<!-- ************************************************************************************** -->
 <div class="main-content">
        <div class="wrap">
            <div class="main-box">
               <div class="box_wrapper"><h1>Rolls Royce <img class="hot" src="./asset/rollls/Rolls-Royce_logo_PNG1.png" alt=""></h1></div>
               
               <div class="container-fluid">
                <div class="row">
                    <div class="col-4 hover-zoomin">
                        <a href="rollsbb.php"><img class="img-fluid img-responsive" src="./asset/rollls/rolls_royce_black_badge.jpg" alt=""></a>
                            <p class="h6">Rolls Royce Black Badge</p>
                    </div>
                    <div class="col-4 hover-zoomin">
                        <a href="rollsboat.php"><img class="img-fluid img-responsive" src="./asset/rollls/rolls_royce_boat.jpg" alt=""></a>
                        <p class="h6">Rolls Royce boat</p>
                    </div>
                    <div class="col-4 hover-zoomin">
                        <a href="rollsspectre.php"><img class="img-fluid img-responsive" src="./asset/rollls/rolls_royce_spectre_1.jpg" alt=""></a>
                        <p class="h6">Rolls Royce Spectre</p>
                        
                    </div>
                </div>  
            </div>
        </div>
    </div>
    
    <?php
        include('footer.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>