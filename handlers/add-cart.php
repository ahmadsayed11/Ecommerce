<?php
require_once("../theme/app.php");
use TechStore\Classes\Cart;
use TechStore\Classes\Request;

if($request->postHas('submit')) {
    $qty = $request->post("qty");
    $name= $request->post("name");
    $img = $request->post("img");
    $price = $request->post("price");
    $img = $request->post("description");
    $id = $request->post("id");



    $prodData = [
         
        'qty' => $qty,
        'name'=> $name,
        'price'=>$price,
        'img'=>$img,
    ]; 
   $cart = new Cart ;
   
   $cart->add($id , $prodData);
   
    $request->redirect("products.php");
}



?>