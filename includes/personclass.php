<?php
class Person{
    var $age;
    var $eye_color;
    var $name;
    var $ethnicity;

    // function testing
    function user_age(){
        $userAge = $this->name . "'s age is " . $this->age;
        echo $userAge;
    }

    // public private and protected testing
    public $one = 1;
    private $two = 2;
    protected $three = 3;
    // function calling private variable
    function sayTwo(){
        echo $this->two;
    }
    // function calling protected variable
    function sayThree(){
        echo $this->three;
    }

    // static
    static $population = 0;
    static public function say_population(){
        echo "Population is " . self::$population . "<br />";
    }

    // return
    function returnTest(){
         $ret = $this->age +2000;
         return $ret;
    }



} //end Person class

// extends class of Person
class Man extends Person{
    //construct
    public function __construct(){
        self::$population++;
        echo "This is current number of instances: " . self::$population . "<br />";
    }
}
?>
