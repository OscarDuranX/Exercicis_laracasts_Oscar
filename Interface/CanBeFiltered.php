<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 08/10/2015
 * Time: 16:55
 */
interface CanBeFiltered{
    public function filter();
}

class Favorited implements CanBeFiltered{
    public function filter()
    {

    }
}

class Unwatched implements CanBeFiltered{
    public function filter()
    {

    }
}

class Difficulty implements CanBeFiltered{
    public function filter()
    {

    }
}