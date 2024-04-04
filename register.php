
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
        /* background-color: yellow; */
    }
    .logo
    {
      width: 100px;
      height: 100px;
      background-color: black;
      
    }
    body{

        margin:0;
        padding: 0;
       
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        color: #eee;

    }
    h2{
        color: #000;
        text-underline-offset:initial;
    }
    label{

        color:#000;
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
        <li><a href="./admin/adminlogin.php">Admin</a></li> 
        
        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2> <u> New Customer Registration</u>
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="register.php" method="post" >
                    
           <div>
               <label>Name</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR NAME " name="username" required>
             </div>
            
            <div><br/>
               <label>Email</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR EMAIL" name="useremail" required>
             </div>
             
             
            <div><br/>
               <label>Adress</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR ADDRESS" name="useraddress" required>
             </div>
             
             
            <div><br/>
               <label>phone</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR PHONE NUMBER" name="userphone" required>
             </div>
 
            <div><br/>
               <label>PASSWORD</label>
      <input type="password" class="form-control transparent-input" size="50" placeholder="PASSWORD PLEASE" name="pass" required>
             </div>
 
            <div><br/>
                <button type="submit" name="reg" class="btn btn-warning" value="reg">Sign up</button>
             </div>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>

</body>
</html>




<?php 
$db=mysqli_connect("localhost","root","","store");

// REGISTER USER
if(isset($_POST['reg'])) 
{
    
    
	// receive all input values from the form
    $username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$password = $_POST['pass'];
    $userphone = $_POST['userphone'];
    $useraddress = $_POST['useraddress'];
    
    if($useremail!=''|| $username!=''|| $password!=''|| $userphone!=''|| $useraddress!='' )
    {
       $query = "CALL register('$username','$useremail','$password','$userphone','$useraddress')";

        mysqli_query($db, $query);
        
        $message = "registration done ! ";
        echo "<script type='text/javascript'>alert('$message');</script>";
		 
    
    }
	else
	{
		echo "register not done!";
	 }
}

 ?>

    	