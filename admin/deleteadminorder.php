<?php 
session_start();
if(!isset($_SESSION["admin_name"]))
{
    header("location: adminlogin.php");
}
?>
<?php
$db = mysqli_connect('localhost','root','','store');
if(isset($_POST["delete"]))
?>
