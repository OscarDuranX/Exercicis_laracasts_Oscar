<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 08/10/2015
 * Time: 16:10
 */

interface Animal{
    public function communicate();
}

class Dog implements Animal{

    public function communicate()
    {
        return 'Uauu';
    }

}

class Cat implements Animal{

    public function communicate()
    {
        return 'Miaww';
    }

}