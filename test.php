
<?php

$db=mysqli_connect("localhost","root","neenasusan","test");

if(mysqli_connect_errno($db))
{
		echo 'Failed to connect';
}

if(isset($_POST['clientid']) && isset($_POST['email'])) {
    $clientid = $_POST['clientid']; 
    $email = $_POST['email'];
}
	
$query = "select *from client where clientid = '$clientid'";
$result=mysqli_query($db,$query);
$count= mysqli_num_rows($result);

if($count>0){
	
	header('Location: sorry.html');
	exit;
	
}
else
	header('Location: new.php');
		
?>