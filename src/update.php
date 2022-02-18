<?php
// Include script to make a database connection

include("connectiontoserver.php");

// Empty string to be used later

$staffid='';
$staffname='';
$phonenumber='';

// Button click to update using POST method

if(!empty($_POST['update']) && !empty($_POST['id']) )  {
  $staffid = $_POST['id'];
	
  // Fetch record with ID and populate it in the form
	
  $query2 = "SELECT * FROM user WHERE staffid='".$_POST['id']."' ";
  $result = $conn->query($query2);
  if ($result->num_rows > 0) {
	  
    // Output data for each row
	  
    while($row = $result->fetch_assoc()) {
      $name=$row["staffname"];
      $email=$row["phonenumber"];
    }
	  
    echo "Current Details: " ."<b> - Name:</b> " . $staffname. " <b>Phone Number:</b>" . $phonenumber. "<br>";
  } else {
    echo "Error updating";
  }
}


?>