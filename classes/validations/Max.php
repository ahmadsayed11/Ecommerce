<?php

class Max implements ValidateRule
{
    public function check(string $name , $value)
    {
        if(strlen($value) > 255)
        {
            return "$name mustnot exceed 255 characters";
        }
        return false;
    }
}



?>