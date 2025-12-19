<?php
    
    use App\users\Person;
    use App\Business;
    use App\Staff;


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