<?php

class Person {

 //public -Accessible from anywhere
 //private - Accessible only inside the class
    private $name;
    private $age;

    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            
            throw new Exception("Person is not old enough.");
        }

     
        $this->age = $age;
    }


    public function getAge()
    {
        return $this->age;
    }
}
class b extends Person
{
    public function printAge(){
        echo $this->age;
    }
}

$pratik = new Person("Pratik Kadam");


$pratik->setAge(25);

var_dump($pratik->getAge());
?>
