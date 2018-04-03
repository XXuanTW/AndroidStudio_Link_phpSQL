<?php
$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "android";
	
$conn = mysqli_connect($host,$username,$password,$dbname );

if(!$conn){
		die("link failed".mysqli_connect_error());
	}
	
$getval = $_GET['qrcodeid'];
/*echo $getval."<br>";*/
mysqli_query($conn,"SET NAMES utf8");
/*mysqli_query($conn,"INSERT INTO QRcode(`username`, `age`, `checkid`) VALUES ('lin', '12', '0')");
*/
$sql="select * from Qrcode Where id = $getval";
$data=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($data))
  {
	  $json[]=$row;
  }
   echo json_encode($json);   


?>