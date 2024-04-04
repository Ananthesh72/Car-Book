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
        /* background-color: yellow; */
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
<h1 style="text-align:center; margin-top: 90px; color:red; "><u>ADMINISTRATOR</u></h1>
</div>

<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>THE COMPANY ORDER SUMMARY
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
         
         
         
          <div class="s">
                 
                 
                  <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
        
                    <tr>
                        <th class = "text-center">ORDER NUMBER</th>
                        <th class = "text-center">CUSTOMER ID</th>
                        <th class = "text-center">CUSTOMER NAME</th>
                        <th class = "text-center">CAR MODEL</th>
                        <th class = "text-center">DATE OF ORDER</th>
                       
            
                       </tr>
                              <?php
                                    $db=mysqli_connect("localhost","root","","store");
                                    
                                    //to the  orders    
                                    $getorders= mysqli_query($db, "SELECT * from sale2 ");
                                    $numrows3 =mysqli_num_rows($getorders);
                                    if($numrows3 !=0)
                                    {
                                        while($row3=mysqli_fetch_assoc($getorders))
                                        {
                                                        $dbsaleid=$row3['sale_id'];
                                                        $dbcustomerid=$row3['customer_id'];
                                                        $carnumber=$row3['carmodel'];
                                                        $date=$row3['ordertime'];
                                        
                                                    

                                                    // get his car model name

                                                $getusercarname = mysqli_query($db, "SELECT name from model where model = '".$carnumber."'");
                                                $numrows2 =mysqli_num_rows($getusercarname);
                                                if($numrows2 !=0)
                                                {
                                                    while($row2=mysqli_fetch_assoc($getusercarname))
                                                    {
                                                        $dbusercarname=$row2['name'];
                                                    }
                                                }
                                                  
                                                   // to get the customer  name 
                                                $getusername= mysqli_query($db, "SELECT name from customer where c_id = '".$dbcustomerid."'");
                                                $numrows =mysqli_num_rows($getusername);
                                                if($numrows !=0)
                                                {
                                                    while($row=mysqli_fetch_assoc($getusername))
                                                    {
                                                        $dbusername=$row['name'];
                                                    }
                                                }
                                                            echo "<tr>" ;
                                                            echo "<td>$dbsaleid</td>";
                                                            echo "<td>$dbcustomerid</td>";
error_reporting(E_ERROR | E_PARSE);                         echo "<td>$dbusername</td>";
                                                            echo "<td>$dbusercarname</td>";
                                                            echo "<td>$date</td>";
                    
                                                            echo" </tr>";
                                      
                                        }

                                    }
                                   
                            ?>
                        
          </div>  
        </div>   
		</div>
	</div>
</div>
          
</body>
</html>

