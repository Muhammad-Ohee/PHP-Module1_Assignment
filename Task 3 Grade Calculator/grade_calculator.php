<!DOCTYPE html>
<html>
    <head>
        <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grade Calculator</title>

        <style>
            <?php include "styles.css" ?>
        </style>
    </head>
    </head>
    <body>
        <div class = "container">
            <h2>Grade Calculator</h2>
            <form method = "post" action = "">
                <input type = "number" name = "test_score1" placeholder = "Enter first score" required><br>
                <input type = "number" name = "test_score2" placeholder = "Enter second score" required><br>
                <input type = "number" name = "test_score3" placeholder = "Enter third score" required><br>

                <button type = "submit">Calculate Grade</button>
            </form>

            <div id = "result">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $test_score1 = $_POST["test_score1"];
                        $test_score2 = $_POST["test_score2"];
                        $test_score3 = $_POST["test_score3"];
                        $sum = $test_score1 + $test_score2 + $test_score3;
                        $average_unf = $sum / 3;
                        $average = round($average_unf, 2);

                        if ($average >= 80) {
                            echo "Your average score is $average and grade is A.";
                        }
                        elseif ($average >= 70 && $average < 80) {
                            echo "Your average score is $average and grade is B.";
                        }
                        elseif ($average >= 60 && $average < 70) {
                            echo "Your average score is $average and grade is C.";
                        }
                        elseif ($average >= 50 && $average < 60) {
                            echo "Your average score is $average and grade is D.";
                        }
                        elseif ($average < 50) {
                            echo "Your average score is $average and grade is F.";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>