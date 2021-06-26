<?php
$host="localhost";
$username="root";
$password="";
$dbname="onion_merchant";
$conn = mysqli_connect($host,$username,$password,$dbname);
if(! $conn ) 
{
  die('Could not connect: ' . mysql_error());
}

   
?>