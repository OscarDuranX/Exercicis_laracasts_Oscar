<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 08/10/2015
 * Time: 13:33
 */

interface Provider{
    public function authorize();
}

function login(Provider $provider)
{
        $provider->authorize();
}

Auth::attempt();