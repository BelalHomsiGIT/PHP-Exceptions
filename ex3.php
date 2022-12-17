
<?php
    /*
        try {
            code that can throw exceptions
        } 
        catch(Exception $e) {
            code that runs when an exception is caught
        }
    */

    function divide($x, $y) {
        if($y == 0) {
            throw new Exception("Belal Homsi say: Cannot divide by zero - ERROR.");
        }
        return $x / $y;
    }
    // using the try..catch statement
    try {
        echo divide(10, 4) . "<br>";
        echo divide(9,0) . "<br>";
    } catch(Exception $e) {
        echo "Error: Division by zero.";
    }

    /*output
    
    2.5
    Error: Division by zero.

    */