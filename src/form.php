<!doctype html>

<?php
 include("connecttoserver.php");
include("read.php");
?>
<html>	
<head>
<meta charset="utf-8">
<title>Key Dispact</title>
</head>

<body>
	
	
<form action="functions.php" method="post">
		
		Staff Id: <input type="text" name ="staffId" >
		<br><br>
		Staff Name: <input type="text" name="staffName" >
		<br><br>
		Phone Number: <input type="text" name= "phoneNumber">
		<br><br>
  <input type="submit" name= "save" value="submit">
	
</form>
	
</body>
</html>
