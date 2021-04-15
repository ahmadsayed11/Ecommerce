<?php
namespace TechStore\Classes\Validations;
class Numeric implements ValidateRule
{
    public function check(string $name , $value)
    {
        if(!is_numeric($value))
        {
            return "$name must contain numbers only";
        }
        return false;
    }
}



?>