<html>
  <head><title>Select colour page</title></head>
    <body>

    
    <?php 
        // <!-- Session Method -->
        session_start();
        $_SESSION['txtprice'] = $_POST['selsize'];

        // <!-- Cookies Method -->
        // $cookieName = 'selqty'; 
        // setcookie($cookieName, $_POST["selqty"]);
    ?>


      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $_SESSION["selqty"] ?> 
    widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <!-- Hidden Field
        <input type="hidden" name ="selqty" value="<?php echo $_POST["selqty"]?>"/> -->
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	
