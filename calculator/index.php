<?php
require "Calculator.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($error)):
        echo '<h5 style="color: red;">' . $error . '</h5>';
    endif;
    ?>

    <?php
    if (isset($result)):
        echo '<p>' . "The result is : " . $result . '</p>';
        echo '<br>';
        echo '<a href="/">Back to Calculator..</a>';
    else:
        echo
        '<form method="post">
        <input type="text" name="num1" placeholder="Enter first number"><br>
        <input type="text" name="num2" placeholder="Enter second number"><br>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        <button type="submit">Calculate</button>
    </form>';

    endif; ?>



</body>

</html>