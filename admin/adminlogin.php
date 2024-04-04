<?php
session_start();

if(isset($_POST["login"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    
	$user=$_POST['user'];
	$pass=$_POST['pass'];
    
    $db = mysqli_connect("localhost","root","","store");
    
	$query=mysqli_query($db,"SELECT * FROM admin WHERE admin_name='".$user."' AND admin_pass='".$pass."'");
    
   	$numrows = mysqli_num_rows($query);
    
	if($numrows !=0)
	{
        while($row=mysqli_fetch_assoc($query))
        {
            $dbusername=$row['admin_name'];
            $dbpass=$row['admin_pass'];
               
	    }

        
        if($user == $dbusername && $pass == $dbpass)
        {

            $_SESSION['admin_name']= $dbusername;

            /* Redirect browser */
            header("Location: admin.php");
        }
	} 
    else 
    {
	echo "Invalid username or password!";
	}

} 
    else {
	echo "All fields are required!";
        }
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
        /* background-color: ; */
        color:wheat;
        
    }
    .logo
    {
      width: 100px;
      height: 100px;
      background-color: black;
      color: white;
    }
    .space{
        margin-right: 100px;
    }
   

  h2
  {
    color: black;
  }
  label
  {
    color: black;
  }
 
  
</style>

<body> 

<div class="flex-container">  
   <a href="http://localhost/dbms/index.php"><img  class="logo" src="./images/carDealer.jpg" alt="" ></a>
    <ul >
        <li><a href="http://localhost/dbms/index.php">Home</a></li>
        <li><a href="http://localhost/dbms/cars.php">Brands</a></li>
        <li><a href="http://localhost/dbms/login.php">Login</a></li> 
        <li><a href="http://localhost/dbms/register.php">Signup</a></li> 
        <li><a href="admin/admin.php">Admin</a></li> 

        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
</div>



<div class="header-bottom">
	<div class="wrap">
	<h1 class="text-center"><u>ADMIN LOGIN</u></h1>
		<div class="page-not-found">
		<div class="text-center">
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
        <form class="text-center" action="adminlogin.php" method="post" >            
            <div ><br/>
               <label>USERNAME</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="ADMIN ID" name="user" required >
             </div>
 
            <div ><br/>
               <label>PASSWORD</label>
      <input type="password" class="form-control transparent-input" size="50" placeholder="ADMIN PASSWORD" name="pass" required>
             </div> 
            <div><br/>
                <button type="submit" class="btn btn-primary" value="login" name="login">Sign in</button>
             </div>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div> 
		</div>
	</div>
</div>

</head>
</body>
</html>
