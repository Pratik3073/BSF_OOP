<?php
namespace App;


use App\users\Person;
class Staff
{
    protected array $members = [];

    public function __construct(array $members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person): void
    {
        $this->members[] = $person;
    }

    public function members(): array
    {
        return $this->members;
    }
}
