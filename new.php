<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;ali}
</style>
 
 
<title>Add Employee</title>
</head>
<body>
 
<form method="post" action="test1.php">
<label>CLIENT ID</label>
<input type="text" name="clientid" pattern="[0-9]{8}" required>
<br />
<label>EMAIL</label>
<input type="text" name="email" />
<br />
<input type="submit" value="Add Employee">
</form>
  
</body>
</html>