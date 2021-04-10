<?php

require_once('classes/Session.php');
$sess = new Session;
$sess->set('name' , 'ahmad khanfour');
print_r($_SESSION);



$sess-> destroy('name');
print_r($sess)
?>