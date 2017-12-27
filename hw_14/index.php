<?php

require_once 'Cart/Cart.php';
use \Cart\Cart as Cart;
use \Cart\ExChange as ExChange;

$c = new Cart();
$c->addProduct('rofl1','dede',300,"uah");
$c->addProduct('rofl','dede',300,"uah");
$c->saveCart();
$c->getProducts();