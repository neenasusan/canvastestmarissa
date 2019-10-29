
<html>
<head>
	<title> Test Page </title>
	<script type="text/javascript" src="'http://code.jquery.com/jquery-1.11.0.min.js'"</script>
	<script type="text/javascript">
	$(document).ready(function()
	{
	$post("confid.php",
	(clientid : $('#clientid').val()
	),function(response)
	{
	$('#clientidresult').fadeout();
	setTimeout("clientresult('clientidresult','"+escape(response)+"')",350);
	
	});
	
	return false;
	});
	});
	function clientresult(id,response)
	{
	$('#clientidloading').hide();
	$('#+id').html(unescape(response));
	$('#+id').fadeIn();
	}
	</script>
</head>


<body>
	<h1>Client ID available or not</h1>
	<br>
		ClientID: <input type="text" name="clientid id="clientid" placeholder="Enter your id" required>
	</br>
		<span id=clientidloading"></span>
		<span id=emailloading"></span>
</form>

</body>
</html>

