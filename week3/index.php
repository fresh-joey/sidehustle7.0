<?php 

    include "mysql.php";

    function multiply($num1,$num2,$num3 = 5) {
        $answer = $num1 * $num2 * $num3;
        return $answer;
    }

echo multiply(2,4);
 
?>