<?php 

include "mysql.php";

function multiply($num1,$num2,$num3 = 5) {
    $answer = $num1 * $num2 * $num3;
    return $answer;
}

echo multiply(2,4);
 

// Write a function to multiply three numbers; let the last number be a default value of 5; then return the result. Include a new file to the file with the function logic and connect your mysql database in the new file Push Code to Github and submit link.
?>