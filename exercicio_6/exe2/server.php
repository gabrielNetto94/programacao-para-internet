<?php

include("calculator.php");



if (isset($_GET['value1']) && isset($_GET['value2']) && isset($_GET['operation'])) {

    $calculator = new Calculator();

    $name = $_GET['name'];
    $value1 = $_GET['value1'];
    $value2 = $_GET['value2'];
    $operation = $_GET['operation'];

    switch ($operation) {
        case "+":
            $result = $calculator->sum($value1, $value2);
            echo "<h2>".$result."</h2>";
            break;
        case "-":
            $result =  $calculator->sub($value1, $value2);
            echo "<h2>".$result."</h2>";
            break;
        case "*":
            $result = $calculator->mult($value1, $value2);
            echo "<h2>".$result."</h2>";
            break;
        case "/":
            $result = $calculator->div($value1, $value2);
            echo "<h2>".$result."</h2>";
            break;
        default:
            echo "Operation invalid!";
    }

    $fileName = "log_operations/".$name.".txt";

    $file = fopen($fileName,"a");

    fwrite($file,$name.",");
    fwrite($file,$value1.",");
    fwrite($file,$operation.",");
    fwrite($file,$value2.",");
    fwrite($file,$result."\n");
    fclose($file);

} else {
    echo "Fail";
}
