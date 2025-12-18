<?php
// This example demonstrates the use of
// Getter and Setter methods in PHP for basic security and validation

class Person {

    // Public properties to store person data
    public $name;
    public $age;

    // Constructor: runs automatically when an object is created
    // Used to initialize the name of the person
    public function __construct($name)
    {
        $this->name = $name;
    }

    // SETTER method
    // Used to set the age with validation
    // Prevents setting age less than 18
    public function setAge($age)
    {
        if ($age < 18) {
            // Throw an exception if age is not valid
            throw new Exception("Person is not old enough.");
        }

        // Assign valid age to the property
        $this->age = $age;
    }

    // GETTER method
    // Used to safely retrieve the age value
    public function getAge()
    {
        return $this->age;
    }
}

// Creating an object of the Person class
$pratik = new Person("Pratik Kadam");

// Setting age using setter method (with validation)
$pratik->setAge(25);

// Getting age using getter method
var_dump($pratik->getAge());
?>
