<?php
$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "android";
	
$conn = mysqli_connect($host,$username,$password,$dbname );

if(!$conn){
		die("link failed".mysqli_connect_error());
	}
$getval = $_GET['phone'];
mysqli_query($conn,"SET NAMES utf8");
$sql="SELECT * FROM qrcode Where ticket != original AND phone = $getval";
$data=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($data))
  {
	  $json[]=$row;
  }
   echo json_encode($json);   
?>