<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>this is a test</h2>
</body>
</html>


<?php
    class Bike
    {
        public $speed = 20;
        public $wheel = 2;
        public $milege = 30;
        public $position =50;
        public $color;

        //constructor
        //always start with double underscore
        function __constructor($color){
            $this->color = $color;
        }

        function move()
        {
            echo "<br>";
            echo "I'm moving with the current speed " . $this->speed;
        }
    }
    $bike = new Bike('red');
    echo $bike->color;



?>