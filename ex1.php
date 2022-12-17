<?php

function divide($x, $y) {
    return $x / $y;
}

echo divide(2, 0);

// default
/* output:

    Fatal error: Uncaught DivisionByZeroError: Division by zero in E:\xampp\htdocs\exceptions\ex1.php:4 ....
    
*/