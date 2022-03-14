<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_task4</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            margin:  0px 25%;
            background-color: #33adff;
        }
        h1 {
            text-align: center;
            
        }
        select {
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>States and Cities</h1>
        <select name="state" id="state" onchange="city(this.value)">
            <option value="">Choose a State</option>
        </select>
        <select name="city" id="city">
            <option value="">Choose a City</option>
        </select>
    </div>
    

    <script src="php_task4.js"></script>
</body>
</html>