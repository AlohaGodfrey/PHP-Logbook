<?php

  $mymarks["CO453"] = 38;
  $mymarks["CO457"] = 67;
  $mymarks["CO450"] = 72;
  $mymarks["FY006"] = 54;
  $mymarks["CO451"] = 59;
  $mymarks["CO454"] = 61;

  $total = 0;

  while(list($index,$value) = each($mymarks))
  {
    echo "Mr grade for  $index was  $value <br/>";
    $total = $total + $mymarks[$index];
  }

  $average = $total /  6;    
  echo "<br/> My average mark was $average <br/>";


?>