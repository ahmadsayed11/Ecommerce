<?php

    class Product extends Db 
    {
        public function __construct()
        {
            $this->table = "products";
            $this->connect();
        }
    }

?>