<?php

// Person class represents an individual person
class Person
{
    // Protected property: accessible within this class and child classes
    protected $name;

    // Constructor to initialize the person's name
    public function __construct($name)
    {
        $this->name = $name;
    }
}

// Business class represents a company or organization
class Business
{
    // Staff object that holds all employees
    protected $staff;

    // Constructor uses TYPE HINTING
    // Ensures only a Staff object can be passed
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    // Hire method uses TYPE HINTING with Person
    // This ensures only Person objects can be hired
    public function hire(Person $person)
    {
        // Add the person to the staff collection
        $this->staff->add($person);
    }

    // Returns all staff members
    public function getStaffMember()
    {
        return $this->staff->members();
    }
}

// Staff class manages a collection of Person objects
class Staff
{
    // Protected array to store staff members
    protected $members = [];

    // Constructor optionally accepts an initial list of members
    public function __construct($members = [])
    {
        $this->members = $members;
    }

    // Adds a Person object to the staff list
    // Type hinting ensures only Person objects are allowed
    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    // Returns the full staff list
    public function members()
    {
        return $this->members;
    }
}

// Creating a Person object
$pratik = new Person("Pratik");

// Creating a Staff object with an initial member
$staff = new Staff([$pratik]);

// Creating a Business object and injecting Staff dependency
$softwareDev = new Business($staff);

// Hiring a new person
$softwareDev->hire(new Person("Yogesh"));

// Display all staff members
var_dump($softwareDev->getStaffMember());

?>
