<?php
class Car{
    var $year;
    var $color;
    var $make;

    function carInfo(){
        echo "This car is a {$this->year} {$this->color} {$this->make}";
    }
}
?>
