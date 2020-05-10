<?php

include("calculator.php");

$calculator = new Calculator();

if (isset($_GET['value1']) && isset($_GET['value2']) && isset($_GET['operation'])) {

    $value1 = $_GET['value1'];
    $value2 = $_GET['value2'];
    $operation = $_GET['operation'];

    switch ($operation) {
        case "+":
            echo "<h2>".$calculator->sum($value1, $value2)."</h2>";
            break;
        case "-":
            echo "<h2>".$calculator->sub($value1, $value2)."</h2>";
            break;
        case "*":
            echo "<h2>".$calculator->mult($value1, $value2)."</h2>";
            break;
        case "/":
            echo "<h2>".$calculator->div($value1, $value2)."</h2>";
            break;
        default:
            echo "Operation invalid!";
    }
}
else{
    echo "Fail";
}

?>