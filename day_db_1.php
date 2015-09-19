<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// example of a wrapper class

class db {
    
    public $connection;
    public $result;
    
    private $host = "";
    
    
    public function __construct() {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
    
    public function query($query = "") {
        $this->result = mysqli_query($this->connection, $query);
    }
    
    public function fetchAssocicate() {
        return mysqli_fetch_assoc($this->result);
    }
    
}

