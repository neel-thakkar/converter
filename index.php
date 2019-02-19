<!DOCTYPE html>
<!--
Date: 23 Sep, 2017
Purpose: This Program is used to Convert Temperature in Celsius to Fahrenheit or visa versa  
-->
<html>
    <head>
        <!-- Author: Neel Kashyapbhai Thakkar - 000743545 -->
        <!-- Statement of Authorship: This work is done by me without any external help, and not for copy to anyone -->
        <meta charset="UTF-8">
        <title>Compeleted Conversion</title>
        <style>
            body
            {
                background-color: rgb(240, 240, 240);

            }
            h1
            {
                text-decoration: underline;
                text-align: center;
                color: #00008B;
            }
            table
            {
                text-align: right;
                padding-right: 650px;
                border-radius: 10px;
                border: 2px solid #708090;
                padding: 5px;
                margin-left: 640px;
                width: 250px;
                height: 185px;
                border-collapse: collapse;
            }
            table,th,td
            {
                border: 1px solid black;
            }
            tr
            {
                text-align: center;
                padding-right: 30px;
            }
            th
            {
                background-color: #333333;
                color: #ffffff;
            }
            tr:hover
            {
                background-color: #ccffff;
            }
            th,td
            {
                padding: 2px;
                text-align: right;
            }
            h3
            {
                font: bold;
                text-align: center;
            }

        </style>
    </head>
    <body>

        <?php
        echo"<br>";
        /**
         * @var double startingval to store the Starting value
         * @var double finalval to store Final value
         * @var int stepval to store the stepping value
         * @var double ftoc to store the result of converted values
         */
        $startingval = $_POST['startingval'];
        $finalval = $_POST['finalval'];
        $stepval = $_POST['stepval'];
        //floatval($ftoc);
        $ftoc;
        if (isset($_POST['method']) && isset($_POST['startingval']) && isset($_POST['finalval']) && isset($_POST['stepval'])) {
        if (is_numeric($_POST['startingval']) && is_numeric($_POST['finalval']) && ($_POST['finalval']) > ($_POST['startingval']) && is_numeric($_POST['stepval']) && ($_POST['stepval']) < (($_POST['finalval'])-($_POST['startingval']))) {
                if ($_POST['method'] == 'Fahrenheit to Celsius') {
                    echo "<h1>Successful Conversion of the given values!</h1>";
                    echo "<table> <thead> 
                                        
                                <tr><th>Fahrenheit</th><th>Celsius</th></tr> </thead>";
                    for ($i = $startingval; $i <= $finalval; $i = $i + $stepval) {
                        $startingval = $i;
                        $ftoc = ($startingval - 32) * (5 / 9);

                        //echo $startingval . "°F is " . round($ftoc, 2) . "°C <br/>";

                        echo "<tr><td>$startingval" . "°F</td><td>" . number_format($ftoc, 2, '.', ',') . "°C</td></tr>";
                    }
                    echo "</table>";
                    echo "<h3><a href='Application.html'>CONVERT AGAIN</a></h3>";
                }

                if ($_POST['method'] == 'Celsius to Fahrenheit') {
                    echo "<h1>Successful Conversion of the given values!</h1>";
                    echo "<table> <thead> 
                                        
                                <tr><th>Celsius</th><th>Fahrenheit</th></tr> </thead>";
                    for ($i = $startingval; $i <= $finalval; $i = $i + $stepval) {
                        $startingval = $i;
                        $ftoc = ($startingval * 1.8) + 32;
                        //echo "<h1>Successful Conversion of the given values!</h1>";
                        //echo $startingval . "°C is " . number_format($ftoc, 2, '.', ',') . "°F <br/>";
                        echo "<tr><td>$startingval" . "°C</td><td>" . number_format($ftoc, 2, '.', ',') . "°F</td></tr>";
                    }
                    echo "</table>";
                    echo "<h3><a href='Application.html'>CONVERT AGAIN</a></h3>";
                }
            } else
                echo "There might be any missing field or an invalid input. Please try again! <a href='Application.html'>Click here</a>";
        }
        ?>
    </body>
</html>
