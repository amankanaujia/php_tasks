<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_task1</title>
    <link rel="stylesheet" href="php_task1.css">
</head>
<body>

<?php

        $weighterr = $feeterr = $incherr = "";
        $weight = $feet = $inch = "";

        if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
            if ( empty($_REQUEST["weight"]) ) {
                $weighterr = "*weight is required";
            }
            else {
                $weight = $_REQUEST["weight"];
            }

            if ( empty($_REQUEST["feet"]) ) {
                $feeterr = "*feet is required";
            }
            else {
                $feet = $_REQUEST["feet"];
            }

            if ( empty($_REQUEST["inch"]) ) {
                $incherr = "*inch is required";
            }
            else {
                $inch = $_REQUEST["inch"]; 

                $inch_height = $feet*12 + $inch;
            $meter_height = $inch_height*0.0254;
            $bmi = $weight/($meter_height*$meter_height);
            $_SESSION["result"] = $bmi;

            header("Location: result.php");

            }
            
        }
    ?>
    <h1>BMI Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="validate()" >
    <input type="number" name="weight" id="weight" placeholder="Weight in kg" >
    <div><?php echo $weighterr;?></div>
    <input type="number" name="feet" id="feet" placeholder="Height in feet" >
    <div><?php echo $feeterr;?></div>
    <input type="number" name="inch" id="inch" placeholder="Height in inch" >
    <div><?php echo $incherr;?></div>
    <input type="submit" value="Find BMI">
    </form>

    <script src="php_task1.js"></script>
</body>
</html>