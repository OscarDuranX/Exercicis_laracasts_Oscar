<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 08/10/2015
 * Time: 16:50
 */

interface CastsToJson{
    public function toJson();
}

class User implements CastsToJson{}
class Collection implements CastsToJson{}