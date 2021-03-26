<?php
  if ($_POST["txtage"] < 21) 
  {
	echo "You are under 21 years old<br/>";
    echo "Your gender is $_POST[radsex]";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
    echo "Your gender is $_POST[radsex]";
  }
?>
