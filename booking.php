<?php error_reporting(0);
session_start();
if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}


$db=mysqli_connect("localhost","root","","store");

// REGISTER USER
if(isset($_POST['book'])) 
{   // receive all input values from the form
    $cmodel = $_POST['model'];   
    $user = $_SESSION["s_name"];

   $getmodelno= mysqli_query($db, "SELECT model from model where name = '".$cmodel."'");
    $numrows1 =mysqli_num_rows($getmodelno);
	if($numrows1 !=0)
	{
        while($row1=mysqli_fetch_assoc($getmodelno))
        {
            $dbmodelno=$row1['model'];         
	    }
    }
    
    $checkcar= mysqli_query($db, "SELECT * from car where model = '".$dbmodelno."'");
    $numrows3 =mysqli_num_rows($checkcar);
   
    if($numrows3 !=0)
    {
              $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$user."'");
                $numrows2 =mysqli_num_rows($getuserid);
                if($numrows2 !=0)
                {
                    while($row2=mysqli_fetch_assoc($getuserid))
                    {
                        $dbuserid=$row2['c_id'];
                    }
                }
                 $carupdate = " DELETE from car where model = '".$dbmodelno."' LIMIT 1 ";
                mysqli_query($db, $carupdate);
                $orderupdate = " INSERT into sale2 (customer_id,carmodel) VALUES ('$dbuserid', '$dbmodelno')";
                mysqli_query($db, $orderupdate);
            $message = "Booking succesfull! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
       $message = "Oops ! the car you searching for is currently not available ! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }	
}
?>


<?php 
if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}


$db=mysqli_connect("localhost","root","","store");

// REGISTER USER
if(isset($_POST['testdrive'])) 
{   // receive all input values from the form
    $cmodel = $_POST['model'];   
    $user = $_SESSION["s_name"];

   $getmodelno= mysqli_query($db, "SELECT model from model where name = '".$cmodel."'");
    $numrows1 =mysqli_num_rows($getmodelno);
	if($numrows1 !=0)
	{
        while($row1=mysqli_fetch_assoc($getmodelno))
        {
            $dbmodelno=$row1['model'];         
	    }
    }
    
    $checkcar= mysqli_query($db, "SELECT * from car where model = '".$dbmodelno."'");
    $numrows3 =mysqli_num_rows($checkcar);
   
    if($numrows3 !=0)
    {
              $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$user."'");
                $numrows2 =mysqli_num_rows($getuserid);
                if($numrows2 !=0)
                {
                    while($row2=mysqli_fetch_assoc($getuserid))
                    {
                        $dbuserid=$row2['c_id'];
                    }
                }
                 $carupdate = " DELETE from car where model = '".$dbmodelno."' LIMIT 1 ";
                mysqli_query($db, $carupdate);
                $orderupdate = " INSERT into testdrive (customer_id,carmodel) VALUES ('$dbuserid', '$dbmodelno')";
                mysqli_query($db, $orderupdate);
            $message = "Booking succesfull for testdrive! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
       $message = "Oops ! the car you searching for is currently not available ! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }	
}
?>







<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="./asset/css/index.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./asset/css/index.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    .container-fluid{
        padding-top:50px;
        /* background-color:; */
    }
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
  select
  {
    color: black;
  }
</style>
</head>	
<body> 
  <!--************************************ navbar****************************************** -->
  <div class="flex-container">  
      <a href="http://localhost/dbms/indexlogin.php"><img  class="logo"src="./asset/pics/carDealer.jpg"alt=""></a>
    <ul >
        <li><a href="indexlogin.php">Home</a></li>
        <li><a href="cars.php">Brands</a></li>
        <li><a href="booking.php">Book</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="logout.php">Logout</a></li>  
        <!-- <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>  -->
    </ul> 
</div>

<div>
    <h1 style="color: red;"> Welcome  <?=$_SESSION['s_name'];?> !! </h1> 
</div>
</body>
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>BOOK YOUR CAR !
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="booking.php" method="post" >
                    
           <div>
               <label>Select Your Car Model</label><br>
               
              <select name = "model" style="width:575px; height: 40px;" >
                <option value = "">|--select car--|</option>
                <option value = "">LABORGHINI</option>
                
                
				<option value = "Lamboghini Aventadoo">Lamboghini Aventador</option>
				<option value = "Lamboghini Huracan">Lamboghini Huracan</option>
				<option value = "Lamboghini Urus"> Lamboghini Urus</option>
				<option value = "Lamboghini Aventadoo"> Lamboghini Aventador</option>
				
                <option value = ""></option>

				<option value = ""> AUDI</option>
                
				<option value = "Audi R8"> Audi R8</option>
				<option value = "Audi Q7"> Audi Q7 </option>
				<option value = "Audi RS7"> Audi RS7 </option>
				<option value = "Audi TT"> Audi TT</option>
				<option value = "Audi Q6">Audi Q6</option>
				<option value = "Audi A6">Audi A6</option>
                <option value = ""> </option>

				<option value = ""> BMW</option>
	
				<option value = "BMW M4"> BMW M4 </option>
				<option value = "BMW X6"> BMW X6 </option>
				<option value = "BMW i8">BMW i8</option>
				<option value = "BMW M3"> BMW M3</option>
				<option value = "BMW X3"> BMW X3 </option>
				<option value = "BMW X3"> BMW X6</option>
				<option value = "">  </option>

				<option value = "">ROLLS ROYCE </option>
				
				<option value = "Rolls Royce Black Ba"> Rolls Royce Black Badge</option>
				<option value = "Rolls Royce Boat">Rolls Royce Boat</option>
				<option value = "Rolls Royce Spectre"> Rolls Royce Spectre</option>
				<option value = "">  </option>				
				
                <option value = ""> FERRARI</option>
				
				<option value = "Ferrari Purosangue"> Ferrari Purosangue</option>
				<option value = "Ferrari SF90">Ferrari SF90</option>
				<option value = "Ferrari Roma"> Ferrari Roma</option>
                <option value = ""></option>	

				<option value = "">Mercedes-Benz </option>
				<option value = " Mercedes-Benz G">  Mercedes-Benz G </option>
				<option value = "Mercedes-Benz AMG S1">Mercedes-Benz AMG S1</option>
				<option value = "Mercedes-Benz C"> Mercedes-Benz C</option>

				<option value = ""> </option>
			</select>
             </div>
             
             <div><br>
                <button type="submit" name="book" class="btn btn-warning" value="book">Book the car</button>
             </div>
			 <div><br>
                <button type="submit" name="testdrive" class="btn btn-warning" value="test">Book for testdrive</button>
             </div>
          </div>
             
         </form>     
		
          
         
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>


</body>
</html>






        
        
       
    	
    	
            