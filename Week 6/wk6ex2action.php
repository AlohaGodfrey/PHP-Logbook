<?php	
    // Connect to server and select database
    $link = mysqli_connect("localhost","root","","db1_21817368");	
	
    // Execute query
	$sql = "SELECT * from test where name = '$_GET[id]' ";
    $result = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($result);

    function delete(){
        $link = mysqli_connect("localhost","root","","db1_21817368");	
        $sql = "DELETE FROM test where name = '$_GET[id]'; ";
        $result = mysqli_query($link, $sql);
	    $row = mysqli_fetch_assoc($result);
    }
?>

<html>
    <body>
    <form action="wk6ex2update.php"  method="post">
        Name :
        <input type=text name=txtName value="<?php echo $row["name"] ?>" readonly />
        </br>
        Phone number :
        <input type=text name=txtPhoneNumber value="<?php echo $row["phone_number"] ?>" />
        </br>
        Email :
        <input type=text name=txtEmail value="<?php echo $row["email"] ?>" />
        </br>
        <input type=submit name="action"value="save"/>
        <input type=submit name="action"value="delete"/>
    </form>
    </form>
    </body>
</html>