<!DOCTYPE html>
<html>
    <head>
        <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Temperature Converter</title>

        <style>
            <?php include "styles.css" ?>
        </style>
    </head>
    </head>
    <body>
        <div class = "container">
            <h2>Temperature Converter</h2>
            <form method = "post" action = "">

                <select name = "Operation">
                    <option value = "celsius">Celsius to Fahrenheit</option>
                    <option value = "fahrenheit">Fahrenheit to Celsius</option>
                </select><br>

                <input type = "number" name = "temp" placeholder = "Temperature" required><br>

                <button type = "submit">Calculate</button>
            </form>

            <div id ="result">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $number = $_POST["temp"];
                        $operation = $_POST["Operation"];

                        switch($operation) {
                            case  "celsius":
                                $result = ($number  * (9/5)) + 32;
                                $formatted = round($result, 2);
                                echo "$number&deg Celsius = $formatted&deg Fahrenheit";
                                break;
                            case  "fahrenheit":
                                $result = ($number - 32) * 5 / 9;
                                $formatted = round($result, 2);
                                echo "$number&deg Fahrenheit = $formatted&deg Celsius";
                                break;
                            }
                        }
                    ?>
                </div>
            </div>
    </body>
</html>