<?php
phpinfo();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
$ronaldo = 99.5;
$messi = 98;
$ronnie = 80;

if($ronaldo > $messi) {
    
    if($ronaldo > $ronnie) {
        echo "Ronaldo is better than ronnie";
        echo "I love ronaldo";
    } else {
        echo "Ronnie is boss";

    }
    

} 
 else if($ronaldo > $ronnie) {
        echo "Ronaldo is better than ronnie";
        echo "I love ronaldo";
    } else {
    echo "Messi is the best";
    echo "Everyone loves messi";
}
*/
$num = 2;

/*
if($num == 1) {
    echo "One";
}
else if($num == 2) {
    echo "Two";
}
elseif($num == 3) {
    echo "Three";
}
elseif($num == 4) {
    echo "Four";
} else {
    echo "did not match";
}

if($num <= 5) {
    if($num == 1) {
    echo "One";
}
else if($num == 2) {
    echo "Two";
}
elseif($num == 3) {
    echo "Three";
}
elseif($num == 4) {
    echo "Four";
}
} else if($num <= 10) {
    
}

else if($num <= 100) {
  if($num == 96) {
    echo "One";
}
else if($num == 97) {
    echo "Two";
}
elseif($num == 3) {
    echo "Three";
}
elseif($num == 100) {
    echo "Four";
}  
}


switch ($num) {
    
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        echo "dui";
        break;
    case 3:
        echo "Three";
        break;
    case 4:
        echo "Four";
        break;
    default:
         echo "Not available";
    
}

if($num % 2 == 0):
    echo "I am even number";
    if($num == 2):
        echo "i am the first  prime";
    endif;
elseif($num % 2 == 1):
    echo "I am Odd number";
endif;




$i = 105;
$count = 0;
$countX = 0;
do {
    
    if($i%7 == 0) {
        $count=$count+1;
        echo $i."<br />";
        
    } elseif($i%5 == 0) {
        $countX=$countX+1;
        echo $i."<br />";
        
    } else {
        echo "did not found<br />";
    }
    
    $i++;
} while($i <=100);

echo "Total count ".$count." > ".$countX;

//while($row = mysqli_fetch_array($result)) {
    
//}

for($i = 5;$i<=100;$i+=5) {
    echo $i."<br />";
}
*/

/*
$a = array("name" => 1,"age" => 2, 3,4,5,6,7);
$a['test'] = 100;

print_r($a);

$keys = array_keys($a);
$vals = array_values($a);

print_r($keys);

foreach($a as $val) {
    echo $key." > ".$val."<Br />";  
    
    if($key == "name") continue;
    
    echo "test is test<br />";
}

*/

/*
function getSum(...$nums, $num) {
    echo array_sum($nums)."<br />";
}

getSum(1,2);
getSum(1,2,3);
getSum(1,2,3,4);
*/