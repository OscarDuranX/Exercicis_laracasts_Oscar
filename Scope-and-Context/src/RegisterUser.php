<?php

namespace prova;

class RegisterUser {

    public function execute(array $data, RespondsToUserRegistration $listener)
    {
        var_dump('Registrarse el usuari.');

        $listener->userRegisteredFailed();
    }
    
}