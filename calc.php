<?php

require_once "Calculator.php";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$option = $_POST['option'];
$a = NULL;

$calculator = new Calculator($num1,$num2,$option);

    if($calculator->Option() === "infinity")
        {
            echo $calculator->Option();
            $a = 1;
        }

        if($a != 1 )
        {
            echo "result of ".$calculator->getNum1()." ".$calculator->Mark()." ".$calculator->getNum2()." = ".$calculator->Option();
        }

?>

<form action="index.html">
    <button type="submit">return</button>
</form>

