<?php 

require_once("../theme/app.php");
use TechStore\Classes\cart;

if($request->getHas('id')) {
    $id = $request->get('id');
    $cart = new cart;
    $cart->remove($id);

    $request->redirect("cart.php");
}










?>