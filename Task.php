<?php
class Task {
    public $description;

    public $completed = false;
    public function __construct($description)
    {  
        //Initializing data using a Constructor
        //It sets initial values for the object
        //$this refers to the current object
         
        $this->description = $description; 
        
    }

    public function run()
    {
        $this->completed = true;
    }
}

$task = new Task("Learn OOP");
$task1 = new Task("Fix CMS bugs");

//new Task() creates an object
//"Learn OOP" is passed to the constructor
//Stored inside $task->description

$task->run();
var_dump($task->completed);
?>
