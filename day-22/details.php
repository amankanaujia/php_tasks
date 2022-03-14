<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
</head>
<body>
    <h1>Details</h1>
    <div>Username : <?php echo $_SESSION["r_username"]?></div>
    <div>Email : <?php echo $_SESSION["r_email"]?></div>
    <div>Password : <?php echo $_SESSION["r_password"]?></div>
    <div>Address : <?php echo $_SESSION["r_address"]?></div>
    <div>City : <?php echo $_SESSION["r_city"]?></div>
</body>
</html>