<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_task3</title>
    <link rel="stylesheet" href="php_task3.css">
</head>
<body>

<?php

    $usernameerr = $emailerr = $passworderr = $addresserr = $cityerr = "";
    $username = $email = $password = $address = $city = "";

    if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        if ( empty($_REQUEST["username"]) ) {
            $usernameerr = "*username is required";
        }
        else {
            $username = $_REQUEST["username"];
        }

        if ( empty($_REQUEST["email"]) ) {
            $emailerr = "*email is required";
        }
        else {
            $email = $_REQUEST["email"];
        }

        if ( empty($_REQUEST["password"]) ) {
            $passworderr = "*password is required";
        }
        else {
            $password = $_REQUEST["password"];
        }

        if ( empty($_REQUEST["address"]) ) {
            $addresserr = "*address is required";
        }
        else {
            $address = $_REQUEST["address"];
        }

        if ( empty($_REQUEST["city"]) ) {
            $cityerr = "*city is required";
        }
        else {
            $city = $_REQUEST["city"];
            
            // $_SESSION["r_email"] = $email;
            // $_SESSION["r_password"] = $password;
            
            $registeredusers = fopen("registeredusers.txt", "a+");
            $formdata = "Username : $username\nEmail : $email\nPassword : $password\nAddress : $address\nCity : $city\n";
            fwrite($registeredusers,$formdata);


        }
        
    }
?>

<h1>Register</h1>

<!-- onsubmit="validate()" -->
<div class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
        <input type="text" name="username" placeholder="Username">
        <div class="error">Please enter username</div>
        <p><?php echo $usernameerr;?></p>

        <input type="email" name="email" placeholder="Email">
        <div class="error">Please enter email</div>
        <p><?php echo $emailerr;?></p>

        <input type="password" name="password" placeholder="Password">
        <div class="error">Please enter password</div>
        <p><?php echo $passworderr;?></p>

        <input type="text" name="address" placeholder="Address">
        <div class="error">Please enter address</div>
        <p><?php echo $addresserr;?></p>

        <input type="text" name="city" placeholder="City">
        <div class="error">Please enter city</div>
        <p><?php echo $cityerr;?></p>
        
        <input type="submit" value="Register">
    </form>
    <a href="login.php"><button>Login</button></a>
</div>
    

    <!-- <script src="php_task3.js"></script> -->
</body>
</html>