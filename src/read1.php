<?php

include("connectiontoserver.php");

# Read From the database and display in the table
$query2 = "SELECT * FROM User";
$result = $conn->query($query2);
if ($result->num_rows > 0) {
    # Output data for each row
    echo "<table id='table' border='1' id='example' class='table table-striped responsive-utilities table-hover'>
	
              <thead>
			  
                <tr>
                <th>Staff ID</th>
                <th>Staff Name</th>
                <th>Phone Number</th>
                <th>Delete</th>
                <th>Edit</th>
                </tr>
				
              </thead> ";
	
	
    while($row = $result->fetch_assoc()) {
		
       echo "<tr id='User' ",">",
		
            "<td>", $row["staffId"],"</td>",
            "<td>", $row["staffName"],"</td>",
            "<td>", $row["phoneNumber"],"</td>",
		
		#edit records
		"<td>",
                " <form action='update.php' method='post'>
                 <input name='id' value='", $row["staffId"],"' hidden>
                 <button type='submit' name='update' value='update'> Edit </button>
                </form>",
        " </td>",
		
		
		#delete records
            "<td>",
                "<form action='form-post.php' method='post'>
                 <input name='id' value='",$row["staffid"],"' hidden>
                 <button type='submit' name='delete' value='delete'>Delete</button>
                </form>",
            "</td>",
            "</tr>";
    }
					echo  "</table>";
}

					else {
						echo "No Record!";
					}



?>