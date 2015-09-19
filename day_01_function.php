<?php 

//phpinfo();
//exit;

$a = 10;
$b = 20;

function testSum(&$a , $b) {
    $c = $a+$b;   
    return $c;
}

echo testSum($a, $b)."<br />";
echo $a."<br />";



function factorial($num) {
    
    if($num == 1) return 1;
    echo $num."<br />";
    return $num * factorial($num-1);
}

echo factorial(10);


define("ABCD");