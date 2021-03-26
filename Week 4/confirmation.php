<?php
// Hidden Fields
// echo "<h2> Your order qty is $_POST[selqty] </h2></br>";

// Cookies
//  echo "<h2> Your order qty is $_COOKIE[selqty] </h2></br>";

// Session Variables
session_start();
echo "<h2> Your order qty is $_SESSION[selqty] </h2></br>";
echo "<h2> and the selected colour is $_POST[selcolour].</h2>";
echo "<h2> Total Cost = £" . $_SESSION['txtprice'] * $_SESSION['selqty'];
?>
