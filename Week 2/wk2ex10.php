<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Year</th><th>Subject</th></tr> 
<?php
    $mymarks["Year 1"] = 55;
    $mymarks["Year 2"] = 65;
    $mymarks["Year 3"] = 75;
  
    while(list($index,$value) = each($mymarks))
    {
      echo "In  $index  my grade was  $value <br/>";
      echo "<tr><td>$index</td><td>$value</td></tr>";
    }
    echo  "<br/>My best year was Year 3 when I averaged ".$mymarks["Year 3"]."<br/>";

   
?>
</table>
</body>
</html>


