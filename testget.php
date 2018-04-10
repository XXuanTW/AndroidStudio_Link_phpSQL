<?php
$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "android";
	
$conn = mysqli_connect($host,$username,$password,$dbname );

$getval = $_GET['age'];
echo $getval;
mysqli_query($conn,"SET NAMES utf8");
mysqli_query($conn,"insert into test(x,y,name) values('$getval','100','100')");



$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "android";


$con = mysqli_connect($host,$username,$password,$dbname);

?>