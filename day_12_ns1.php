<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace mizan;

function iamtest() {
    
}

function strtoupper($str) {
    echo "i am inside";
}

class test {
    
    static function testNow() {
        echo strtoupper("test test test");
    }
}

test::testNow();