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

                        if ($updated_temperature >= 40) {
                            echo "Weather is too hot.";
                        }
                        elseif ($updated_temperature >= 25 && $updated_temperature < 40) {
                            echo "Weather is hot.";
                        }
                        elseif ($updated_temperature >= 15 && $updated_temperature < 25) {
                            echo "Weather is normal.";
                        }
                        elseif ($updated_temperature >= 0 && $updated_temperature < 15) {
                            echo "Weather is cold.";
                        }
                        elseif ($updated_temperature < 0) {
                            echo "Weather is too cold.";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>