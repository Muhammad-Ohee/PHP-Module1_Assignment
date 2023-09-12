<!DOCTYPE html>
<html>
    <head>
        <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comparison Tool</title>

        <style>
            <?php include "styles.css" ?>
        </style>
    </head>
    </head>
    <body>
        <div class = "container">
            <h2>Comparison Tool</h2>
            <form method = "post" action = "">
                <input type = "number" name = "number1" placeholder = "Enter first number" required><br>
                <input type = "number" name = "number2" placeholder = "Enter second number" required><br>

                <button type = "submit">Compair</button>
            </form>

            <div id = "result">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $number1 = $_POST["number1"];
                        $number2 = $_POST["number2"];

                        $result = ($number1 > $number2) ? "$number1 is larger than $number2." : "$number2 is larger than $number1.";
                        echo $result;
                    }
                ?>
            </div>
        </div>
    </body>
</html>