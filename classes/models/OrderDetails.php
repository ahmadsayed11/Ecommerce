<?php
namespace TechStore\Classes\Models;
use TechStore\Classes\Db;
    class OrderDetails  extends Db 
    {
        public function __construct()
        {
            $this->table = "orderdetails";
            $this->connect();
        }
    }

?>