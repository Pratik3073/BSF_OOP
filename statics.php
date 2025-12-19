<?php
    //Dynamic you must create an object to call them it belong to an object.
    //static methods it belong to the class itself not to any object.
    //::is called the Scope Resolution Operator.
    //to access static members, constants, or methods of a class without creating an object.
    //constants  //Value cannot be changed once defined
    

class Math{
    public static function add(...$num)
    {
            return array_sum($num);
    }
}
echo Math::add(1,2,3);

    class Bank{
        const TAX =0.9;
    }
        // echo Bank::TAX;





?>