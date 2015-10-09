<?php

namespace prova;

interface RespondsToUserRegistration{
    public function userRegisteredSuccessfully();
    public function userRegisteredFailed();
}