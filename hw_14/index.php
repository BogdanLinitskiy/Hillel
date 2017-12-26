<?php

if(!isset($_COOKIE['cart'])){
    $cart =$_COOKIE['cart'];
    $cart =json_decode($cart,true);
}
require_once 'Cart/Cart.php';
require_once 'DB/connect_db.php';

$c = new Cart();
$c->addProduct('rofl','dede',300,"uah");
$c->getProducts();