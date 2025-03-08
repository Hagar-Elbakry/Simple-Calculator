<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_POST['num1'] ?? '';
    $number2 = $_POST['num2'] ?? '';
    $operator = $_POST['operator'] ?? '';



    $error;
    $result;

    if ($number1 == '' || $number2 == '' || $operator == '') {
        $error = "The input values are required.<br>";
    } else if ($number2 == 0 && $operator == '/') {
        $error = "Oops! You can't divide by zero. Try again with a different number<br>";
    } else if ((!filter_var($number1, FILTER_VALIDATE_FLOAT) || !filter_var($number2, FILTER_VALIDATE_FLOAT)) && ($number1 != 0 && $number2 != 0)) {
        $error = "The input value must be a number only.<br>";
    } else {
        switch ($operator) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
            case '/':
                $result = $number1 / $number2;
                break;
        }
    }
}
