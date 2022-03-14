<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overriding</title>
</head>
<body>
    <?php
        class Override_example1 {
            public function override_fun() {
                echo "Original function";
            }
        }
        class Override_example {
            public static function override_fun() {
                echo "Overriding function";
            }
        }
        Override_example::override_fun();
        
    ?>
</body>
</html>