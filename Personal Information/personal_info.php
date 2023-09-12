<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal Information</title>

        <style>
            <?php include "styles.css" ?>
        </style>
    </head>
    <body>

        <div class = "container">
            <h2>Personal Information</h2>
            <?php
                $name = "Muhammad Makama Mahmudur Rahman Ohee";
                $age = 29;
                $country = "Bangladesh";
                $about_myself = "💙 Hello, I am Ohee. I have graduated from <b>Notre Dame University Bangladesh</b> in <b>Computer Science and Engineering</b> department. Currently, I have enrolled in a <b>PHP Laravel Development</b> course. I have dream of building an ideal world where everythone loves each other. 💚";
                echo "My name is <b>$name</b>.";
                echo "<br>";
                echo "I am $age years old.";
                echo "<br>";
                echo "My country name is <b>$country</b>.";
                echo "<br>";
                echo "<b>About Myself:</b> $about_myself";
            ?>    
        </div>
    </body>
</html>