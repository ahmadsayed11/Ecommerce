<?php

    class Cat extends Db 
    {
        public function __construct()
        {
            $this->table = "cats";
            $this->connect();
        }
    }

?>