<?php

class Person
{
    public $name;

    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge(){
        return $this->age * 365;
    }

    public function setAge($age){
        if($age < 18){
            throw new Exception("Menor");
        }
        $this->age = $age;
    }
}

$john = new Person('Jhon Doe');

$john->setAge(30);

$john->age = 3;

var_dump($john->getAge());

