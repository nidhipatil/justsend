<?php 
	include_once'read_details.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>code</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="container">
	
	<form method="post" action="read_details.php">
		<div class="header">
	    		<h1>JUST SEND</h1>
		</div>
		 
		<input type="text" name="code" placeholder="put the code">

			
			<a href="message.php" class="button"><b>READ A MESSAGE</b></a>
			<a href="index.php" class="button"><b>HOME</b></a>
	</form>
	<a href="index.php">Back</a>
</div>


</body>
</html>

	