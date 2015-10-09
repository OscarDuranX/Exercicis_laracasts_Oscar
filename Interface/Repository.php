<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 08/10/2015
 * Time: 16:52
 */

interface Repository{
    public function save($data);
}

class MongoRepository implements Repository{

    public function save($data)
    {

    }
}

class FileRepository implements Repository{
    public function save($data)
    {

    }
}