<?php 
//ah 3lakt al cart dah bl object aly 3mlo gawa class al cart
namespace TechStore\Classes;

class cart 
{
    public function add(string $id , array $prodData) 
    {
        //gawa al session aly asmo cart ht3ml key bl id aly gay
        $_SESSION["cart"][$id] = $prodData;
    }

    public function count() 
    {
        return count($_SESSION['cart']);
    }

     public function total()
     {
         $total = 0;
        foreach ($_SESSION['cart'] as $id => $prodData) {
            # code...
           $total += $prodData['qty'] * $prodData ['price'];
        }
        return $total;

     }

     public function has(string $id) : bool
     {
         return array_key_exists($id , $_SESSION['cart']);
     }

     public function all() 
     {
         return $_SESSION['cart'];
     } 

     public function remove(string $id)
     {
         unset($_SESSION['cart'][$id]);
     }

     public function empty() 
     {
         $_SESSION['cart'] = [];
     }



}









?>