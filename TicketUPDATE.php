<?php
$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "android";
	
$conn = mysqli_connect($host,$username,$password,$dbname );

if(!$conn){
		die("link failed".mysqli_connect_error());
	}

$getval = $_GET['checkid'];
mysqli_query($conn,"SET NAMES utf8");
$sql="UPDATE Qrcode SET ticket = ticket-1 where checkid = $getval";
$data=mysqli_query($conn,$sql);


$sql="select * from Qrcode Where checkid = $getval";
$data=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($data))
  {
	  $json[]=$row;
  }
   echo json_encode($json);   
?>