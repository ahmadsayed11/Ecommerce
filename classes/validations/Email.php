<?php
namespace TechStore\Classes\Validations;

class Email implements ValidateRule
{
    public function check(string $name , $value)
    {
        if(!filter_var($value , FILTER_VALIDATE_EMAIL))
        {
            return "$name must be a valid Email";
        }
        return false;
    }
}







?>