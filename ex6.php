<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>How to use Try - Catch - Finally in PHP</h2>
    <a href="https://thecodeprogram.com/how-to-use-try---catch---finally-in-php">thecodeprogram</a><br>
    <?php
    //These classes derived from exception classes
    class ExceptionClass_1 extends Exception {};
    class ExceptionClass_2 extends Exception {};

    function build_exception($errorType){
        try{
            if ($errorType == '1') {
                throw new ExceptionClass_1();
            }else if ($errorType == '2') {
                throw new ExceptionClass_2();
            }else{
                throw new Exception();
            }
        }
        catch (ExceptionClass_1 $ex){
            echo "Exception Class 1 <br>";
        }
        catch (ExceptionClass_2 $ex){
            echo "Exception Class 2 <br>";
        }
        catch (Exception $ex){
            echo "General Type Exception <br>";
        }
    }
    build_exception(1);
    build_exception(2);
    ?>
</body>
</html>