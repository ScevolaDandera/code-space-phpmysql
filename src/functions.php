<?php

include("connectiontoserver.php");
include("read.php");

 # Check if feilds are empty
    if(!empty($_POST['staffId']) && !empty($_POST['staffName'] && !empty($_POST['phoneNumber']))){
        # If the fields are empty, display a message to the user
        echo " </br> Please fill in the fields";
    # Process the form data if the input fields are not empty
    }else{
        $staffid= $_POST['staffId'];
		
        $staffname= $_POST['staffName'];
		
		$phonenumber= $_POST['phoneNumber'];
		
        echo ('Your ID is:     '. $staffid. '</br>'); 
		
        echo ('Your Name is:'   . $staffname. '</br>');
		
		echo ('Your Phone Number:'   . $phonenumnber. '<br/>');
    }

#Insert into DB
$query = "INSERT INTO User(staffId,staffName,phoneNumber) VALUES ('$staffid','$staffname','$phonenumnber')";


if (mysqli_query($conn,$query)){
	
	echo "New record created successfully!";
}
	else{
		echo "Error inserting record!!" . $conn->error;
	}

?>