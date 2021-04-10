<?php

class Request 
{
    public function get($key)
    {
        return $key;
    }
    //to check if there is a key

    public function getHas($key)
    {
        return isset($_GET[$key]);
    }

    public function post($key)
    {
        return $key;
    }
    //function 3lashan tt2kd en fyh 7ada ,ab3ota fy al post array
    public function hasPost($key)
    {
        return isset($_POST[$key]);
    }
    //3lashan tnadf al inputs aly ray7a ll data base
    public function postClean($key)
    {
        return trim(htmlspecialchars($_POST[$key]));
    }

}





?>