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
        /* background-color: /; */
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
        <li><a href="cars.php">Brands</a></li>
        <li><a href="booking.php">Book</a></li>
        <li><a href="orders.php">Orders</a></li> 
        <li><a href="logout.php">Logout</a></li> 
        
        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
</div>
<div class="text-center">
    <h1>BOOKED CARS</h1>
</div>
<div class="container-fluid row">
          
    <div class="col-md-3"></div>
          
            <div class="s">
                 
                 
                <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
                    <tr>
                        <th class = "text-center">SALE ID</th>
                        <th class = "text-center">CUSTOMER ID</th>
                        <th class = "text-center">CAR  MODEL</th>
                        <th class = "text-center">DATE-TIME-OF-BOOK</th>
                        
                       </tr>
                              <?php
                                    $db=mysqli_connect("localhost","root","","store");
                                    $cname = $_SESSION["s_name"];

                                    // to get the customerid from his name  
                                   $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$cname."'");
                                    $numrows =mysqli_num_rows($getuserid);
                                    if($numrows !=0)
                                    {
                                        while($row=mysqli_fetch_assoc($getuserid))
                                        {
                                            $dbuserid=$row['c_id'];
                                        }
                                    }
                      
                                    //to get his orders    
                                    $getorders= mysqli_query($db, "SELECT * from sale2 where customer_id = '".$dbuserid."'");
                                    $numrows3 =mysqli_num_rows($getorders);
                                    if($numrows3 !=0)
                                    {
                                        while($row3=mysqli_fetch_assoc($getorders))
                                        {
                                                        $dbsaleid=$row3['sale_id'];
                                                         $dbcustomerid=$row3['customer_id'];
                                                        $carnumber =$row3['carmodel'];
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

                                                        echo "<tr>" ;
                                                            echo "<td>$dbsaleid</td>";
                                                           echo "<td>$dbcustomerid</td>";
                                                           echo "<td>$dbusercarname</td>";  
                                                             echo "<td>$date</td>";
                                                            echo" </tr>";
                                        }
                                    }
                      else
                      {
                         $message = "You have no orders in your name yet ! !";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                      }
                                      
                            ?>
                </table>

            </div>
        </div>



        <div class="text-center">
            <h1>BOOKED FOR TEST DRIVE</h1>
        </div>




        <div class="container-fluid row">
          
    <div class="col-md-3"></div>
          
            <div class="s">
                 
                 
                <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
                    <tr>
                        <th class = "text-center">Test Drive ID</th>
                        <th class = "text-center">CUSTOMER ID</th>
                        <th class = "text-center">CAR  MODEL</th>
                       </tr>
                              <?php
                                    $db=mysqli_connect("localhost","root","","store");
                                    $cname = $_SESSION["s_name"];

                                    // to get the customerid from his name  
                                   $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$cname."'");
                                    $numrows =mysqli_num_rows($getuserid);
                                    if($numrows !=0)
                                    {
                                        while($row=mysqli_fetch_assoc($getuserid))
                                        {
                                            $dbuserid=$row['c_id'];
                                        }
                                    }
                      
                                    //to get his orders    
                                    $getorders= mysqli_query($db, "SELECT * from testdrive where customer_id = '".$dbuserid."'");
                                    $numrows3 =mysqli_num_rows($getorders);
                                    if($numrows3 !=0)
                                    {
                                        while($row3=mysqli_fetch_assoc($getorders))
                                        {
                                                        $dbsaleid=$row3['td_id'];
                                                         $dbcustomerid=$row3['customer_id'];
                                                        $carnumber =$row3['carmodel'];
                                                
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

                                                        echo "<tr>" ;
                                                            echo "<td>$dbsaleid</td>";
                                                           echo "<td>$dbcustomerid</td>";
                                                           echo "<td>$dbusercarname</td>";            
                                                            echo" </tr>";
                                        }
                                    }
                      else
                      {
                         $message = "You have no orders in your name yet ! !";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                      }
                                      
                            ?>
                </table>

            </div>
        </div>
    </body>
</html>