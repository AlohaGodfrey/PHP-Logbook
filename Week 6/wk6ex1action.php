<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	// Connect to server and select database
	
    $link = mysqli_connect("localhost","root","","db1_21817368");

	// Execute sql statement		
    mysqli_query($link, $sql);
	$result = mysqli_query($link, "SELECT * from test");
	
	// Execute sql statement
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>
