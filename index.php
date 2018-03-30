<?php
	$host = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "android";
	
	$conn = mysqli_connect($host,$username,$password,$dbname );
	
	if(!$conn){
		die("link failed".mysqli_connect_error());
	}
	
	$q=mysqli_query($conn,"select * from test");
	$total_fields=mysqli_num_fields($q); // 取得欄位數
	$total_records=mysqli_num_rows($q);  // 取得記錄數
	
	while($row=mysqli_fetch_assoc($q)){
	 $tmp[]=$row;
	 }
	 
	 echo json_encode($tmp);
		
?>