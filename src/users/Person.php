<?php
namespace App\users;

class Person
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
