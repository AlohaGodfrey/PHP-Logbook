<html>
	<?php
		// Connect to server and select database
		$link = mysqli_connect("localhost","root","","db1_21817368");

		

		if ($_POST['action'] == 'save') {
			$sql = "UPDATE test SET email='$_POST[txtEmail]', phone_number='$_POST[txtPhoneNumber]'
		where name ='$_POST[txtName]';";
		} else {
			$sql = "DELETE FROM test where email='$_POST[txtEmail]';";
		}

		// // Execute sql statement
		
		mysqli_query($link, $sql);
		$result = mysqli_query($link, "SELECT * from test");
		
		// Display Updated table
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "$row[name]  $row[email]  $row[phone_number] <br/>";
		}
	?>


</html>
