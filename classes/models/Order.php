<?php

    class Order extends Db 
    {
        public function __construct()
        {
            $this->table = "orders";
            $this->connect();
        }
    }

?>