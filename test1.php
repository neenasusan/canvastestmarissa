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

$query = "SELECT clientid FROM client WHERE clientid = '".$clientid."'";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result,MYSQLI_NUM);
$n = mysqli_affected_rows($db);
if($n >= 1){
    echo "ClientID already exist";
}
else{
    $insert = "INSERT INTO client (clientid,email) VALUES ('$clientid','$email')";
    mysqli_query($db,$insert);
	?><p>User: <?php echo $clientid ?> successfully added.</p><?php
	header('Location: new1.php');
}
mysqli_close($db);

?>