<?php

function divide($x, $y) {
    if($y == 0) {
        throw new Exception("Belal Homsi Say: Cannot divide by zero");
    }
    return $x / $y;
}

echo divide(2, 0);

/* output

    Fatal error: Uncaught Exception: Belal Homsi Say: Cannot divide by zero in E:\xampp\htdocs\exceptions\ex2.php

*/