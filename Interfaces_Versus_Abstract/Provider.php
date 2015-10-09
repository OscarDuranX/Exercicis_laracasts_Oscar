<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 08/10/2015
 * Time: 13:56
 */


interface Provider{
    public function getAuthorizationUrl();
}
abstract class AbstractProvider{

    protected function related(){

    }

}

class FacebookProvider implements  Provider {

    protected function getAuthorizationUrl()
    {
        return '';
    }
}