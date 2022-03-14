<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_task6</title>
</head>
<body>
    <?php
        abstract class class1 {
            abstract function abs_fun1();
            abstract function abs_fun2();
            function fun1() {
                echo "non abstract method<br>";
            }
        }
        abstract class class2 extends class1 {

            abstract function abs_fun2();
            function abs_fun1() {
                echo "abstract method 1<br>";
            }
        }
        class class3 extends class2 {
            function abs_fun2() {
                echo "abstract method 2<br>";
            }
        }
        $obj1 = new class3();
        echo $obj1->fun1();
        echo $obj1->abs_fun1();
        echo $obj1->abs_fun2();
    ?>
    
</body>
</html>