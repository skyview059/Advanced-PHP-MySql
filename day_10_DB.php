<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DB {
    
    public $result;
    
    public function query($sql) {
        //mysqli_query($link, $sql);
        pg_query($sql);
    }
    
    public function getResultArray() {
        
    }
    
    public function getResultObject() {
        
    }
    
    public function insert() {
        
    }
    
    public function update() {
        
    }
    
    public function delete() {
        
    }
}

$db = new DB();

$db->query("select * from students");