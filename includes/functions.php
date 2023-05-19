<?php 
require('config.php');

function redirect($location){
    header("location:".$location);
}

function query($sql){
    global $connection;
    return mysqli_query($connection,$sql);
}

function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

function logout(){
    $_SESSION['logged'] = false;
    session_destroy();
    redirect("index.php");
}

function empty_cart($id,$price){
    unset($_SESSION['products_'.$id]);
    $_SESSION['count'] -= 1;
    $_SESSION['totaux'] -= $price;
    redirect("cart.php"); 
}
