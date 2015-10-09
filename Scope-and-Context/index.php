<?php

/*$registration = new prova\RegisterUser;
$authController = new prova\AuthController($registration);*/

require "src/AuthController.php";
require "src/RegisterUser.php";

$registration = new prova\RegisterUser();
$authController = new  prova\AuthController($registration);

$authController->register();