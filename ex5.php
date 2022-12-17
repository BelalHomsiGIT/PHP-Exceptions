
<?php
    function divide($x, $y) {
        if ($y == 0) {
            throw new Exception("Error - Belal Homsi say: Cannot divide by zero");
        }
        return $x / $y;
    }
    
    // try block
    try {
        echo divide(8, 5) . "<br>";
        echo divide(9, 0) . "<br>";
    } 
    // catch block
    catch(Exception $e) {
        echo $e->getMessage();
    }
    // finally block
    finally {
        echo "<br>";
        echo "Calculation complete.";
    }

    /*output

    Error - Belal Homsi say: Cannot divide by zero
    Calculation complete.

*/