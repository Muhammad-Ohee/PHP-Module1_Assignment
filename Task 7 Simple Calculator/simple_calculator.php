<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Calculator</title>

        <style>
            <?php include "styles.css" ?>
        </style>
    </head>

    <body>
        <div class = "container">
            <h2>Simple Calculator</h2>
            <form method = "post" action = "">
                <input type = "number" name = "number1" placeholder = "Enter first number" required><br>
                <input type = "number" name = "number2" placeholder = "Enter second number" required><br>

                <select name = "Operation">
                    <option value = "add">Addition</option>
                    <option value = "subtract">Subtraction</option>
                    <option value = "multiply">Multiplication</option>
                    <option value = "divide">Division</option>
                </select><br>

                <button type = "submit">Calculate</button>
            </form>

            <div id ="result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $number1 = $_POST["number1"];
                    $number2 = $_POST["number2"];
                    $operation = $_POST["Operation"];

                    switch($operation) {
                        case  "add":
                            $result = $number1 + $number2;
                            echo "Result: $result";
                            break;
                        case  "subtract":
                            $result = $number1 - $number2;
                            echo "Result: $result";
                            break;
                        case  "multiply":
                            $result = $number1 * $number2;
                            echo "Result: $result";
                            break;
                        case  "divide":
                            if ($number2 != 0) {
                                $result = $number1 / $number2;
                                echo "Result: $result";
                            }
                            else {
                                echo "Can't divide by zero.";
                            }
                            break;
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>