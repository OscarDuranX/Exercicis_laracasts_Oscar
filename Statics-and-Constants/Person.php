<?php

class Person{
    public $age = 1;

    public function haveBirthday(){
        $this->age += 1;
    }

    public function age()
    {
        return $this->age;
    }

}

//Person::$age;

$oscar = new Person;
$oscar->haveBirthday();
$oscar->haveBirthday();

echo $oscar->age();

$pepito = new Person;
$pepito->haveBirthday();

echo $pepito->age();