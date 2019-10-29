<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'NeenaSusan');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'test');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("connection failed");

if (isset($_POST) & !empty($_POST))
	
	$clientid = mysqli_real_escape_string($db,$_POST["clientid"]);
	$sql="select *from client where clientid = '10101010'";
	$result=mysqli_query($db,$sql);
	$count= mysqli_num_rows($result);
if($count>0){
	
	echo("clientid already exist");
}
else
	echo("clientid doesnt exist");
	
?>