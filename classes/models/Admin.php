<?php
namespace TechStore\Classes\Models;
use TechStore\Classes\Db;
use TechStore\Classes\Session;
    class Admin extends Db 
    {
        public function __construct()
        {
            $this->table = "admins";
            $this->connect();
        }
        //bt3ady al parameter bta3 al session mn al global scope ll function o kman t3ml type hinting anaha mn object al session 
        public function login(string $email , string $password , Session $sessoin)
        {
            $sql = "SELECT * FROM $this->table WHERE `email` = '$email' LIMIT 1";
            $result = mysqli_query($this->conn , $sql);
            $admin = mysqli_fetch_assoc($result);

            if(!empty($admin)) {
               $hashedPassword = $admin['password'];
               $isSame = password_verify($password , $hashedPassword);

               if($isSame) {
                    $sessoin->set('adminId' , $admin['id']);
                    $sessoin->set('adminName' , $admin['name']);
                    $sessoin->set('adminEmail' , $admin['email']);
                return true;

               } else {
                return false;
               }

            } else {
                return false;
            }
        
        }
    }

?>