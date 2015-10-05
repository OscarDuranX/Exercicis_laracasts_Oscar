<?php

class Task{
    public  $description;
    public $title;
    public $completed = false;

    public function __construct($description,$title){
        $this->title = $title;
       $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }
}

$task = new Task('Learn OOP','This is a title');
$task->complete();

var_dump($task->completed);
var_dump($task->description);
var_dump($task->title);