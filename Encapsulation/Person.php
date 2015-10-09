<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 08/10/2015
 * Time: 12:54
 */

class Person {
    private $name;
    private $age;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getAge(){
        return $this->age * 365;
    }

    public function setAge($age){
        if ($age < 18){
            throw new Exception ("Es menor d'edat");
        }
        $this->age = $age;
    }
}

$Person = new Person('Pepe pepito');

$Person->setAge(19);


var_dump($Person->getAge());