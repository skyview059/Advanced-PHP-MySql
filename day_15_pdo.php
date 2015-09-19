<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
require("db.php");

$db = new DB();

$db->query("select * from users order by userName asc");

while($row = $db->fetchAssocicate()) {
    
}
 
*/


$host = "localhost";
$user = "root";
$pass = "";
$dbName = "einvasion_core";

/*

$mySQL = new mysqli($host, $user, $pass, $dbName);

$obj = $mySQL->query("select * from users");

print_r($obj);

while($row = $obj->fetch_object()) {
    //print_r($row);

}
*/

/*
$pdo = new PDO("pgsql:host=localhost;dbname=einvasion_core", "root", "");

$stmt = $pdo->query("select * from users");

$stmt->execute();

//print_r($stmt->fetchObject());


while($row = $stmt->fetchObject()) {
    print_r($row);
}

*/


        
  /*      
try {
$pdo = new PDO("mysql:host=localhost;dbname=einvasion_core", "root", "");
        ;
$pStmt = $pdo->prepare("select * from orders where  storeID = :storeid and orderID = :orderid");
//$pStmt->bind_param("ss", $orderID, $storeID);

$pStmt->bindParam(":orderid", $orderID, PDO::PARAM_INT);
$pStmt->bindParam(":storeid", $storeID);


$orderID = 500012;
$storeID = 1;

$pStmt->execute();
$row = $pStmt->fetchObject();

print_r($row);

$orderID = 500018;
$storeID = 1;

$pStmt->execute();

$row = $pStmt->fetchObject();
print_r($row);


$orderID = 500024;
$storeID = 1;

$pStmt->execute();

$row = $pStmt->fetchObject();
print_r($row);

} catch(PDOException $e) {
    echo $e->getMessage();
}
*/

/*
$userID = $_POST['username'];
$password = $_POST['password'];


$sql = "select * from users where userid = '".$userID."' and password = '".md5($password)."'";

echo ($sql);

*/



$pdo = new PDO("mysql:host=localhost;dbname=einvasion_core", "root", "");

/*
$pStmt = $pdo->prepare("insert into orders set  storeID = :storeid , orderID = :orderid");
//$pStmt->bind_param("ss", $orderID, $storeID);

$pStmt->bindParam(":orderid", $orderID, PDO::PARAM_INT);
$pStmt->bindParam(":storeid", $storeID);

$pdo->beginTransaction();

try {
    
$orderID = 17500024;
$storeID = 1;

$pStmt->execute();

$orderID = 18500024;
$storeID = 1;

$pStmt->execute();

$orderID = 19500024;
$storeID = 1;

$pStmt->execute();


$orderID = 1500024;
$storeID = 1;
$pStmt->execute();

if($pStmt->errorCode()) {
    throw new PDOException("duplicate entry");
}

$pdo->commit();
    
} catch (PDOException $p) {
    
    echo "Error: ".$p->getMessage();
    
    $pdo->rollBack();
} 

*/

/*
$pStmt = $pdo->prepare("CALL advphp()");
$pStmt->execute();

do {
while($row = $pStmt->fetchColumn(1)) {
   
   echo $row."<br />";
}
} while($pStmt->nextRowset());
*/

/*
$pStmt->nextRowset();
// read second result set
while ($row = $pStmt->fetchObject()) {
    print_r($row);
}

$pStmt->nextRowset();
// read second result set
while ($row = $pStmt->fetchObject()) {
    print_r($row);
}

do {
  while($row = $pStmt->fetchObject()) {
    print_r($row);
}  
    
} while($pStmt->nextRowset());
*/

$pStmt = $pdo->prepare("CALL orderInfo(?)");
//$pStmt->bindColumn(1, 85358);
$pStmt->execute(array(85399));
do {
  while($row = $pStmt->fetchObject()) {
    print_r($row);
}  
    
} while($pStmt->nextRowset());
