<?php 


if($_GET['script']) {
    include($_GET['script']);
}
if($_POST) {
$user_input = $_POST['comment']; 
eval($user_input); 

}
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//print_r($_SERVER);
session_start();

$token = sha1($_SERVER['SCRIPT_NAME'].rand(10,10000).  microtime()."token");

$_SESSION['_mytoken'] = $token;

//echo $token;


?>

<html>
    <body>
  <?php      
        if($_POST) {
    echo htmlspecialchars($_POST['comment']);
}
?>
        
        <form method="post">
        <b>My token is <?php echo $_SESSION['_mytoken']?></b>
        <Br />
        
        <textarea name="comment" cols="80" rows="10"></textarea>
        <Br />
        <button type="submit">Save</button>
        </form>
    </body>
    
</html>