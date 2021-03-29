<html>
	<?php
		// Connect to server and select database
		$link = mysqli_connect("localhost","root","","db1_21817368");

		// // Execute sql statement
		$sql = "DELETE FROM test where email='$_POST[txtEmail]';";
		mysqli_query($link, $sql);
		$result = mysqli_query($link, "SELECT * from test");
		
		// Display Updated table
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "$row[name]  $row[email]  $row[phone_number] <br/>";
		}
	?>


</html>
