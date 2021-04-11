<?php

class Str implements ValidateRule
{
    public function check(string $name , $value)
    {
        if(!is_string ($value))
        {
            return "$name must be a number";
        }
        return false;
    }
}



?>