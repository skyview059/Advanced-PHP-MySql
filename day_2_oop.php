<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cricketer {
    
    public static $name;
    public $position;
    
    function __construct($name = "", $position ="") {
        $this->name = $name;
        $this->position = $position;
    }
    
    function iAmWho() {
        echo self::$name;
    }
    
    function decideWhoYouAre() {
        //$this->iAmWho();
        //self::iAmWho();
    }
    
}

class NationalCricketer extends Cricketer {
    

}

$sakib = new NationalCricketer('sakib');

echo $sakib->iAmWho();