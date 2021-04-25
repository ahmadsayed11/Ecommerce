<?php

use TechStore\Classes\Models\Admin;

include_once("./theme/app.php");

$ad = new Admin;
$res = $ad->login("ahmadhassan1694@gmail.net" , "1234567" , $session);



echo '<pre>';
var_dump($res);
echo '</pre>';




?>
