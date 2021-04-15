<?php
namespace TechStore\Classes\Validations;
class Required implements ValidateRule
{
    public function check(string $name , $value)
    {
        if(empty($value))
        {
            return "$name must not be empty";
        }
        return false;
    }
}



?>