<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 08/10/2015
 * Time: 17:06
 */

class Person{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

class Business{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        //Afegeix $person a la coleccio de staff
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

class Staff{

    protected $members = [];

    public function __construct($members = []){
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[]= $person;

    }

    public function members()
    {
        return $this->members;
    }
}

$oscar = new Person('Pepe Pepito');

$staff = new Staff([$oscar]);

$laracasts = new Business($staff);

//$laracasts->hire($oscar);

$laracasts->hire(new Person('Oscar '));

//var_dump($staff);
var_dump($laracasts->getStaffMembers());