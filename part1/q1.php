<?php

class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = 'Alice';
$person->age = 25;

var_dump($person);
?>