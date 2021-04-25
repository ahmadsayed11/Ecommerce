<?php
require_once("../theme/app.php");
use TechStore\Classes\Cart;
use TechStore\Classes\Request;
use TechStore\Classes\Models\Order;
use TechStore\Classes\Models\OrderDetails;
use TechStore\Classes\Validations\Validator;
$cart = new Cart;
if($request->postHas('submit') && $cart->count()!== 0 ) {
    $name = $request->post("name");
    $email= $request->post("email");
    $phone = $request->post("phone");
    $address = $request->post("address");
   
    //validations

    $validator = new Validator;
    $validator->validate('name' , $name , ['required' , 'str' , 'max']);
    $validator->validate('phone' , $phone , ['required' , 'str' , 'max']);
    if(!empty($email)) {
        $validator->validate('email' , $email , ['email' , 'max']);
    } else {
        $email = "null";
    };
    if(!empty($address)) {
        $validator->validate('address' , $address ,[ 'str' , 'max']);

    }else {
        $address = "null"; 
    };

    if($validator->hasErrors()) {
        $session->set("errors" , $validator->getErrors());
        $request->redirect("../theme/cart.php");

    } else {
        $order = new Order;
        //gadwal al orderDetails fy al data base
        $orderDetail = new OrderDetails;
        $cart = new cart;
        $orderId = $order->insertAndGetId("name , email , phone , address " , " '$name' , '$email', '$phone', '$address' ");
        //hn3ml for loop tlef 3la aly gawa al cart o nb3t query ll data base bkol wa7da mnhom
        foreach ($cart->all() as $prodId => $prodData) {
            # code...
            $qty = $prodData['qty'];
            $orderDetail->insert("order_id , product_id , qty" , " '$orderId'  , '$prodId' , '$qty' ");
      
        }

        $request->redirect("../theme/products.php");
        $cart->empty();
    }   

} else {
    $request->redirect("../theme/products.php");
}



?>