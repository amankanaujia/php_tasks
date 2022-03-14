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
    $link = "https://raw.githubusercontent.com/thatisuday/indian-cities-database/master/cities.json";
    $json_data = file_get_contents($link);
    $arr_of_json = json_decode($json_data,true);
    $p = $_GET["state"];

    foreach ($arr_of_json as $key => $value) {
        if (strtolower($value['state']) == strtolower($p)) {
            print_r("<option>{$value['city']}</option>");
        }
    }
    

?>
</body>
</html>
