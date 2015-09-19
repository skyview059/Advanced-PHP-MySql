<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$foo = "5.5false";
$foo += 2;

//echo $foo;

echo 100 * "1 abc" * true;

if(0) {
    echo "yes i am inside";
}



define("DBHOST","localhost");

echo ABC;


$a = ["name" => "mizanur rahman", "age" => 35, "test" => [0,1]];


foreach($a as $key => $value) {
    $$key = $value;
}

echo $name." > ".$age." > ";
print_r($test);
