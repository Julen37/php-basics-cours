<?php
session_start();

echo "yippeeeeeeeeeee <br><br><br>";

// var_dump($_POST);
// die; 

// foreach ($_POST as $name => $value){
//     echo $name . " : " . $value . "<br>";
// }

// foreach ($_POST as $name => $value){
// echo htmlspecialchars($name . " : " . $value . "<br>");
// echo filter_input(INPUT_POST, $name . " : " . $value . "<br>", FILTER_SANITIZE_NUMBER_FLOAT );
// }

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS );
$price = filter_input(INPUT_POST, "price", FILTER_SANITIZE_NUMBER_FLOAT );

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}
$_SESSION['cart'] [] = [
    $name => $price    
];   
    
var_dump($_SESSION['cart']);