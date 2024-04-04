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
        /* background-color:; */
    }
    .logo
    {
      width: 100px;
      height: 100px;
      background-color: black;
      
    }
    .space{
        margin-right: 100px;
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



<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>CARS CURRENTLY AVAILBLE IN SHOWROOM
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
         
         
         
          <div class="s">
                 
                 
                  <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
        
                    <tr>
                        <th class = "text-center">MANCF NO</th>
                        <th class = "text-center">CAR NAME</th>
                        <th class = "text-center">NO. AVAILABLE</th>  
                        <!-- <th class ="text-center">Edit</th>
                        <th class="text-center">Delete</th>  -->
                     </tr>
                              <?php
                                 $db=mysqli_connect("localhost","root","","store");
            
                                    //to get his orders     
                                    $getcars= mysqli_query($db, "SELECT * from model");
                                    $numrows3 =mysqli_num_rows($getcars);
                                    if($numrows3 !=0)
                                    {
                                        while($row3=mysqli_fetch_assoc($getcars))
                                        {
                                                        $dbmodelno=$row3['model'];
                                                         $dbmodelname=$row3['name'];
                                                        
                                                    // get his car model name
                                                $getcarnumbers = mysqli_query($db, "SELECT * from car where model = '".$dbmodelno."'");
                                                $numrows2 =mysqli_num_rows($getcarnumbers);

                                                            echo "<tr>" ;
                                                            echo "<td>$dbmodelno</td>";
                                                           echo "<td>$dbmodelname</td>";
                                                           echo "<td> $numrows2</td>";  
                                                        //    echo "<td>      </td>";
                                                        //    echo "<td>      </td>";
                                                            echo" </tr>";
                                        }
                                    }
                                      
                            ?>
                   </table>

          </div>
    
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>
</body>
</html>