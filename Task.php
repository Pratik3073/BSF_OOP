<?php
class Task {
    public $description;
    public $description2;
    public $completed = false;

    public function __construct($description, $description2)
    {
        // Initializing data using constructor arguments
        $this->description  = $description;
        $this->description2 = $description2;
    }

    public function run()
    {
        // Mark task as completed
        $this->completed = true;
    }
}

// Creating objects with TWO arguments
$task  = new Task("Learn OOP", "Classes");
$task1 = new Task("Fix CMS bugs", "Logic error");

// Running method
$task->run();

// Output
var_dump($task->description, $task->description2);
var_dump($task1->description, $task1->description2);
?>
