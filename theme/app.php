<?php

//include paths and urls;

define("PATH" , __DIR__ ."/" );
define("URL" ,"http://localhost/route_1/workshop/e-commerce/tech-commerce/theme/");


//constants for database method al connect kont 7atet fyha al 7agat hard code dlw2ty 3ayz agbha mn al constants
define("DB_SERVERNAME" , "localhost");
define("DB_USERNAME" , "root");
define("DB_PASSWORD" , "");
define("DB_NAME" , "tech_store");


//include classes;

require_once(PATH . "../vendor/autoload.php");
//objects;
use TechStore\Classes\Request;
$request = new Request;

use TechStore\Classes\Session;
$session = new Session;
?>