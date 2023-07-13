<?php
if(isset($_GET['action'])&& $_GET['query']){
    $tmp = $_GET['action'];
    $query = $_GET['query'];
} 
else{
    $tmp = '';
    $query = '';
}  
if($tmp == 'home'){
    include(__DIR__.'./home.php');
}
if($tmp == 'mystore'){
    include(__DIR__.'./mystore/main.php');
}
?>
