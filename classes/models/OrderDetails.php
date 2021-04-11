<?php

    class OrderDetails  extends Db 
    {
        public function __construct()
        {
            $this->table = "orderdetails";
            $this->connect();
        }
    }

?>