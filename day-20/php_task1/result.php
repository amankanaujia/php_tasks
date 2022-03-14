<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <link rel="stylesheet" href="result.css">
</head>
<body>
    <div>
        <p>Your BMI is : </p>
        <?php
            echo $_SESSION["result"];
            // if ( $_REQUEST["feet"] == "") {
            //     $feet_error = "Please select feet";
                
            // }
            

            // $inch_height = $_REQUEST["feet"]*12 + $_REQUEST["inch"];
            // $meter_height = $inch_height*0.0254;
            // $bmi = $_REQUEST["weight"]/($meter_height*$meter_height);
            // echo  "$bmi";
        ?>
    </div>
    
</body>
</html>