<html>
  <head><title>Select Size page</title></head>
    <body>
    <?php 
        session_start();
        $_SESSION['selqty'] = $_POST['selqty'];
        
    ?>
      <form action="selectcolour.php"  method="post">
	  Select the size for the <?php echo $_SESSION["selqty"] ?> widgets you are ordering
   	  <select name="selsize">
   	  <option value = 15.75 >Small</option>
	  <option value = 16.75>Medium</option>
	  <option value = 17.75>Large</option>
	  <option value = 18.75>Extra Large</option>
	
        </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	