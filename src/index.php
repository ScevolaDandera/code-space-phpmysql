
<!doctype html>

<?php
require ("functions.php")
	
?>

<html>
<head>
<meta charset="utf-8">
<title>Key Dispact</title>
</head>

<body>
	<form action="Keydispatch.php" method="get">
		
		StaffId: <input type="text" name ="staffid">
		<br>
		StaffName: <input type="text" name="staffname" >
		<br>
		PhoneNumber: <input type="text" name= "phonenumber">
		<br>
		<input type="submit">
		
	</form>
	
	<?php
	
		$usersData = getUsersData (getId());
	?>
	


	
</body>
</html>
