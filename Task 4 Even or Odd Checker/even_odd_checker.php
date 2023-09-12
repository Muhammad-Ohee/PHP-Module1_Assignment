<!DOCTYPE html>
<html>
    <head>
        <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Odd Even Checker</title>

        <style>
            <?php include "styles.css" ?>
        </style>
    </head>
    </head>
    <body>
        <div class = "container">
            <h2>Odd Even Checker</h2>
            <form method = "post" action = "">
                <input type = "number" name = "number" placeholder = "Enter your number" required><br>

                <button type = "submit">Check Odd or Even</button>
            </form>

            <div id = "result">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $number = $_POST["number"];

                        if ($number % 2 == 0) {
                            echo "Your number is even.";
                        }
                        else {
                            echo "Your number is odd.";
                        }
                        
                    }
                ?>
            </div>
        </div>
    </body>
</html>