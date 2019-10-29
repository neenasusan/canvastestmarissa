<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$con = mysqli_connect("localhost","NeenaSusan","","test");
 ?>
<html>
 <head>
 </head>
 <body>
  <h1>PHP connect to MySQL</h1>

  <?php
  //Step2
  $query = "SELECT * FROM client";
  mysqli_query($con, $query) or die('Error querying database.');

  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);

  while ($row = mysqli_fetch_array($result)) {
  echo $row['clientid'] . ' ' . $row['email'] . ' ' .'</br>';
	  
  }
  ?>

</body>
</html>