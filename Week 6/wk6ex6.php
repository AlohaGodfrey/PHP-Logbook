<?php
        include("myfunctions.inc");
        html_header("My second function demo");
        echo "I pay £ ". calculatetax(26000,27,7500). " tax";
        html_footer();
?>