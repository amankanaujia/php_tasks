<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="php_task3.css">
</head>
<body>

    <?php
        $emailerr = $passworderr = "";
        $email = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

                $registeredusers = fopen("registeredusers.txt", "r");
                $lines = file("registeredusers.txt");
                $d = 0;
                
                foreach ($lines as $line) {
                   
                    $r_username = trim(substr("{$lines[$d]}",11),"\n");

                    $r_email = trim(substr("{$lines[$d+1]}",8),"\n");

                    $r_password = trim(substr("{$lines[$d+2]}",11),"\n");

                    $r_address = trim(substr("{$lines[$d+3]}",10),"\n");

                    $r_city = trim(substr("{$lines[$d+4]}",7),"\n");
                    
                    if ( $r_email == $email ) {
                        if ( $r_password == $password ) {

                            $_SESSION["r_username"] = $r_username;
                            $_SESSION["r_email"] = $r_email;
                            $_SESSION["r_password"] = $r_password;
                            $_SESSION["r_address"] = $r_address;
                            $_SESSION["r_city"] = $r_city;

                            header ("Location: details.php");
                        }
                        else {
                            echo "password is not correct";
                            break;
                        }

                    }
                    else {
                        $d += 5;
                        if($d >= count($lines)) {
                            echo "email is not registered";
                            break;
                        }
                    }
                    
                }
                
            }
        }
        
    ?>

    <h1>Login</h1>
    
    <div class="form">
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email">
        <div class="error">Please enter email</div>
        <p><?php echo $emailerr;?></p>
        <input type="password" name="password" placeholder="Password">
        <div class="error">Please enter password</div>
        <p><?php echo $passworderr;?></p>

        <input type="submit" value="Login">
    </form>
    <a href="php_task3.php"><button>Register</button></a>
    </div>

    <script src="php_task3.js"></script>
</body>
</html>