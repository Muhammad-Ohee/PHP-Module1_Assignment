<!DOCTYPE html>
<html>
    <head>
        <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather Report</title>

        <style>
            <?php include "styles.css" ?>
        </style>
    </head>
    </head>
    <body>
        <div class = "container">
            <h2>Weather Report</h2>
            <form method = "post" action = "">
                <select name = "Operation">
                    <option value = "celsius">Celsius</option>
                    <option value = "fahrenheit">Fahrenheit</option>
                </select><br>

                <input type = "number" name = "temperature" placeholder = "Enter temperature" required><br>

                <button type = "submit">Check Weather</button>
            </form>

            <div id = "result">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $temperature = $_POST["temperature"];
                        $operation = $_POST["Operation"];

                        if ($operation == "fahrenheit") {
                            $updated_temperature = ($temperature - 32) * 5 / 9;
                        }
                        else {
                            $updated_temperature = $temperature;
                        }

                        if ($updated_temperature >= 25) {
                            echo "It's warm.";
                        }
                        elseif ($updated_temperature >= 10 && $updated_temperature < 25) {
                            echo "It's cool.";
                        }
                        elseif ($updated_temperature < 10) {
                            echo "It's freezing!";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>