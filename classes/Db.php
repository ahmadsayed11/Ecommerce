<?php
namespace TechStore\Classes;

//al abstract class msh bynf3 inheritance m3ah
abstract class Db 
{
    protected $conn;
    protected $table;

    public function connect() 
    {   
        $this->conn = mysqli_connect(DB_SERVERNAME , DB_USERNAME , DB_PASSWORD , DB_NAME);
        
    }

    public function selectAll(string $fields = "*" ) 
    {
        $sql = "SELECT $fields FROM $this->table";
        $result = mysqli_query($this->conn , $sql );
        return mysqli_fetch_all($result , MYSQLI_ASSOC);
    }

    public function selectid($id , string $fields = "*" ) 
    {
        $sql = "SELECT $fields FROM $this->table WHERE `ID` = $id";
        $result = mysqli_query($this->conn , $sql );
        return mysqli_fetch_all($result , MYSQLI_ASSOC);
    }

    public function selectWhere($conds , string $fields = "*" ) : array
    {
        $sql = "SELECT $fields FROM $this->table WHERE $conds ";
        $result = mysqli_query($this->conn , $sql );
        return mysqli_fetch_all($result , MYSQLI_ASSOC);
    }


    public function getCount() : array
    {
        $sql = "SELECT COUNT(*) AS cnt from $this->table";
        $result = mysqli_query($this->conn , $sql );
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function insert(string $fields , $values) 
    {
        $sql = "INSERT INTO $this->table ($fields) VALUES ($values)";
        return mysqli_query($this-> conn , $sql);
    }
    
    public function update(string $set , $id) : bool
    {
        $sql = "UPDATE $this->table SET $set WHERE id = $id";
        return mysqli_query($this->conn , $sql);    
    }    

    public function delete($id) 
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return mysqli_query($this->conn  , $sql);
    }
}






