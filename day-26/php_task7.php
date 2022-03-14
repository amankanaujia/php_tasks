<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_task7</title>
</head>
<body>
    <?php

        class parent_class {
            function __call($function_name,$arguments) {
                if ($function_name == "checkValid") {
                    switch (count($arguments)) {
                        case 0: echo "Welcome guest.";
                                break;
                        case 1: 
                               return $arguments[0];

                        case 2: echo "Welcome {$_REQUEST['email']} Your password is {$_REQUEST['password']}";
                                break;
                    }
                }
            }
        }
        $parent_obj = new parent_class();

        $email = $password = "";
        $emailerr = $passworderr = "";
        $emailRegex = '/^[A-Z]+@[A-Z0-9-]+\.[A-Z0-9-.]+$/';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ( preg_match($emailRegex,$_REQUEST["email"]) || $_REQUEST["email"] == "" ) {
                $email = $_REQUEST["email"];
                
            }
            else {
                $emailerr = "please type in capital letters.";
            }
            if (ctype_upper($_REQUEST["password"]) || $_REQUEST["password"] == "") {
                $password = $_REQUEST["password"];
                if ($email !== "" && $password == "") {
                   echo "Welcome ".$parent_obj->checkValid($email);
                }
                else if ($email == "" && $password !== "") {
                    echo "Welcome ".$parent_obj->checkValid($password);
                }
                else if ($email !== "" && $password !== "") {
                    $parent_obj->checkValid($email,$password);
                }
                else if ($email == "" && $password == ""){
                    $parent_obj->checkValid();
                }
                
            }
            else {
                $passworderr = "please type in capital letters.";
            }

        }
        // checkValid
    ?>
    <form action="" method="POST">
        <input name="email" id="email" type="email" placeholder="enter your email">
        <p><?php echo $emailerr; ?></p>
        <input name="password" id="password" type="password" placeholder="enter your password">
        <p><?php echo $passworderr; ?></p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>