<?php
$db=mysqli_connect("localhost","root","","store");
if(!$db)
{
	die("could not connect".mysqli_error());
}
?>