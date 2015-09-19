<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



use App\Lib1 as L;
use App\Lib2\MyClass as Obj;


header('Content-type: text/plain');

require_once('day_12_namespace_lib1.php');
require_once('day_12_namespace_lib2.php');


echo L\MYCONST . "\n";
echo L\MyFunction() . "\n";
echo L\MyClass::WhoAmI() . "\n";
echo Obj::WhoAmI() . "\n";
/*

header('Content-type: text/plain');
echo MYCONST . "\n";
echo MyFunction() . "\n";
echo MyClass::WhoAmI() . "\n";
*/
