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

class Vehicle {
    public $max_speed = 100;
    public $milage = 50;

    function __construct($ms=150, $m=100){
        $this->max_speed = $ms;
        $this->milage = $m;
    }

    function run(){
        echo "Max speed is $this->max_speed km/hr and milage is $this->milage km/hr<br><br>";
    }
}
class Bus extends Vehicle {
    public $colour = "white";

    function Bus($ms=250,$m=200) {
        $this->max_speed = $ms;
        $this->milage = $m;
    }
    
}
echo "Content of Vehicle class<br>";
$obj1 = new Vehicle(200,150);
$obj1->run();

echo "Content of Bus class<br>";
$bus_obj1 = new Bus(300,250);
$bus_obj1->run();

?>
</body>
</html>