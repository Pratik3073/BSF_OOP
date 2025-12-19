<?php
namespace App;


use App\users\Person;
class Business
{
    protected Staff $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person): void
    {
        $this->staff->add($person);
    }

    public function getStaffMember(): array
    {
        return $this->staff->members();
    }
}
