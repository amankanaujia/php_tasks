<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        interface interface1 {
            function intface_fun1();
            function intface_fun2();
        }
        interface interface2 extends interface1 {
            function intface_fun3();
            function intface_fun4();
        }
        class class1 implements interface2 {
            function intface_fun1() {
                echo "This is the first interface function.<br>";
            }
            function intface_fun2() {
                echo "This is the second interface function.<br>";
            }
            function intface_fun3() {
                echo "This is the third interface function.<br>";
            }
            function intface_fun4() {
                echo "This is the forth interface function.<br>";
            }
        }
        $obj1 = new class1();
        $obj1->intface_fun1();
        $obj1->intface_fun2();
        $obj1->intface_fun3();
        $obj1->intface_fun4();
    ?>
</body>
</html>