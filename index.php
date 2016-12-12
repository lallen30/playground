<?php
include "includes/classes.php";

$bob = new Person;
$bob->age = 5;
$bob->name = "Bob";
$bob->user_age();
echo "<br>";
$bob->eye_color = "brown";
echo "{$bob->eye_color}<br />";
echo "private: "; $bob->sayTwo(); echo "<br />";
echo "protected: "; $bob->sayThree(); echo "<br />";

echo "<hr>";

$nancy = new Person;
$nancy->age = 20;
echo "Nancy's age is {$nancy->age}<br />";
echo "<hr>";

echo "Population: " . Person::$population . "<br />";

Person::say_population();

echo "<hr>";

echo $bob->returnTest();

echo "<hr>";

$dude = new Man;
$dude->age = 13;
echo "Dude's age is {$dude->age}<br />";
$anotherdude = new Man;

echo "<hr>";
