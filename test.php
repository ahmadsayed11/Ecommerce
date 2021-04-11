<?php

require_once('classes/Session.php');
require_once('classes/Db.php');
require_once('classes/models/Product.php');
require_once('classes/models/Order.php');
require_once('classes/validations/ValidateRule.php');
require_once('classes/validations/Required.php');
require_once('classes/validations/Numeric.php');
require_once('classes/validations/Max.php');
require_once('classes/validations/Str.php');
require_once('classes/validations/Email.php');
require_once('classes/validations/Validator.php');




// $sess = new Session;
// $sess->set('name' , 'ahmad khanfour');
// print_r($_SESSION);



// $sess-> destroy('name');
// print_r($sess)

// $ord = new Order;
// $res = $ord ->selectAll();
// print_r($res);


// $prod = new Product;
// $res = $prod ->getCount();
// echo '<pre>';
// print_r($res);
// echo '</pre>';

// $order = new Order;
// $res = $order->delete(1);

// echo '<pre>';
// var_dump($res);
// echo '</pre>';
$v = new Validator;
$v->validate('age' , '' , 
['required' , 'numeric']
);

echo '<pre>';
print_r($v->getErrors());
echo '</pre>';


?>