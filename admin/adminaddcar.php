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
        background-color: yellow;
    }
    .logo
    {
      width: 100px;
      height: 100px;
      background-color: black;
      
    }
    .space{
        display: flex;
        justify-content: center;
        margin-top: 100px;
        margin-left: 300px;
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
<div class="space">
<div class="col-md-8">
          
        <form class="text-center" action="adminaddcar.php" method="post" >
                    
           <div>
              <label>Select Your Car Model</label><br>
               
              <select name = "model" style="width:566px; height: 40px;" >
                <option value = "">|---------select car-------|</option>
                <option value = ""> </option>
                
                
				<option value = "Lamboghini Aventadoo">Lamboghini Aventador</option>
				<option value = "Lamboghini Huracan">Lamboghini Huracan</option>
				<option value = "Lamboghini Urus"> Lamboghini Urus</option>
				<option value = "Lamboghini Aventadoo"> Lamboghini Aventador</option>
				
				<option value = ""> </option>
				
				<option value = "Audi R8"> Audi R8</option>
				<option value = "Audi Q7"> Audi Q7 </option>
				<option value = "Audi RS7"> Audi RS7 </option>
				<option value = "Audi TT"> Audi TT</option>
				<option value = "Audi A6">Audi A6</option>
		
				<option value = ""> </option>
				
				<option value = "BMW M4"> BMW M4 </option>
				<option value = "BMW X6"> BMW X6 </option>
				<option value = "BMW i8">BMW i8</option>
				<option value = "BMW M3"> BMW M3</option>
				<option value = "BMW X3"> BMW X3 </option>
				<option value = "BMW X3"> BMW X6</option>
				
				<option value = ""> </option>
				
				<option value = "Rolls Royce Black Ba"> Rolls Royce Black Badge</option>
				<option value = "Rolls Royce Boat">Rolls Royce Boat</option>
				<option value = "Rolls Royce Spectre"> Rolls Royce Spectre</option>
								
				<option value = ""> </option>
				
				<option value = "Ferrari Purosangue"> Ferrari Purosangue</option>
				<option value = "Ferrari SF90">Ferrari SF90</option>
				<option value = "Ferrari Roma"> Ferrari Roma</option>				
				<option value = ""> </option>
				
				<option value = " Mercedes-Benz G">  Mercedes-Benz G </option>
				<option value = "Mercedes-Benz AMG S1">Mercedes-Benz AMG S1</option>
				<option value = "Mercedes-Benz C"> Mercedes-Benz C</option>
				
			</select>
             </div>
             
    
             
             
            <div><br/>
               <label>Chasis Number</label>
      <input type="number" class="form-control transparent-input"  placeholder="chasis" name="chasis">
             </div>
             
             
            <div><br/>
               <label>Color</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="color" name="color">
             </div>
 
 
            <div><br/>
                <button type="submit" name="add" class="btn btn-warning" value="add" onClick='alert("Car added to the Database")'>Add car</button>
             </div>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>

</div>
</div>
</body>

<!-- add the footer -->
</html>



<?php 

$db=mysqli_connect("localhost","root","","store");

// REGISTER USER
if(isset($_POST['add'])) 
{
    
    $cmodel = $_POST['model'];	// receive all input values from the form
    $chasis = $_POST['chasis'];    
	$color = $_POST['color'];
    
    
    $getmodelno= mysqli_query($db, "SELECT model from model where name = '".$cmodel."'");
                
                $numrows =mysqli_num_rows($getmodelno);
                if($numrows !=0)
                {
                    while($row=mysqli_fetch_assoc($getmodelno))
                    {
                        $dbmodelno=$row['model'];

                    }
                }
    
	
	
		
    
        $query = "INSERT into car values ('$chasis','$dbmodelno','$color')";
        
		mysqli_query($db, $query);

       
		
	
	
}

 ?>

    	
    	
          