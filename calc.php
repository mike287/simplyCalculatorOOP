<?php

require_once "Calculator.php";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$option = $_POST['option'];
$a = NULL;

$calculator = new Calculator($num1,$num2,$option);

    if($calculator->option() === "infinity")
        {
            echo $calculator->option();
            $a = 1;
        }

        if($a != 1 )
        {
            echo "result of ".$calculator->getNum1()." ".$calculator->mark()." ".$calculator->getNum2()." = ".$calculator->option();
        }

?>

<form action="index.html">
    <button type="submit">return</button>
</form>

